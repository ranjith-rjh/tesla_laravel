--trigger qui empêche de mettre un stock < 0
--fonctionnement: le trigger est déclenché lors d’un update ou un insert de la table stock
--il appelle la procédure qui vérifie si le stock entré est > 0, sinon quoi il raise exception

CREATE OR REPLACE FUNCTION verif_styles_stock()
RETURNS trigger
AS $$
DECLARE
BEGIN
	IF new.stock < 0 THEN
	   RAISE EXCEPTION 'Le stock ne peut pas être < 0 !';
	END IF;
	RETURN NEW; 
END;
$$ language 'plpgsql';


DROP trigger IF EXISTS bf_upd_ins_styles ON tesla.styles;
CREATE trigger bf_upd_ins_styles
	BEFORE UPDATE OR INSERT ON tesla.styles
	FOR EACH ROW
EXECUTE PROCEDURE verif_styles_stock();

--##################################################
--##################################################
--trigger qui empêche de créer un panier (pour une commande) avec un nombre d'articles > au stock disponible
--fonctionnement: le trigger est déclenché lors d’un update ou un insert de la table panier
--on vérifie d’abord si la quantité que l’on essaie de donner est > 0, sinon quoi on raise exception
--on récupère ensuite le stock dispo pour le comparer à la quantité donnée dans le futur panier
CREATE OR REPLACE FUNCTION verif_styles_panier_stock()
RETURNS trigger
AS $$
DECLARE
  vStockDispo tesla.styles.stock%type;
  vStockFinal tesla.styles.stock%type;
BEGIN
	IF cast(new.quantite AS INTEGER) <= 0 THEN 
		RAISE EXCEPTION 'Impossible de créer un panier avec une quantite inférieur ou égale à 0.';
	END IF;
	SELECT stock INTO STRICT vStockDispo FROM tesla.styles WHERE id=new.style_id;
	vStockFinal := vStockDispo- cast(new.quantite AS INTEGER);
	IF vStockFinal < 0 THEN
	   RAISE EXCEPTION 'On ne peut pas acheter plus d''articles qu''il y en a !';
	END IF;
	RETURN NEW; 
END;
$$ language 'plpgsql';

DROP trigger IF EXISTS bf_ins_upd_panier_style ON tesla.panier_style;
CREATE trigger bf_ins_upd_panier_style
	BEFORE UPDATE OR INSERT ON tesla.panier_style
	FOR EACH ROW
EXECUTE PROCEDURE verif_styles_panier_stock();


--##################################################
--##################################################
--trigger qui empêche de créer une facture (pour une commande) sans type de commande (que ce soit une commande accessoire ou d’un véhicule)
--fonctionnement: le trigger est déclenché lors d’un update, pas sous insert car en back-end nous faisons un première insert avec ces champs vides ensuite on update ces champs, dans la table factures
--On vérifie si la facture les deux types (panier_id et vehicule_id), et que cela fasse l’update si et seulement si un des deux types est non null ainsi le deuxièmes doit être null

CREATE OR REPLACE FUNCTION tesla.verif_upd_factures()
RETURNS trigger
AS $$
DECLARE
BEGIN
	IF new.panier_id is null AND new.vehicule_id is null THEN
	   RAISE EXCEPTION 'La facture doit être composé d''un type.';
	ELSIF new.panier_id is not null AND new.vehicule_id is not null THEN
		RAISE EXCEPTION 'La facture doit être composé d''un seul type.';
	ELSE
		RETURN NEW; 
	END IF;
END;
$$ language 'plpgsql';

DROP trigger IF EXISTS bf_upd_factures ON tesla.factures;
CREATE trigger bf_upd_factures
	BEFORE UPDATE ON tesla.factures
	FOR EACH ROW
EXECUTE PROCEDURE tesla.verif_upd_factures();



--##################################################
--##################################################
--trigger qui empêche d’insérer ou mettre à jour un utilisateur, ou l’email doit respecter le format “NomUtilisateur@NomDomaine.Hebergeur” et le nom, prénom doivent être saisis
--fonctionnement: le trigger est déclenché lors d’un update ou un insert de la table users

CREATE OR REPLACE FUNCTION tesla.verif_upd_ins_users()
RETURNS trigger
AS $$
DECLARE
BEGIN
	IF new.email is null OR new.email not like '%@%.%' THEN
	   RAISE EXCEPTION 'Respecter le format NomUtilisateur@NomDomaine.Hebergeur';
	ELSIF new.nom is null OR new.nom = '' OR new.prenom is null OR new.prenom = '' THEN
		RAISE EXCEPTION 'Le nom et prénom doivent être saisit';
	ELSIF new.google_id is null AND (new.password is null OR new.password = '')THEN
		RAISE EXCEPTION 'Il faut saisir un mot de passe si google_id est null';
	ELSE
		RETURN NEW; 
	END IF;
END;
$$ language 'plpgsql';


DROP trigger IF EXISTS bf_upd_ins_users ON tesla.users;
CREATE trigger bf_upd_ins_users
	BEFORE UPDATE OR INSERT ON tesla.users
	FOR EACH ROW
EXECUTE PROCEDURE tesla.verif_upd_ins_users();



--##################################################
--##################################################

--procédure stockée qui supprime ou anonymise les users inactifs depuis plus de 3 ans
--fonctionne aussi si l’utilisateur a juste créé un compte et ne s’est jamais “reconnecté”
--explication de la procédure: on boucle sur chaque user
--pour chacun,: on vérifie s’il a une commande pas encore livrée (si oui, on ne fait rien)
--on vérifie si sa dernière connexion date d’il y a plus de 3 ans (si non, on ne fait rien)
--on vérifie si il a au moins un lien avec la base de données (s’il a réservé un essai, acheté un véhicule, a acheté des articles ou encore s’il a enregistré un véhicule)
--si une (ou plus) de ces conditions est vérifiée, on ne supprime pas le compte mais on l’anonymise.
--anonymisation: suppression des champs qui peuvent êtres ‘null’ (comme le second prénom ou l’adresse), pour les autres, on les rend anonymes.
--Par précaution, on supprime aussi l’adresse lié au User dans la table facture (car cette personne a sûrement fait livrer sa commande à son domicile)
--sinon, on supprime le compte

CREATE OR REPLACE FUNCTION suppr_or_anonymize_user()
RETURNS void
AS $$
DECLARE
	--declare
	user_ids integer;
	user_dates tesla.users."derniereConnexion"%type;
	
	vNbLignes integer;
	vIsAnonymization bool;
BEGIN
	FOR user_ids IN SELECT id FROM tesla.users
		LOOP
			--si nb ligne > 0 (nombre commandes EN COURS)
			SELECT COUNT(ts.id) INTO STRICT vNbLignes FROM tesla.users ts
			JOIN tesla.factures tf ON tf.user_id=ts.id
			WHERE ts.id=user_ids AND tf.etat_commande_id=1;
            --on vérifie quand même (au cas où), que le user n’ai pas de commande en cours
			SELECT "derniereConnexion" INTO STRICT user_dates from tesla.users where id=user_ids;
			IF vNbLignes>0 OR user_dates >= (current_date - interval'3 years' ) THEN --et on vérifie que l'utilisateur est bien innactif depuis 3 ans, sinon quoi ...
                -- ...on ne fait rien
				RAISE NOTICE 'USER % : annulation', user_ids;
			ELSE
				vIsAnonymization := false;
				--on regarde si on a des enregistrements
				--SI IL Y A UN LIEN AVEC UNE TABLE ESSAI,VEHICULE ENREGISTRE OU FACTURE 

				--SI NB LIGNE > 0 (essais)
				SELECT COUNT(tu.id) INTO STRICT vNbLignes FROM tesla.users tu
				JOIN tesla.essais e ON e.user_id=tu.id
				WHERE tu.id=user_ids;
				IF vNbLignes>0 THEN
					vIsAnonymization := true;
				END IF;

				--OU QUE NB LIGNE > 0 (vehicules enregistrés)
				SELECT COUNT(tu.id) INTO STRICT vNbLignes FROM tesla.users tu
				JOIN tesla.user_vehicule uv ON uv.user_id=tu.id
				WHERE tu.id=user_ids;
				IF vNbLignes>0 THEN
					vIsAnonymization := true;
				END IF;

				--OU QUE NB LIGNE > 0 (factues/commandes)
				SELECT COUNT(tu.id) INTO STRICT vNbLignes FROM tesla.users tu
				JOIN tesla.factures uf ON uf.user_id=tu.id
				WHERE tu.id=user_ids;
				IF vNbLignes>0 THEN
					vIsAnonymization := true;
				END IF;

				--dans ce cas, on anonymise
				IF vIsAnonymization THEN
                
					--suppr adresse de facture
					UPDATE tesla.factures
						SET adresse_id = null
						WHERE user_id=user_ids;

					--suppr infos relatives au compte
					UPDATE tesla.users
						SET email=CONCAT ( 'supprime_',id, '@supprime.supprime'  ),
						 nom=CONCAT ( 'nom_supprime_',id  ),
						 prenom=CONCAT ( 'prenom_supprime_',id  ),
						 "secondPrenom"=null,
						 nomentreprise=null,
						 numerotva=null,
						 password='##########',
						 adresse_id=null,
						 telephone=null,
						 remember_token=null,
						 google_id=null,
						 type_compte_id=4,
						"derniereConnexion"=null
						WHERE id=user_ids;
				ELSE
				--sinon, on supprime
					--RAISE NOTICE 'USER % : suppression', user_ids;
					delete from tesla.users where id=user_ids;
				END IF;
			END IF;	
		END LOOP;		
END;
$$ language 'plpgsql';









