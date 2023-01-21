/*==============================================================*/
/* INSERTION                                                    */
/*==============================================================*/

--CODES PROMO

ALTER SEQUENCE code_promos_id_seq RESTART WITH 1;

INSERT INTO code_promos(id,code,montant) VALUES(1, 'LEO10', 10);
INSERT INTO code_promos(id,code,montant) VALUES(2, 'JORDAN23', 230);
INSERT INTO code_promos(id,code,montant) VALUES(3, 'REMY15', 15);
INSERT INTO code_promos(id,code,montant) VALUES(4, 'RANJITH20', 20);


ALTER SEQUENCE mode_paiements_id_seq RESTART WITH 1;

INSERT INTO mode_paiements(libelle) VALUES('comptant');
INSERT INTO mode_paiements(libelle) VALUES('LOA');
INSERT INTO mode_paiements(libelle) VALUES('LDD');
INSERT INTO mode_paiements(libelle) VALUES('crédit');


INSERT INTO modeles(id,libelle) VALUES (1,'Model S');
INSERT INTO modeles(id,libelle) VALUES (2,'Model 3');
INSERT INTO modeles(id,libelle) VALUES (3,'Model X');
INSERT INTO modeles(id,libelle) VALUES (4,'Model Y');

ALTER SEQUENCE modeles_id_seq RESTART WITH 5;


INSERT INTO classe_energetiques(id,libelle) VALUES (1,'A');
INSERT INTO classe_energetiques(id,libelle) VALUES (2,'B');
INSERT INTO classe_energetiques(id,libelle) VALUES (3,'C');
INSERT INTO classe_energetiques(id,libelle) VALUES (4,'D');
INSERT INTO classe_energetiques(id,libelle) VALUES (5,'E');
INSERT INTO classe_energetiques(id,libelle) VALUES (6,'F');

ALTER SEQUENCE classe_energetiques_id_seq RESTART WITH 7;


INSERT INTO motorisations(id,modele_id,classe_energetique_id,libelle,acceleration,vitesse_max,autonomie,motopropulseur,prix) VALUES (1,1,1,'Model S Plaid', 2.1,322,600,'Transmission intégrale Tri-Motor', 138990);
INSERT INTO motorisations(id,modele_id,classe_energetique_id,libelle,acceleration,vitesse_max,autonomie,motopropulseur,prix) VALUES (2,1,1,'Model S', 3.2,250,634,'Transmission intégrale Dual Motor',0);
INSERT INTO motorisations(id,modele_id,classe_energetique_id,libelle,acceleration,vitesse_max,autonomie,motopropulseur,prix) VALUES (3,2,1,'Model 3', 6.1,255,491,'Propulsion',53490);
INSERT INTO motorisations(id,modele_id,classe_energetique_id,libelle,acceleration,vitesse_max,autonomie,motopropulseur,prix) VALUES (4,2,1,'Model 3 Grande Autonomie',4.4,233,602,'Transmission intégrale Dual Motor',62490);
INSERT INTO motorisations(id,modele_id,classe_energetique_id,libelle,acceleration,vitesse_max,autonomie,motopropulseur,prix) VALUES (5,2,1,'Model 3 Performance',3.3,261,547,'Transmission intégrale Dual Motor',66490);
INSERT INTO motorisations(id,modele_id,classe_energetique_id,libelle,acceleration,vitesse_max,autonomie,motopropulseur,prix) VALUES (6,3,1,'Model X Plaid',2.6,262,543,'Transmission intégrale Tri-Motor',141990);
INSERT INTO motorisations(id,modele_id,classe_energetique_id,libelle,acceleration,vitesse_max,autonomie,motopropulseur,prix) VALUES (7,3,1,'Model X',3.9,250,576,'Transmission intégrale Dual Motor',0);
INSERT INTO motorisations(id,modele_id,classe_energetique_id,libelle,acceleration,vitesse_max,autonomie,motopropulseur,prix) VALUES (8,4,1,'Model Y',6.9,217,430,'Propulsion',49990);
INSERT INTO motorisations(id,modele_id,classe_energetique_id,libelle,acceleration,vitesse_max,autonomie,motopropulseur,prix) VALUES (9,4,1,'Model Y Grande Autonomie',5.0,217,533,'Transmission intégrale Dual Motor',64990);
INSERT INTO motorisations(id,modele_id,classe_energetique_id,libelle,acceleration,vitesse_max,autonomie,motopropulseur,prix) VALUES (10,4,1,'Model Y Performance',3.7,250,514,'Transmission intégrale Dual Motor',69990);

ALTER SEQUENCE motorisations_id_seq RESTART WITH 11;



-- POUR RESET
ALTER SEQUENCE categorie_options_id_seq RESTART WITH 1;

INSERT INTO categorie_options(libelle) VALUES('Couleur');
INSERT INTO categorie_options(libelle) VALUES('Jantes');
INSERT INTO categorie_options(libelle) VALUES('Roues hiver');
INSERT INTO categorie_options(libelle) VALUES('Capacité de traction');
INSERT INTO categorie_options(libelle) VALUES('Crochet d''attelage');
INSERT INTO categorie_options(libelle) VALUES('Interieur');
INSERT INTO categorie_options(libelle) VALUES('Autopilot');
INSERT INTO categorie_options(libelle) VALUES('Recharger');

-- POUR RESET
ALTER SEQUENCE choix_options_id_seq RESTART WITH 1;

-- COULEUR
INSERT INTO choix_options(libelle) VALUES('Blanc Nacré Multicouches');
INSERT INTO choix_options(libelle) VALUES('Noir Uni');
INSERT INTO choix_options(libelle) VALUES('Gris Nuit Métallisé');
INSERT INTO choix_options(libelle, description) VALUES('Quicksilver', 'Développées à la Gigafactory de Berlin.<br>Uniquement disponibles en Europe et au Moyen-Orient.');
INSERT INTO choix_options(libelle) VALUES('Bleu Outremer Métallisé');
INSERT INTO choix_options(libelle) VALUES('Rouge Multicouches');
INSERT INTO choix_options(libelle, description) VALUES('Midnight Cherry Red', 'Développées à la Gigafactory de Berlin. <br>Uniquement disponibles en Europe et au Moyen-Orient.');

-- JANTES
INSERT INTO choix_options(libelle) VALUES('Jantes Tempest 19"');
INSERT INTO choix_options(libelle) VALUES('Jantes Arachnid 21"');
INSERT INTO choix_options(libelle) VALUES('Jantes Cyberstream 20"');
INSERT INTO choix_options(libelle) VALUES('Jantes Turbine 22"');
INSERT INTO choix_options(libelle, description) VALUES('Jantes Gemini 19"', 'Autonomie est. selon la configuration : 455 km');
INSERT INTO choix_options(libelle, description) VALUES('Jantes Induction 20"', 'Autonomie est. selon la configuration : 430 km');
INSERT INTO choix_options(libelle, description) VALUES('Jantes Aero 18"', 'Autonomie est. selon la configuration : 510 km');
INSERT INTO choix_options(libelle, description) VALUES('Jantes Sport 19"', 'Autonomie certifiée (WLTP) : 491 km');
INSERT INTO choix_options(libelle, description) VALUES('Jantes Uberturbine 20"', 'Autonomie certifiée (WLTP) : 547 km');
INSERT INTO choix_options(libelle, description) VALUES('Jantes Überturbine 21"', 'Autonomie certifiée (WLTP) : 514 km');

-- PACK PNEU HIVER
INSERT INTO choix_options(libelle, description) VALUES('Pack de pneus hiver Pirelli 19"', 'Pneus hiver Pirelli P Zero présentant une faible résistance au roulement et une forte adhérence sur les routes enneigées. Ce pack comprend quatre jantes Tempest de 19" et leurs pneus montés, ainsi que des enjoliveurs Tempest dark.');
INSERT INTO choix_options(libelle, description) VALUES('Pack de pneus hiver Pirelli 20"', 'Pneus hiver Pirelli Scorpion présentant une faible résistance au roulement et une forte adhérence sur les routes enneigées. Ce pack comprend quatre jantes Cyberstream de 20" et leurs pneus montés, ainsi que des enjoliveurs Arachnid.');

-- ATTELAGE
INSERT INTO choix_options(description) VALUES('Dispose d’une barre et d’un récepteur d’attelage en acier haute résistance capable de tracter jusqu''à 1 600 kg. Crochet d’attelage vendu séparément.');
INSERT INTO choix_options(description) VALUES('Barre d’attelage en acier haute résistance de classe II, capable de tracter jusqu''à 2 250 kg');
INSERT INTO choix_options(description) VALUES('Crochet d''attelage en acier haute résistance avec adaptateur amovible. Capacité de traction : jusqu''à 1 000 kg.');
INSERT INTO choix_options(description) VALUES('Barre de remorquage en acier haute résistance de classe II capable de tracter jusqu''à 1 600 kg');

-- INTERIEUR
INSERT INTO choix_options(libelle, description) VALUES('Noir', 'Finitions en fibre de carbone');
INSERT INTO choix_options(libelle, description) VALUES('Noir et blanc', 'Finitions en fibre de carbone');
INSERT INTO choix_options(libelle, description) VALUES('Beige', 'Finitions en fibre de carbone');

-- AUTOPILOT
INSERT INTO choix_options(libelle, description) VALUES ('Autopilot amélioré', 'Navigation en Autopilot<br> Changement de voie auto<br> Parking auto<br> Sortie auto<br> Sortie auto intelligente');
INSERT INTO choix_options(libelle, description) VALUES ('Capacité de conduite entièrement autonome', 'Toutes les fonctionnalités de l''Autopilot de base et de l''Autopilot amélioré<br> Reconnaissance et réaction aux feux de signalisation et aux panneaux stop');


-- RECHARGE
INSERT INTO choix_options(libelle, description) VALUES ('Wall Connector', 'Notre solution de recharge à domicile recommandée.<br>Avec une vitesse de recharge allant jusqu''à 71 kilomètres d''autonomie supplémentaire par heure en fonction du modèle de véhicule, une conception polyvalente pour l''intérieur et l''extérieur ainsi qu''un câble de 7,3 mètres, le Wall Connector est notre moyen le plus rapide et le plus pratique de recharger son véhicule à domicile.<br>Installation requise et non incluse.');


INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(1,1);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(2,1);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(3,1);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(4,1);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(5,1);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(6,1);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(7,1);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(8,2);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(9,2);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(10,2);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(11,2);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(12,2);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(13,2);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(14,2);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(15,2);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(16,2);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(17,2);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(18,3);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(19,3);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(20,4);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(21,5);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(22,5);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(23,5);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(24,6);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(25,6);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(26,6);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(27,7);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(28,7);
INSERT INTO choix_option_categorie_option(choix_option_id, categorie_option_id) VALUES(29,8);


-- MODEL S PLAID
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (1,1,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (1,2,1800);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (1,3,2200);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (1,5,2200);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (1,6,2200);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (1,8,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (1,9,4900);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (1,18,4000);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (1,20,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (1,24,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (1,25,2400);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (1,26,2400);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (1,27,3800);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (1,28,7500);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (1,29,500);

-- MODEL S ==> PAS DISPO POUR L'INSTANT 

-- MODEL 3
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (3,1,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (3,2,1200);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (3,3,1600);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (3,5,1600);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (3,6,2000);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (3,14,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (3,15,1190);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (3,22,1350);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (3,24,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (3,25,1190);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (3,27,3800);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (3,28,7500);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (3,29,500);

-- MODEL 3 GRANDE AUTONOMIE
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (4,1,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (4,2,1200);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (4,3,1600);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (4,5,1600);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (4,6,2000);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (4,14,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (4,15,1190);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (4,22,1350);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (4,24,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (4,25,1190);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (4,27,3800);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (4,28,7500);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (4,29,500);

-- MODEL 3 PERFORMANCE
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (5,1,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (5,2,1200);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (5,3,1600);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (5,5,1600);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (5,6,2000);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (5,16,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (5,24,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (5,25,1190);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (5,27,3800);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (5,28,7500);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (5,29,500);

-- MODEL X PLAID
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (6,1,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (6,2,1800);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (6,3,2200);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (6,5,2200);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (6,6,2200);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (6,10,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (6,11,5900);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (6,19,4500);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (6,21,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (6,24,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (6,25,2400);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (6,26,2400);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (6,27,3800);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (6,28,7500);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (6,29,500);

-- MODEL X ==> PAS DISPO POUR L'INSTANT 

-- MODEL Y
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (8,1,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (8,2,1200);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (8,3,1600);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (8,5,1600);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (8,6,2000);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (8,12,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (8,13,2100);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (8,23,1350);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (8,24,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (8,25,1190);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (8,27,3800);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (8,28,7500);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (8,29,500);

-- MODEL Y GRANDE AUTONOMIE
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (9,1,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (9,2,1200);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (9,4,3000);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (9,5,1600);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (9,7,3200);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (9,12,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (9,13,2100);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (9,23,1350);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (9,24,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (9,25,1190);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (9,27,3800);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (9,28,7500);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (9,29,500);

-- MODEL Y PERFORMANCE
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (10,1,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (10,2,1200);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (10,4,3000);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (10,5,1600);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (10,7,3200);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (10,17,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (10,23,1350);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (10,24,0);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (10,25,1190);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (10,27,3800);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (10,28,7500);
INSERT INTO choix_option_motorisation(motorisation_id, choix_option_id, cout) VALUES (10,29,500);


--TYPE_COMPTES
INSERT INTO type_comptes (id,libelle) VALUES (1,'Personnel');
INSERT INTO type_comptes (id,libelle) VALUES (2,'Business');
INSERT INTO type_comptes (id,libelle) VALUES (3,'Administrateur');
insert into type_comptes values(4,'Supprimé');

ALTER SEQUENCE type_comptes_id_seq RESTART WITH 3;


-- photos des motorisations pour affichage dans la page de configuration des motorisations
INSERT INTO photos(id,motorisation_id, lien_photo) VALUES (1,1,'../images/configuration/modele-s/s-plaid/vue-devant.png');
INSERT INTO photos(id, motorisation_id, lien_photo) VALUES (2,2,'../images/configuration/modele-s/s-plaid/vue-devant.png');
INSERT INTO photos(id, motorisation_id, lien_photo) VALUES (3,3,'../images/configuration/modele-3/base/vue-devant.png');
INSERT INTO photos(id, motorisation_id, lien_photo) VALUES (4,4,'../images/configuration/modele-3/grande-autonomie/vue-devant.png');
INSERT INTO photos(id, motorisation_id, lien_photo) VALUES (5,5,'../images/configuration/modele-3/performance/vue-devant.png');
INSERT INTO photos(id, motorisation_id, lien_photo) VALUES (6,6,'../images/configuration/modele-x/x-plaid/vue-devant.png');
INSERT INTO photos(id, motorisation_id, lien_photo) VALUES (7,7,'../images/configuration/modele-x/x-plaid/vue-devant.png');
INSERT INTO photos(id, motorisation_id, lien_photo) VALUES (8,8,'../images/configuration/modele-y/base/vue-devant.png');
INSERT INTO photos(id, motorisation_id, lien_photo) VALUES (9,9,'../images/configuration/modele-y/grande-autonomie/vue-devant.png');
INSERT INTO photos(id, motorisation_id, lien_photo) VALUES (10,10,'../images/configuration/modele-y/performance/vue-devant.png');

-- photos des choix_options pour affichage dans la page de configuration des choix options
INSERT INTO photos(id, choix_option_id, lien_photo) VALUES (11,1,'/images/configuration/couleur/couleur-blanc.png');
INSERT INTO photos(id, choix_option_id, lien_photo) VALUES (12,2,'/images/configuration/couleur/couleur-noir.png');
INSERT INTO photos(id, choix_option_id, lien_photo) VALUES (13,3,'/images/configuration/couleur/couleur-silver.png');
INSERT INTO photos(id, choix_option_id, lien_photo) VALUES (14,4,'/images/configuration/couleur/couleur-quicksilver.png');
INSERT INTO photos(id, choix_option_id, lien_photo) VALUES (15,5,'/images/configuration/couleur/couleur-bleu.png');
INSERT INTO photos(id, choix_option_id, lien_photo) VALUES (16,6,'/images/configuration/couleur/couleur-rouge.png');
INSERT INTO photos(id, choix_option_id, lien_photo) VALUES (17,7,'/images/configuration/couleur/couleur-cherry-red.png');

INSERT INTO photos(id, choix_option_id, lien_photo) VALUES (18,24,'/images/configuration/couleur-interieur/choix-interieur-noir.png');
INSERT INTO photos(id, choix_option_id, lien_photo) VALUES (19,25,'/images/configuration/couleur-interieur/choix-interieur-blanc.png');
INSERT INTO photos(id, choix_option_id, lien_photo) VALUES (20,26,'/images/configuration/couleur-interieur/choix-interieur-beige.png');

INSERT INTO photos(id, choix_option_id, lien_photo) VALUES (21,8,'/images/configuration/jantes/jantes-tempest-19.png');
INSERT INTO photos(id, choix_option_id, lien_photo) VALUES (22,9,'/images/configuration/jantes/jantes-arachnid-21.png');
INSERT INTO photos(id, choix_option_id, lien_photo) VALUES (23,10,'/images/configuration/jantes/jantes-cyberstream-20.png');
INSERT INTO photos(id, choix_option_id, lien_photo) VALUES (24,11,'/images/configuration/jantes/jantes-turbine-22.png');
INSERT INTO photos(id, choix_option_id, lien_photo) VALUES (25,12,'/images/configuration/jantes/jantes-gemini-19.png');
INSERT INTO photos(id, choix_option_id, lien_photo) VALUES (26,13,'/images/configuration/jantes/jantes-induction-20.png');
INSERT INTO photos(id, choix_option_id, lien_photo) VALUES (27,14,'/images/configuration/jantes/jantes-aero-18.png');
INSERT INTO photos(id, choix_option_id, lien_photo) VALUES (28,15,'/images/configuration/jantes/jantes-sport-19.png');
INSERT INTO photos(id, choix_option_id, lien_photo) VALUES (29,16,'/images/configuration/jantes/jantes-uberturbine-20.png');
INSERT INTO photos(id, choix_option_id, lien_photo) VALUES (30,17,'/images/configuration/jantes/jantes-uberturbine-21.png');




--les catégories d'accessoire
ALTER SEQUENCE categorie_accessoires_id_seq RESTART WITH 1;

INSERT INTO CATEGORIE_ACCESSOIRES(libelle) VALUES('Recharger');
INSERT INTO CATEGORIE_ACCESSOIRES(libelle) VALUES('Accessoires pour les véhicules');
INSERT INTO CATEGORIE_ACCESSOIRES(libelle) VALUES('Vêtements');
INSERT INTO CATEGORIE_ACCESSOIRES(libelle) VALUES('Lifestyle');

INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id, libelle) VALUES(1, 'A Domicile');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id, libelle) VALUES(1, 'Sur La Route');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id, libelle) VALUES(1, 'Pièces Détachées');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id, libelle) VALUES(2, 'Model S');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id, libelle) VALUES(2, 'Model 3');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id, libelle) VALUES(2, 'Model X');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id, libelle) VALUES(2, 'Model Y');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id, libelle) VALUES(3, 'Homme');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id, libelle) VALUES(3, 'Femme');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id, libelle) VALUES(3, 'Enfant');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id, libelle) VALUES(4, 'Récipients Pour Boissons');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id, libelle) VALUES(4, 'Mini Tesla');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id, libelle) VALUES(4, 'Du Dehors & Technologies');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(8,'Meilleures Ventes');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(8,'Intérieur');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(8,'Extérieur');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(8,'Jantes et pneumatiques');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(8,'Tapis de sol');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(8,'Pièces détachées');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(8,'Clés');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(9,'Meilleures Ventes');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(9,'Intérieur');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(9,'Extérieur');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(9,'Jantes et pneumatiques');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(9,'Tapis de sol');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(9,'Pièces détachées');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(9,'Clés');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(10,'Meilleures Ventes');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(10,'Intérieur');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(10,'Extérieur');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(10,'Jantes et pneumatiques');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(10,'Tapis de sol');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(10,'Pièces détachées');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(10,'Clés');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(11,'Meilleures Ventes');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(11,'Intérieur');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(11,'Extérieur');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(11,'Jantes et pneumatiques');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(11,'Tapis de sol');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(11,'Pièces détachées');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(11,'Clés');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(12, 'Meilleures Ventes');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(12, 'T-shirts');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(12, 'Vêtements de sport pour homme');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(12, 'Sweat-shirts');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(12, 'Vestes');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(12, 'Casquettes et bonnets');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(12, 'Chaussettes');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(13, 'Meilleures Ventes');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(13, 'T-shirts');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(13, 'Vêtements de sport pour femme');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(13, 'Sweat-shirts');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(13, 'Vestes');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(13, 'Casquettes et bonnets');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(13, 'Chaussettes');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(14, 'Meilleurs ventes');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(14, 'T-shirts');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(14, 'Combinaisons');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(14, 'Vestes');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(14, 'Casquettes et bonnets');
INSERT INTO CATEGORIE_ACCESSOIRES(categorie_accessoire_id,libelle) VALUES(14, 'Chaussettes');

--Insert Style
ALTER SEQUENCE styles_id_seq RESTART WITH 1;

INSERT INTO STYLES(libelle, stock) VALUES('Casquette souple réglable avec logo T - Gris', 53);
INSERT INTO STYLES(libelle, stock) VALUES('Casquette souple réglable avec logo T - Noir', 5);
INSERT INTO STYLES(libelle, stock) VALUES('Bonnet à revers thermique - Blanc', 15);
INSERT INTO STYLES(libelle, stock) VALUES('Bonnet à revers thermique - Noir', 20);
INSERT INTO STYLES(libelle, stock) VALUES('Socle pour connecteur mural', 120);
INSERT INTO STYLES(libelle, stock) VALUES('Verres à siroter Tesla',200);
INSERT INTO STYLES(libelle, stock) VALUES('Pull Model X-mas',0);
INSERT INTO STYLES(libelle, stock) VALUES('Model S – Pare-soleil pour toit panoramique',500);
INSERT INTO STYLES(libelle, stock) VALUES('Pare-soleil pour hayon, Model S',200);
INSERT INTO STYLES(libelle, stock) VALUES('Barres de toit (toit en verre) pour la Model S',3);
INSERT INTO STYLES(libelle, stock) VALUES('Garde-boue Modèle S',33);
INSERT INTO STYLES(libelle, stock) VALUES('Ensemble de roues Tempest de 19 po et de pneus d''hiver de la Model S',100);
INSERT INTO STYLES(libelle, stock) VALUES('Ensemble de roues Arachnid et pneus d''hiver de 21 po du Model S',100);
INSERT INTO STYLES(libelle, stock) VALUES('Doublures intérieures toutes saisons Modèle S',100);
INSERT INTO STYLES(libelle, stock) VALUES('Model S – Revêtement de coffre avant toutes saisons',100);
INSERT INTO STYLES(libelle, stock) VALUES('Model S/X – Filtre à air',0);
INSERT INTO STYLES(libelle, stock) VALUES('Model S – Protège-clé',500000);
INSERT INTO STYLES(libelle, stock) VALUES('Carafe',5);
INSERT INTO STYLES(libelle, stock) VALUES('T-shirt à manches longues avec logo T en 3D pour homme - Gris',400);
INSERT INTO STYLES(libelle, stock) VALUES('T-shirt à manches longues avec logo T en 3D pour homme - Noir',0);
INSERT INTO STYLES(libelle, stock) VALUES('T-shirt à manches longues avec logo T en 3D pour homme - Blanc',50);
INSERT INTO STYLES(libelle, stock) VALUES('T-shirt Cyber Rodeo pour homme',50);
INSERT INTO STYLES(libelle, stock) VALUES('Crochet de rangement',50);
INSERT INTO STYLES(libelle, stock) VALUES('Mise à niveau CCS pour le Model X',50);

--Insert Accessoire
ALTER SEQUENCE accessoires_id_seq RESTART WITH 1;

INSERT INTO ACCESSOIRES(categorie_accessoire_id, code_promo_id, libelle,description,prix,meilleure_vente) VALUES(51, 3,'Casquette souple réglable avec logo T','Cette casquette souple réglable avec logo T allie une coupe classique à des détails modernes. Elle est dotée d''un logo T en 3D et d''une fermeture à boucle métallique personnalisée. Sa conception très souple résiste à l''abrasion et le bandeau intérieur comprend un rembourrage matelassé pour plus de confort et une meilleure évacuation de l''humidité. La visière est fabriquée entièrement à partir de bouteilles en plastique recyclées. 100 % coton.', 35,true);
INSERT INTO ACCESSOIRES(categorie_accessoire_id,libelle,description,prix,meilleure_vente) VALUES(58,'Casquette souple réglable avec logo T','Cette casquette souple réglable avec logo T allie une coupe classique à des détails modernes. Elle est dotée d''un logo T en 3D et d''une fermeture à boucle métallique personnalisée. Sa conception très souple résiste à l''abrasion et le bandeau intérieur comprend un rembourrage matelassé pour plus de confort et une meilleure évacuation de l''humidité. La visière est fabriquée entièrement à partir de bouteilles en plastique recyclées. 100 % coton.', 35,false);
INSERT INTO ACCESSOIRES(categorie_accessoire_id, code_promo_id, libelle,description,prix,meilleure_vente) VALUES(51, 1,'Bonnet à revers thermique','Le bonnet à revers thermique arbore un subtil logo T en silicone souple ton sur ton et placé sur un patch en microsuède vegan. Fabriqué à l''aide d''une technique de point gaufré et conçu pour une meilleure isolation thermique et une meilleure durabilité afin de conserver sa forme d''origine, le bonnet en tricot extensible est résistant au boulochage et au rétrécissement. Fabriqué à 100 % en acrylique.', 35,false);
INSERT INTO ACCESSOIRES(categorie_accessoire_id,libelle,description,prix,meilleure_vente) VALUES(5,'Socle pour connecteur mural','Le socle pour connecteur mural est un poteau en aluminium robuste conçu pour le montage de connecteurs muraux Gen 3 et Gen 2 pour une charge autonome. Avec des options d''installation faciles à l''intérieur et à l''extérieur, le socle est idéal pour toute allée, parking ou propriété nécessitant une structure autoportante pour supporter l''équipement de charge. Le socle pour connecteur mural prend en charge les configurations à montage simple et double pour charger un ou deux véhicules Tesla en même temps._Comprend:_1x piédestal_4x presse-étoupes pour les options de câblage globales_4x vis de montage pour fixer le connecteur mural au socle_L''installation du piédestal nécessite généralement une tranchée et une dalle de béton pour fixer le piédestal en place. Chaque installation est unique au site. Veuillez consulter un entrepreneur local pour l''installation et l''estimation des coûts avant l''achat.', 580,false);
INSERT INTO ACCESSOIRES(categorie_accessoire_id, code_promo_id, libelle,description,prix,meilleure_vente) VALUES(15, 4,'Verres à siroter Tesla','Savourez votre liqueur préférée avec un ensemble en édition limitée de verres à siroter Tesla. Inspiré par la silhouette unique de Tesla Tequila, chaque verre est conçu avec des contours anguleux et un logo Tesla gravé. Exposez fièrement votre verrerie dans un support en métal assorti.', 105,true);
INSERT INTO ACCESSOIRES(categorie_accessoire_id,libelle,description,prix,meilleure_vente) VALUES(49,'Pull Model X-mas','Que vous ayez été sage ou non cette année, notre pull Model X-mas édition limitée vous tiendra chaud tout au long de la saison. Avec un motif festif arborant la gamme de véhicules S3XY, le Superchargeur, la silhouette en forme d''éclair et l''emblème Tesla, ce pull tricoté assemblé à la main est idéal pour les fêtes. Fabriqué en acrylique 100 % hypoallergénique, très doux et confortable.', 75,true);
INSERT INTO ACCESSOIRES(categorie_accessoire_id,libelle,description,prix,meilleure_vente) VALUES(56,'Pull Model X-mas','Que vous ayez été sage ou non cette année, notre pull Model X-mas édition limitée vous tiendra chaud tout au long de la saison. Avec un motif festif arborant la gamme de véhicules S3XY, le Superchargeur, la silhouette en forme d''éclair et l''emblème Tesla, ce pull tricoté assemblé à la main est idéal pour les fêtes. Fabriqué en acrylique 100 % hypoallergénique, très doux et confortable.', 75,true);
INSERT INTO ACCESSOIRES(categorie_accessoire_id,libelle,description,prix,meilleure_vente) VALUES(19,'Model S – Pare-soleil pour toit panoramique','Fabriqué dans un tissu maillé léger et doté d''une structure rigide pliable, le pare-soleil pour toit panoramique de la Model S bloque 66 % de la transmission lumineuse. Facilement retirable, ce pare-soleil s''installe sur l''intérieur du toit panoramique grâce aux clips fournis. Une fois retiré, le pare-soleil se replie et peut être rangé dans la pochette zippée incluse. Cela inclut: 1 pare-soleil pour toit panoramique, 4 clips de pare-soleil, 1 pochette de rangement zippée', 140,false);
INSERT INTO ACCESSOIRES(categorie_accessoire_id,libelle,description,prix,meilleure_vente) VALUES(19,'Pare-soleil pour hayon, Model S','Fabriqué dans un tissu maillé léger et doté d''une structure rigide pliable, le pare-soleil pour hayon bloque 66 % de la lumière transmise sans compromettre la visibilité vers l''arrière. Facilement retirable, le pare-soleil est installé côté intérieur de la vitre du hayon. Une fois retiré, le pare-soleil se plie et se range dans une pochette de 16 pouces (40,6 cm). Comprend: 1 pare-soleil pour hayon arrière, 1 pochette de rangement zippée', 95,false);
INSERT INTO ACCESSOIRES(categorie_accessoire_id,libelle,description,prix,meilleure_vente) VALUES(20,'Barres de toit (toit en verre) pour la Model S','Galerie de toit Model S – Le toit en verre a été conçu et conçu dès le départ pour une efficacité aérodynamique maximale, un bruit intérieur minimal et un impact sur la portée. Le mécanisme de fixation ultra-élégant avec des tours moulées sous pression et des verrous intégrés facilite l''installation à la maison. Les barres transversales en aluminium revêtues de poudre comprennent des fentes en T pour monter de manière transparente des accessoires compatibles tels que des porte-skis, des porte-vélos et des boîtes de chargement. En savoir plus sur la galerie de toit Model S – Toit en verre et comment moderniser votre véhicule sur notre page d''assistance .', 615,true);
INSERT INTO ACCESSOIRES(categorie_accessoire_id,libelle,description,prix,meilleure_vente) VALUES(20,'Garde-boue Modèle S','Protégez votre Model S de la neige, du sel, du sable et des petits débris avec les garde-boue Model S. Comprend : 2x garde-boue avant, Matériel d''installation', 50,false);
INSERT INTO ACCESSOIRES(categorie_accessoire_id,libelle,description,prix,meilleure_vente) VALUES(21,'Ensemble de roues Tempest de 19 po et de pneus d''hiver de la Model S','Équipez votre Model S de roues Tempest de 19" et de pneus Pirelli homologués hiver pour les mois glacials à venir. Comprend: 2x roues Tempest 19X9.5J ET40, 2x roues Tempest 19X10.5J ET40, 2x 255/45R19 Pirelli P ZERO WINTER Tires, 2x 285/40R19 Pirelli P ZERO WINTER Tires, 4x capteurs de pression des pneus BLE', 3495,false);
INSERT INTO ACCESSOIRES(categorie_accessoire_id, code_promo_id, libelle,description,prix,meilleure_vente) VALUES(21, 2,'Ensemble de roues Arachnid et pneus d''hiver de 21 po du Model S','Équipez votre Model S de roues Arachnid 21" et de pneus Pirelli homologués hiver pour les mois glacials à venir. Comprend: 2x Jantes Arachnid 21X9.5J ET40, 2x Jantes Arachnid 21X10.5J ET45, 2x Pneus 265/35R21 Pirelli P ZERO WINTER, 2x Pneus 295/30R21 Pirelli P ZERO WINTER, 4x enjoliveurs Tesla logo Arachnid, 4x capteurs de pression des pneus BLE', 7620,false);
INSERT INTO ACCESSOIRES(categorie_accessoire_id,libelle,description,prix,meilleure_vente) VALUES(22,'Doublures intérieures toutes saisons Modèle S','Les doublures intérieures toutes saisons du modèle S sont fabriquées à partir d''un matériau élastomère thermoplastique avec un noyau rigide solide pour une protection extrême et une couverture spatiale. Contrairement aux tapis de sol traditionnels, les revêtements intérieurs toutes saisons Model S sont composés de parois verticales qui offrent une protection maximale au tapis du plancher et un nettoyage facile. Créées avec un motif exclusif par Tesla Design Studio, ces doublures sont fabriquées sur mesure en utilisant les dernières mesures numériques pour la Model S. 100% recyclable et sans cadmium, plomb, latex et PVC. Comprend : 1x doublure toutes saisons à la première rangée [conducteur], 1x doublure toutes saisons à la première rangée [passager], 1x doublure toutes saisons de deuxième rangée', 340,true);
INSERT INTO ACCESSOIRES(categorie_accessoire_id,libelle,description,prix,meilleure_vente) VALUES(22,'Model S – Revêtement de coffre avant toutes saisons','Le revêtement de coffre avant toutes saisons pour Model S est fabriqué à partir d''un matériau élastomère thermoplastique avec une structure rigide solide, pour une protection extrême et une bonne couverture spatiale. Contrairement aux tapis de sol classiques, le revêtement de coffre avant toutes saisons pour Model S contient des parois verticales offrant une protection maximale pour le coffre avant et facilitant le nettoyage. Créé sur la base d''un modèle exclusif de Tesla Design Studio, ce revêtement est fabriqué sur mesure à l''aide des dernières mesures numériques de la Model S. 100 % recyclable et sans cadmium, plomb, latex ni PVC. Comprend : 1 revêtement de coffre avant toutes saisons', 75,false);
INSERT INTO ACCESSOIRES(categorie_accessoire_id,libelle,description,prix,meilleure_vente) VALUES(23,'Model S/X – Filtre à air','Remplacez le filtre à air d''habitacle de votre Model S ou Model X pour empêcher le pollen, les poussières industrielles, la poussière des routes et d''autres particules de pénétrer dans l''habitacle par la ventilation. Tesla recommande de remplacer ce filtre tous les deux ans.', 40,false);
INSERT INTO ACCESSOIRES(categorie_accessoire_id,libelle,description,prix,meilleure_vente) VALUES(24,'Model S – Protège-clé','Personnalisable et disponible pour tous les modèles, le protège-clé Tesla est une solution élégante et pratique pour votre clé actuelle. Composé d''une bande de silicone attachée à un porte-clés en métal et rehaussée d''un magnifique logo en relief, ce protège-clé s''adapte parfaitement à tous les modèles.', 20,false);
INSERT INTO ACCESSOIRES(categorie_accessoire_id,libelle,description,prix,meilleure_vente) VALUES(15,'Carafe','Inspirée par la tequila Tesla, la carafe Tesla est la touche parfaite pour votre bar. En forme d''éclair, chaque bouteille soufflée à la main peut contenir jusqu''à 750 ml de votre alcool préféré. Doté à la fois de l''emblème Tesla et du logo T doré, cet objet de collection exclusif, placé sur un support en métal poli pour attirer tous les regards, est idéal pour toutes les occasions.', 180,true);
INSERT INTO ACCESSOIRES(categorie_accessoire_id,libelle,description,prix,meilleure_vente) VALUES(47,'T-shirt à manches longues avec logo T en 3D pour homme','Avec sa coupe ajustée associant confort et style, ce t-shirt à manches longues avec logo T en 3D pour homme est confectionné en 100 % coton et présente un logo T discret sur le côté gauche de la poitrine.', 40, false);
INSERT INTO ACCESSOIRES(categorie_accessoire_id,libelle,description,prix,meilleure_vente) VALUES(47,'T-shirt Cyber Rodeo pour homme','Inspiré par l''événement Tesla Cyber Rodeo, le t-shirt Cyber Rodeo pour homme marque l''ouverture de la Gigafactory Texas et de notre nouveau siège social mondial. Bien coupé, confortable et stylé, ce t-shirt arbore le thème signature de l''événement dans un style néon Texas vintage. Fabriqué en coton (95 %) et élasthanne (5 %).', 35, false);
INSERT INTO ACCESSOIRES(categorie_accessoire_id,libelle,description,prix,meilleure_vente) VALUES(5,'Crochet de rangement','Rangez les câbles du connecteur mobile Tesla en toute sécurité grâce à notre range-câbles. Un porte-câbles à fixer et un support permettent de ranger votre câble de recharge lorsqu''il n''est pas utilisé. De série: 1 support pour range-câbles, 1 jeu d''outils d''installation, 1 support de châssis', 40, false);
INSERT INTO ACCESSOIRES(categorie_accessoire_id,libelle,description,prix,meilleure_vente) VALUES(6,'Mise à niveau CCS pour le Model X','Cette mise à niveau de votre Model X et l''adaptateur fournit vous permettent de bénéficier de notre technologie Superchargeur V3 de dernière génération, qui assure une meilleure distribution de l''énergie sans qu''il ne soit nécessaire de partager l''alimentation avec le véhicule voisin. En plus d''être compatible avec notre réseau Superchargeur, votre Model X pourra également accéder aux stations de recharge publiques à travers l''Europe.', 262, false);


--Insert Pivot Style Accessoire

INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(1,1);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(2,1);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(1,2);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(2,2);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(3,3);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(4,3);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(5,4);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(6,5);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(7,6);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(7,7);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(8,8);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(9,9);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(10,10);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(11,11);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(12,12);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(13,13);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(14,14);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(15,15);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(16,16);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(17,17);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(18,18);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(19,19);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(20,19);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(21,19);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(22,20);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(23,21);
INSERT INTO STYLE_ACCESSOIRE(style_id,accessoire_id) VALUES(24,22);




--Insert Photo des styles
INSERT INTO photos(id,style_id, lien_photo) VALUES (31,1,'../../images/boutique/vetements/casquette logo T/gris.png');
INSERT INTO photos(id,style_id, lien_photo) VALUES (32,1,'../../images/boutique/vetements/casquette logo T/casquette-gris-front.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (33,1,'../../images/boutique/vetements/casquette logo T/presentation-image.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (34,1,'../../images/boutique/vetements/casquette logo T/casquette-gris-back.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (35,2,'../../images/boutique/vetements/casquette logo T/noir.png');
INSERT INTO photos(id,style_id, lien_photo) VALUES (36,2,'../../images/boutique/vetements/casquette logo T/casquette-noir-front.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (37,2,'../../images/boutique/vetements/casquette logo T/presentation-image2.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (38,2,'../../images/boutique/vetements/casquette logo T/casquette-noir-back.avif');

INSERT INTO photos(id,style_id, lien_photo) VALUES (39,3,'../../images/boutique/vetements/bonnet a revers/blanc.jpg');
INSERT INTO photos(id,style_id, lien_photo) VALUES (40,3,'../../images/boutique/vetements/bonnet a revers/presentation-image.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (41,3,'../../images/boutique/vetements/bonnet a revers/bonnet_blanc_closeup.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (42,4,'../../images/boutique/vetements/bonnet a revers/noir.png');
INSERT INTO photos(id,style_id, lien_photo) VALUES (43,4,'../../images/boutique/vetements/bonnet a revers/presentation-image2.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (44,4,'../../images/boutique/vetements/bonnet a revers/bonnet_noir_closeup.avif');

INSERT INTO photos(id,style_id, lien_photo) VALUES (45,5,'../../images/boutique/chargement/socle mural/blanc.jpg');
INSERT INTO photos(id,style_id, lien_photo) VALUES (46,5,'../../images/boutique/chargement/socle mural/socle-mural-front.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (47,5,'../../images/boutique/chargement/socle mural/presentation-image.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (48,5,'../../images/boutique/chargement/socle mural/socle-mural-back.avif');

INSERT INTO photos(id,style_id, lien_photo) VALUES (49,6,'../../images/boutique/lifestyle/verres/blanc.jpg');
INSERT INTO photos(id,style_id, lien_photo) VALUES (50,6,'../../images/boutique/lifestyle/verres/presentation-image.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (51,6,'../../images/boutique/lifestyle/verres/verre-bizarre-front.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (52,6,'../../images/boutique/lifestyle/verres/verre-bizarre-front.avif');

INSERT INTO photos(id,style_id, lien_photo) VALUES (53,7,'../../images/boutique/vetements/pull xmas/rouge.jpg');
INSERT INTO photos(id,style_id, lien_photo) VALUES (54,7,'../../images/boutique/vetements/pull xmas/presentation-image.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (55,7,'../../images/boutique/vetements/pull xmas/pull-xmas-front.avif');

INSERT INTO photos(id,style_id, lien_photo) VALUES (56,8,'../../images/boutique/accessoires/model s/interieur/pare soleil panoramique/gris.png');
INSERT INTO photos(id,style_id, lien_photo) VALUES (57,8,'../../images/boutique/accessoires/model s/interieur/pare soleil panoramique/panoramix-close.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (58,8,'../../images/boutique/accessoires/model s/interieur/pare soleil panoramique/panoramix-front.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (59,8,'../../images/boutique/accessoires/model s/interieur/pare soleil panoramique/panoramix-range.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (60,8,'../../images/boutique/accessoires/model s/interieur/pare soleil panoramique/presentation-image.avif');

INSERT INTO photos(id,style_id, lien_photo) VALUES (61,9,'../../images/boutique/accessoires/model s/interieur/pare soleil hayon/gris.png');
INSERT INTO photos(id,style_id, lien_photo) VALUES (62,9,'../../images/boutique/accessoires/model s/interieur/pare soleil hayon/pare-hayon-front.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (63,9,'../../images/boutique/accessoires/model s/interieur/pare soleil hayon/pare-hayon-front.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (64,9,'../../images/boutique/accessoires/model s/interieur/pare soleil hayon/presentation-image.avif');

INSERT INTO photos(id,style_id, lien_photo) VALUES (65,10,'../../images/boutique/accessoires/model s/exterieur/barre toit/gris.png');
INSERT INTO photos(id,style_id, lien_photo) VALUES (66,10,'../../images/boutique/accessoires/model s/exterieur/barre toit/barre-toit-side.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (67,10,'../../images/boutique/accessoires/model s/exterieur/barre toit/barre-toit-closeup.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (68,10,'../../images/boutique/accessoires/model s/exterieur/barre toit/presentation-image.avif');

INSERT INTO photos(id,style_id, lien_photo) VALUES (69,11,'../../images/boutique/accessoires/model s/exterieur/garde boue/gris.png');
INSERT INTO photos(id,style_id, lien_photo) VALUES (70,11,'../../images/boutique/accessoires/model s/exterieur/garde boue/garde-boue-side.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (71,11,'../../images/boutique/accessoires/model s/exterieur/garde boue/presentation-image.avif');

INSERT INTO photos(id,style_id, lien_photo) VALUES (72,12,'../../images/boutique/accessoires/model s/roues/tempest/gris.png');
INSERT INTO photos(id,style_id, lien_photo) VALUES (73,12,'../../images/boutique/accessoires/model s/roues/tempest/tempest-front.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (74,12,'../../images/boutique/accessoires/model s/roues/tempest/tempest-side.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (75,12,'../../images/boutique/accessoires/model s/roues/tempest/presentation-image.avif');

INSERT INTO photos(id,style_id, lien_photo) VALUES (76,13,'../../images/boutique/accessoires/model s/roues/arachnid/gris.png');
INSERT INTO photos(id,style_id, lien_photo) VALUES (77,13,'../../images/boutique/accessoires/model s/roues/arachnid/arachnid-front.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (78,13,'../../images/boutique/accessoires/model s/roues/arachnid/arachnid-side.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (79,13,'../../images/boutique/accessoires/model s/roues/arachnid/presentation-image.avif');

INSERT INTO photos(id,style_id, lien_photo) VALUES (80,14,'../../images/boutique/accessoires/model s/tapis/doublure/gris.png');
INSERT INTO photos(id,style_id, lien_photo) VALUES (81,14,'../../images/boutique/accessoires/model s/tapis/doublure/tapis-back.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (82,14,'../../images/boutique/accessoires/model s/tapis/doublure/tapis-closeup.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (83,14,'../../images/boutique/accessoires/model s/tapis/doublure/tapis-ensemble.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (84,14,'../../images/boutique/accessoires/model s/tapis/doublure/tapis-side.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (85,14,'../../images/boutique/accessoires/model s/tapis/doublure/presentation-image.avif');

INSERT INTO photos(id,style_id, lien_photo) VALUES (86,15,'../../images/boutique/accessoires/model s/tapis/revetement/gris.png');
INSERT INTO photos(id,style_id, lien_photo) VALUES (87,15,'../../images/boutique/accessoires/model s/tapis/revetement/presentation-image.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (88,15,'../../images/boutique/accessoires/model s/tapis/revetement/revetement-front.avif');

INSERT INTO photos(id,style_id, lien_photo) VALUES (89,16,'../../images/boutique/accessoires/model s/pieces/filtre/gris.png');
INSERT INTO photos(id,style_id, lien_photo) VALUES (90,16,'../../images/boutique/accessoires/model s/pieces/filtre/presentation-image.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (91,16,'../../images/boutique/accessoires/model s/pieces/filtre/filtre-side.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (92,16,'../../images/boutique/accessoires/model s/pieces/filtre/filtre-up.avif');

INSERT INTO photos(id,style_id, lien_photo) VALUES (93,17,'../../images/boutique/accessoires/model s/cles/protege cle/gris.png');
INSERT INTO photos(id,style_id, lien_photo) VALUES (94,17,'../../images/boutique/accessoires/model s/cles/protege cle/presentation-image.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (95,17,'../../images/boutique/accessoires/model s/cles/protege cle/protect-box.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (96,17,'../../images/boutique/accessoires/model s/cles/protege cle/protect-up.avif');

INSERT INTO photos(id,style_id, lien_photo) VALUES (97,18,'../../images/boutique/lifestyle/carafe/blanc.jpg');
INSERT INTO photos(id,style_id, lien_photo) VALUES (98,18,'../../images/boutique/lifestyle/carafe/presentation-image.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (99,18,'../../images/boutique/lifestyle/carafe/carafe-front.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (100,18,'../../images/boutique/lifestyle/carafe/carafe-socle.avif');

INSERT INTO photos(id,style_id, lien_photo) VALUES (101,19,'../../images/boutique/vetements/tshirt manche longue/gris.png');
INSERT INTO photos(id,style_id, lien_photo) VALUES (102,19,'../../images/boutique/vetements/tshirt manche longue/presentation-image.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (103,19,'../../images/boutique/vetements/tshirt manche longue/manche-longue-gris-closeup.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (104,20,'../../images/boutique/vetements/tshirt manche longue/noir.png');
INSERT INTO photos(id,style_id, lien_photo) VALUES (105,20,'../../images/boutique/vetements/tshirt manche longue/manche-longue-noir-front.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (106,20,'../../images/boutique/vetements/tshirt manche longue/manche-longue-noir-closeup.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (107,21,'../../images/boutique/vetements/tshirt manche longue/blanc.jpg');
INSERT INTO photos(id,style_id, lien_photo) VALUES (108,21,'../../images/boutique/vetements/tshirt manche longue/manche-longue-blanc-front.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (109,21,'../../images/boutique/vetements/tshirt manche longue/manche-longue-blanc-closeup.avif');

INSERT INTO photos(id,style_id, lien_photo) VALUES (110,22,'../../images/boutique/vetements/tshirt rodeo/noir.png');
INSERT INTO photos(id,style_id, lien_photo) VALUES (111,22,'../../images/boutique/vetements/tshirt rodeo/presentation-image.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (112,22,'../../images/boutique/vetements/tshirt rodeo/rodeo-front.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (113,22,'../../images/boutique/vetements/tshirt rodeo/rodeo-back.avif');

INSERT INTO photos(id,style_id, lien_photo) VALUES (114,23,'../../images/boutique/chargement/crochet/blanc.png');
INSERT INTO photos(id,style_id, lien_photo) VALUES (115,23,'../../images/boutique/chargement/crochet/presentation-image.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (116,23,'../../images/boutique/chargement/crochet/crochet-front.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (117,23,'../../images/boutique/chargement/crochet/crochet-box.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (118,23,'../../images/boutique/chargement/crochet/crochet-closeup.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (119,23,'../../images/boutique/chargement/crochet/crochet-detail.avif');

INSERT INTO photos(id,style_id, lien_photo) VALUES (120,24,'../../images/boutique/chargement/mise a niveau/blanc.jpg');
INSERT INTO photos(id,style_id, lien_photo) VALUES (121,24,'../../images/boutique/chargement/mise a niveau/presentation-image.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (122,24,'../../images/boutique/chargement/mise a niveau/prise-side.avif');
INSERT INTO photos(id,style_id, lien_photo) VALUES (123,24,'../../images/boutique/chargement/mise a niveau/prise-back.avif');

--Insert de véhicules

INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (1, 1, 1, 138990.00, '2021-01-22 22:00:00', '2021-01-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (2, 1, 1, 140790.00, '2021-02-22 22:00:00', '2021-02-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (3, 1, 1, 141190.00, '2021-02-22 22:00:00', '2021-02-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (4, 1, 1, 141190.00, '2021-06-22 22:00:00', '2021-06-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (5, 1, 1, 141190.00, '2021-10-22 22:00:00', '2021-10-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (6, 1, 1, 143890.00, '2021-04-22 22:00:00', '2021-04-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (7, 1, 1, 145690.00, '2021-06-22 22:00:00', '2021-06-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (8, 1, 1, 146090.00, '2021-10-22 22:00:00', '2021-10-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (9, 1, 1, 146090.00, '2021-03-22 22:00:00', '2021-03-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (10, 1, 1, 146090.00, '2021-09-22 22:00:00', '2021-09-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (11, 1, 1, 146290.00, '2021-09-22 22:00:00', '2021-09-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (12, 1, 1, 146290.00, '2021-03-22 22:00:00', '2021-03-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (13, 2, 3, 53490.00, '2021-06-22 22:00:00', '2021-06-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (14, 2, 3, 54690.00, '2021-03-22 22:00:00', '2021-03-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (15, 2, 3, 55090.00, '2021-04-22 22:00:00', '2021-04-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (16, 2, 3, 55090.00, '2021-10-22 22:00:00', '2021-10-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (17, 2, 3, 55490.00, '2021-02-22 22:00:00', '2021-02-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (18, 2, 3, 54680.00, '2021-01-22 22:00:00', '2021-01-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (19, 2, 3, 55880.00, '2021-12-31 22:00:00', '2021-12-31 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (20, 2, 3, 56280.00, '2022-01-22 22:00:00', '2022-01-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (21, 2, 3, 56280.00, '2022-10-22 22:00:00', '2022-10-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (22, 2, 3, 56680.00, '2022-03-22 22:00:00', '2022-03-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (23, 2, 3, 56030.00, '2022-06-22 22:00:00', '2022-06-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (24, 2, 3, 57230.00, '2022-05-22 22:00:00', '2022-05-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (25, 2, 3, 57630.00, '2022-02-22 22:00:00', '2022-02-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (26, 2, 3, 57630.00, '2022-01-22 22:00:00', '2022-01-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (27, 2, 3, 58030.00, '2022-09-22 22:00:00', '2022-09-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (28, 2, 4, 62490.00, '2022-03-22 22:00:00', '2022-03-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (29, 2, 4, 63690.00, '2022-07-22 22:00:00', '2022-07-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (30, 2, 4, 64090.00, '2022-09-22 22:00:00', '2022-09-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (31, 2, 4, 64090.00, '2022-04-22 22:00:00', '2022-04-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (32, 2, 4, 64490.00, '2022-05-22 22:00:00', '2022-05-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (33, 2, 4, 64870.00, '2022-08-22 22:00:00', '2022-08-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (34, 2, 4, 66070.00, '2022-02-22 22:00:00', '2022-02-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (35, 2, 4, 66470.00, '2022-11-22 22:00:00', '2022-11-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (36, 2, 4, 66470.00, '2022-07-22 22:00:00', '2022-07-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (37, 2, 4, 66870.00, '2022-01-22 22:00:00', '2022-01-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (38, 2, 5, 66490.00, '2022-02-22 22:00:00', '2022-02-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (39, 2, 5, 67690.00, '2022-11-22 22:00:00', '2022-11-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (40, 2, 5, 68090.00, '2022-08-22 22:00:00', '2022-08-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (41, 2, 5, 68090.00, '2022-10-22 22:00:00', '2022-10-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (42, 2, 5, 68490.00, '2022-10-22 22:00:00', '2022-10-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (43, 2, 5, 67680.00, '2022-11-22 22:00:00', '2022-11-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (44, 2, 5, 68880.00, '2022-01-22 22:00:00', '2022-01-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (45, 2, 5, 69280.00, '2022-01-22 22:00:00', '2022-01-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (46, 2, 5, 69280.00, '2022-05-22 22:00:00', '2022-05-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (47, 2, 5, 69680.00, '2022-06-22 22:00:00', '2022-06-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (48, 3, 6, 141990.00, '2022-06-22 22:00:00', '2022-06-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (49, 3, 6, 143790.00, '2022-06-22 22:00:00', '2022-06-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (50, 3, 6, 144190.00, '2022-06-22 22:00:00', '2022-06-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (51, 3, 6, 144190.00, '2022-10-22 22:00:00', '2022-10-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (52, 3, 6, 144190.00, '2022-07-22 22:00:00', '2022-07-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (53, 3, 6, 150290.00, '2022-08-22 22:00:00', '2022-08-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (54, 3, 6, 152090.00, '2022-10-22 22:00:00', '2022-10-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (55, 3, 6, 152490.00, '2022-01-22 22:00:00', '2022-01-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (56, 3, 6, 152490.00, '2022-07-22 22:00:00', '2022-07-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (57, 3, 6, 152490.00, '2022-05-22 22:00:00', '2022-05-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (58, 3, 6, 150290.00, '2022-06-22 22:00:00', '2022-06-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (59, 3, 6, 152090.00, '2022-11-22 22:00:00', '2022-11-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (60, 3, 6, 152490.00, '2022-06-22 22:00:00', '2022-06-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (61, 3, 6, 152490.00, '2022-04-22 22:00:00', '2022-04-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (62, 3, 6, 152490.00, '2022-05-22 22:00:00', '2022-05-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (63, 4, 8, 51340.00, '2022-12-22 22:00:00', '2022-12-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (64, 4, 8, 52540.00, '2022-05-22 22:00:00', '2022-05-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (65, 4, 8, 52940.00, '2022-06-22 22:00:00', '2022-06-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (66, 4, 8, 52940.00, '2022-07-22 22:00:00', '2022-07-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (67, 4, 8, 53340.00, '2022-06-22 22:00:00', '2022-06-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (68, 4, 8, 53280.00, '2022-01-22 22:00:00', '2022-01-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (69, 4, 8, 54480.00, '2022-07-22 22:00:00', '2022-07-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (70, 4, 8, 54880.00, '2022-05-22 22:00:00', '2022-05-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (71, 4, 8, 54880.00, '2022-04-22 22:00:00', '2022-04-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (72, 4, 8, 55280.00, '2022-05-22 22:00:00', '2022-05-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (73, 4, 9, 66340.00, '2022-07-22 22:00:00', '2022-07-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (74, 4, 9, 67540.00, '2022-06-22 22:00:00', '2022-06-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (75, 4, 9, 69340.00, '2022-02-22 22:00:00', '2022-02-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (76, 4, 9, 67940.00, '2022-08-22 22:00:00', '2022-08-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (77, 4, 9, 69540.00, '2022-12-22 22:00:00', '2022-12-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (78, 4, 10, 72530.00, '2022-04-22 22:00:00', '2022-04-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (79, 4, 10, 73730.00, '2022-08-22 22:00:00', '2022-08-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (80, 4, 10, 75530.00, '2022-12-22 22:00:00', '2022-12-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (81, 4, 10, 74130.00, '2022-05-22 22:00:00', '2022-05-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (82, 4, 10, 75730.00, '2022-08-22 22:00:00', '2022-08-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (83, 4, 10, 74540.00, '2022-08-22 22:00:00', '2022-08-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (84, 4, 10, 74380.00, '2022-11-22 22:00:00', '2022-11-22 22:00:00');
INSERT INTO vehicules(id, modele_id, motorisation_id, prix, created_at, updated_at) VALUES (85, 4, 10, 72990.00, '2022-12-22 22:00:00', '2022-12-22 22:00:00');

ALTER SEQUENCE vehicules_id_seq RESTART WITH 86;

-- INSERTION CHOIX OPTIONS POUR LES VEHICULES

INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (1,1,1);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (2,1,8);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (3,1,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (4,1,20);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (5,2,2);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (6,2,8);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (7,2,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (8,2,20);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (9,3,3);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (10,3,8);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (11,3,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (12,3,20);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (13,4,5);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (14,4,8);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (15,4,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (16,4,20);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (17,5,6);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (18,5,8);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (19,5,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (20,5,20);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (21,6,1);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (22,6,9);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (23,6,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (24,6,20);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (25,7,2);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (26,7,9);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (27,7,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (28,7,20);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (29,8,3);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (30,8,9);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (31,8,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (32,8,20);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (33,9,5);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (34,9,9);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (35,9,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (36,9,20);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (37,10,6);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (38,10,9);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (39,10,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (40,10,20);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (41,11,1);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (42,11,9);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (43,11,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (44,11,20);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (45,12,1);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (46,12,9);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (47,12,26);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (48,12,20);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (49,13,1);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (50,13,14);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (51,13,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (52,14,2);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (53,14,14);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (54,14,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (55,15,3);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (56,15,14);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (57,15,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (58,16,5);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (59,16,14);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (60,16,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (61,17,6);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (62,17,14);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (63,17,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (64,18,1);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (65,18,15);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (66,18,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (67,19,2);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (68,19,15);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (69,19,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (70,20,3);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (71,20,15);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (72,20,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (73,21,5);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (74,21,15);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (75,21,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (76,22,6);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (77,22,15);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (78,22,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (79,23,1);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (80,23,15);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (81,23,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (82,23,22);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (83,24,2);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (84,24,15);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (85,24,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (86,24,22);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (87,25,3);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (88,25,15);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (89,25,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (90,25,22);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (91,26,5);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (92,26,15);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (93,26,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (94,26,22);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (95,27,6);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (96,27,15);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (97,27,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (98,27,22);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (99,28,1);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (100,28,14);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (101,28,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (102,29,2);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (103,29,14);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (104,29,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (105,30,3);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (106,30,14);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (107,30,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (108,31,5);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (109,31,14);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (110,31,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (111,32,6);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (112,32,14);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (113,32,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (114,33,1);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (115,33,15);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (116,33,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (117,34,2);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (118,34,15);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (119,34,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (120,35,3);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (121,35,15);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (122,35,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (123,36,5);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (124,36,15);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (125,36,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (126,37,6);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (127,37,15);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (128,37,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (129,38,1);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (130,38,16);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (131,38,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (132,39,2);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (133,39,16);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (134,39,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (135,40,3);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (136,40,16);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (137,40,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (138,41,5);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (139,41,16);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (140,41,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (141,42,6);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (142,42,16);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (143,42,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (144,43,1);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (145,43,16);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (146,43,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (147,44,2);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (148,44,16);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (149,44,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (150,45,3);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (151,45,16);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (152,45,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (153,46,5);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (154,46,16);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (155,46,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (156,47,6);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (157,47,16);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (158,47,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (159,48,1);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (160,48,10);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (161,48,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (162,48,21);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (163,49,2);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (164,49,10);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (165,49,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (166,49,21);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (167,50,3);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (168,50,10);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (169,50,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (170,50,21);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (171,51,5);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (172,51,10);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (173,51,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (174,51,21);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (175,52,6);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (176,52,10);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (177,52,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (178,52,21);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (179,53,1);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (180,53,11);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (181,53,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (182,53,21);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (183,54,2);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (184,54,11);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (185,54,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (186,54,21);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (187,55,3);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (188,55,11);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (189,55,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (190,55,21);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (191,56,5);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (192,56,11);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (193,56,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (194,56,21);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (195,57,6);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (196,57,11);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (197,57,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (198,57,21);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (199,58,1);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (200,58,11);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (201,58,26);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (202,58,21);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (203,59,2);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (204,59,11);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (205,59,26);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (206,59,21);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (207,60,3);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (208,60,11);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (209,60,26);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (210,60,21);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (211,61,5);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (212,61,11);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (213,61,26);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (214,61,21);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (215,62,6);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (216,62,11);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (217,62,26);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (218,62,21);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (219,63,1);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (220,63,12);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (221,63,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (222,63,23);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (223,64,2);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (224,64,12);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (225,64,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (226,64,23);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (227,65,3);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (228,65,12);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (229,65,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (230,65,23);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (231,66,5);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (232,66,12);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (233,66,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (234,66,23);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (235,67,6);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (236,67,12);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (237,67,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (238,67,23);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (239,68,1);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (240,68,13);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (241,68,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (242,69,2);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (243,69,13);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (244,69,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (245,70,3);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (246,70,13);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (247,70,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (248,71,5);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (249,71,13);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (250,71,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (251,72,6);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (252,72,13);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (253,72,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (254,73,1);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (255,73,12);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (256,73,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (257,73,23);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (258,74,2);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (259,74,12);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (260,74,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (261,74,23);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (262,75,4);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (263,75,12);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (264,75,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (265,75,23);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (266,76,5);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (267,76,12);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (268,76,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (269,76,23);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (270,77,7);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (271,77,12);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (272,77,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (273,77,23);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (274,78,1);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (275,78,17);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (276,78,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (277,78,23);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (278,79,2);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (279,79,17);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (280,79,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (281,79,23);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (282,80,4);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (283,80,17);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (284,80,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (285,80,23);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (286,81,5);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (287,81,17);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (288,81,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (289,81,23);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (290,82,7);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (291,82,17);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (292,82,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (293,82,23);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (294,83,7);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (295,83,17);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (296,83,24);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (297,83,23);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (298,84,7);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (299,84,17);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (300,84,25);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (301,85,4);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (302,85,17);
INSERT INTO choix_option_vehicule(id, vehicule_id, choix_option_id) VALUES (303,85,24);

ALTER SEQUENCE choix_option_vehicule_id_seq RESTART WITH 304;


--etats commandes

ALTER SEQUENCE etat_commandes_id_seq RESTART WITH 1;

INSERT INTO etat_commandes(libelle) values('En cours');
INSERT INTO etat_commandes(libelle) values('Livrée');


-- INSERT ADRESSE

INSERT INTO adresses VALUES (1,'45 Lotissement le Bois de Chatel','Saint-Hippolyte',37600,'France');
INSERT INTO adresses VALUES (2,'174 Chemin des Coquelicots','Pouillenay',21150,'France');
INSERT INTO adresses VALUES (3,'1658 Rue de Majornas','Bovel',35330,'France');
INSERT INTO adresses VALUES (4,'135 Route du Rhone','Sainte-Eulalie-en-Royans',26190,'France');
INSERT INTO adresses VALUES (5,'20 Rue Jean Mermoz','Saint-Andiol',13670,'France');
INSERT INTO adresses VALUES (6,'178 Rue des Acacias','Barrême',4330,'France');
INSERT INTO adresses VALUES (7,'11 Rue du Centre','Perrusson',37600,'France');
INSERT INTO adresses VALUES (8,'37 avenue jean jaures','Vilhain',3350,'France');
INSERT INTO adresses VALUES (9,'68 Passage du Jourdan','Séderon',26560,'France');
INSERT INTO adresses VALUES (10,'691 Route de Noaillat','Chatuzange-le-Goubet',26300,'France');
INSERT INTO adresses VALUES (11,'444 Route de Saint Eloi','Baulay',70160,'France');
INSERT INTO adresses VALUES (12,'461 Grande Rue','Chemiré-en-Charnie',72540,'France');
INSERT INTO adresses VALUES (13,'14 Rue de L Egalite','Cambiac',31460,'France');
INSERT INTO adresses VALUES (14,'178 Ruette Talon','Saint-Charles-la-Forêt',53170,'France');
INSERT INTO adresses VALUES (15,'71 Rue Neuve','Viserny',21500,'France');
INSERT INTO adresses VALUES (16,'675 Rue Pierre Malfant','Manerbe',14340,'France');
INSERT INTO adresses VALUES (17,'1549 Chemin du Reculet','Grigny',69520,'France');
INSERT INTO adresses VALUES (18,'6 Lotissement les Hauts Chantegrillet','Sainte-Marie',97230,'France');
INSERT INTO adresses VALUES (19,'44 Rue du Château','Val de Virvée',33240,'France');
INSERT INTO adresses VALUES (20,'1 Impasse Champ Neyron','Saint-Pierre-le-Vieux',76740,'France');
INSERT INTO adresses VALUES (21,'105 Rue du Platre','Lahontan',64270,'France');
INSERT INTO adresses VALUES (22,'40 Route du Peage','Ronel',81120,'France');
INSERT INTO adresses VALUES (23,'6 Rue du Grand Logis','Méaugon',22440,'France');
INSERT INTO adresses VALUES (24,'24 Place de la Republique','Sigean',11130,'France');
INSERT INTO adresses VALUES (25,'891 Route des Bois','Audincourt',25400,'France');
INSERT INTO adresses VALUES (26,'357 Rue de la Grange Michaud','Corzé',49140,'France');
INSERT INTO adresses VALUES (27,'7 chemin du devorah','Hagenbach',68210,'France');
INSERT INTO adresses VALUES (28,'8 Avenue de la Libération','Niort',79000,'France');
INSERT INTO adresses VALUES (29,'131 Chemin de Montleyssard','Rezé',44400,'France');
INSERT INTO adresses VALUES (30,'94 Ruette de la Demi-lune','Crillon-le-Brave',84410,'France');
INSERT INTO adresses VALUES (31,'36 Route de Simandre','Bettviller',57410,'France');
INSERT INTO adresses VALUES (32,'130 Rue du Quart Goyet','Pluvigner',56330,'France');
INSERT INTO adresses VALUES (33,'87 Rue des Pierres Levées','Jatxou',64480,'France');
INSERT INTO adresses VALUES (34,'77 Rue de Bonnarche','Laval-le-Prieuré',25210,'France');
INSERT INTO adresses VALUES (35,'53 allee des martinets','Barquet',27170,'France');
INSERT INTO adresses VALUES (36,'180 Rue des Vavres','Guignemicourt',80540,'France');
INSERT INTO adresses VALUES (37,'42 Lotissement les Violettes','Morlaàs',64160,'France');
INSERT INTO adresses VALUES (38,'1 Rue du Breu','Lannes',47170,'France');
INSERT INTO adresses VALUES (39,'1058 Rue du Stade','Bernwiller',68210,'France');
INSERT INTO adresses VALUES (40,'621 Lotissement Bel Horizon','Canéjan',33610,'France');
INSERT INTO adresses VALUES (41,'45 Rue du Docteur Schweitzer','Villeneuve-lès-Béziers',34500,'France');
INSERT INTO adresses VALUES (42,'147 Route de Relevant','Corbère-les-Cabanes',66130,'France');
INSERT INTO adresses VALUES (43,'80 Rue Principale','Chapelle-Saint-Quillain',70700,'France');
INSERT INTO adresses VALUES (44,'667 Chemin de Veissieux le Haut','Saint-Théodorit',30260,'France');
INSERT INTO adresses VALUES (45,'12 Chemin du Poulet','Fédry',70120,'France');
INSERT INTO adresses VALUES (46,'27 Route de la Carronniere','Pouillon',40350,'France');
INSERT INTO adresses VALUES (47,'3 le Pollet','Godisson',61240,'France');
INSERT INTO adresses VALUES (48,'351 Chemin du Moulin','Chagny',71150,'France');
INSERT INTO adresses VALUES (49,'1614 Chemin du Bicheron','Graves-Saint-Amant',16120,'France');
INSERT INTO adresses VALUES (50,'195 Allee de la Grange Maman','Forestière',51120,'France');

ALTER SEQUENCE adresses_id_seq RESTART WITH 51;

-- INSERT USERS
-- MDP = Tesla789

INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (1,'killianmbappe@gmail.com','Mbappe','Killian','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,1);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (2,'antoinegriezmann@gmail.com','Griezmann','Antoine','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,2);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (3,'oliviergiroud@gmail.com','Giroud','Olivier','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,3);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (4,'cristianoronaldo@gmail.com','Ronaldo','Cristiano','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,4);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (5,'lionnelmessi@gmail.com','Messi','Lionnel','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,5);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (6,'ranjithappassamy@gmail.com','Appassamy','Ranjith','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',3,6);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (7,'p-abbot3340@yahoo.com','Pittman','Abbot','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,7);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (8,'p.aquila9099@google.com','Parrish','Aquila','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,8);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (9,'cbarr7036@yahoo.com','Barr','Christian','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,9);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (10,'e_pope665@yahoo.fr','Pope','Ella','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,10);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (11,'t_emily@yahoo.com','Tucker','Emily','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,11);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (12,'monamyers3697@yahoo.fr','Myers','Mona','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,12);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (13,'m-odette6322@google.com','Meyers','Odette','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,13);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (14,'b-lani@yahoo.com','Barrera','Lani','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,14);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (15,'evance@google.com','Vance','Elton','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,15);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (16,'b_atkinson@yahoo.fr','Atkinson','Byron','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,16);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (17,'merritt.hatfield@yahoo.com','Hatfield','Merritt','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,17);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (18,'tysonhannah@outlook.fr','Tyson','Hannah','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,18);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (19,'m.evangeline@yahoo.com','Moon','Evangeline','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,19);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (20,'l.erin5891@google.com','Larson','Erin','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,20);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (21,'porter.jennings6796@yahoo.com','Jennings','Porter','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,21);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (22,'mckinney-marvin@outlook.fr','Mckinney','Marvin','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,22);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (23,'h_leila5065@outlook.com','Haynes','Leila','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,23);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (24,'s-dejesus3188@yahoo.com','Dejesus','Stuart','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,24);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (25,'odette_cooke@outlook.fr','Cooke','Odette','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,25);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (26,'djoseph@google.fr','Duffy','Joseph','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,26);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (27,'lila_abbott@google.fr','Abbott','Lila','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,27);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (28,'k-jefferson@google.com','Jefferson','Kirk','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,28);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (29,'c_walter7523@google.com','Cameron','Walter','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,29);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (30,'h-price3359@yahoo.com','Price','Harrison','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,30);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (31,'osborncharity6502@outlook.com','Osborn','Charity','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,31);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (32,'robert_weiss6247@outlook.com','Weiss','Robert','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,32);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (33,'f-aphrodite5119@google.com','Fischer','Aphrodite','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,33);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (34,'a-sierra@google.com','Abbott','Sierra','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,34);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (35,'c_rivers6807@google.fr','Rivers','Cameron','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,35);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (36,'palmer.odonnell@google.fr','O''donnell','Palmer','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,36);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (37,'f.lucian@google.fr','Franco','Lucian','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,37);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (38,'grant-scott@google.com','Scott','Grant','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,38);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (39,'filiana@outlook.com','Ferrell','Iliana','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,39);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (40,'aimee-robbins@google.fr','Robbins','Aimee','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,40);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (41,'burgess-nolan@google.com','Burgess','Nolan','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,41);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (42,'l.kelsey@outlook.com','Lang','Kelsey','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,42);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (43,'abdul-barrera1212@yahoo.fr','Barrera','Abdul','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,43);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (44,'krobles4203@google.fr','Robles','Kimberley','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,44);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id,"derniereConnexion") VALUES (45,'walter.phyllis@yahoo.fr','Walter','Phyllis','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,45, (current_date - interval '4 years' ));
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (46,'d_zachery9670@google.fr','Drake','Zachery','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,46);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (47,'britanni.valdez6199@google.com','Valdez','Britanni','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,47);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (48,'nehru-sweeney566@yahoo.fr','Sweeney','Nehru','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,48);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (49,'karleigh_owens232@google.com','Owens','Karleigh','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,49);
INSERT INTO users(id,email,nom,prenom,password,type_compte_id,adresse_id) VALUES (50,'w_jocelyn6250@yahoo.fr','Waters','Jocelyn','$2y$10$hR349GAJXBkD5.wUltOcZOP0RPuu/SKbc7Xh3XKrmXWxAVq29QIxS',1,50);

insert into users (id,email,nom,prenom,password,type_compte_id,adresse_id,"derniereConnexion") VALUES (51,'va@etre.supprime','lenom','leprenom','rien',1,1,(current_date - interval '4 years'));

insert into users (id,email,nom,prenom,password,type_compte_id,adresse_id,"derniereConnexion") VALUES (52,'va@etre.supprime2','lenom','leprenom','rien',1,1,(current_date - interval '5 years'));

ALTER SEQUENCE users_id_seq RESTART WITH 53;


-- INSERT PANIER 

-- INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (1, 4, 140, 1);
-- INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (2, 1, 35, 2);
-- INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (3, 1, 35, 3);
-- INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (4, 3, 105, 4);
-- INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (5, 20, 700, 5);

INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (1, 10, 3775, 1);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (2, 7, 385, 2);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (3, 8, 31115, 3);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (4, 9, 3176, 4);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (5, 10, 2070, 5);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (6, 7, 1049, 6);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (7, 9, 1404, 7);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (8, 7, 555, 8);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (9, 9, 3170, 9);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (10, 6, 260, 10);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (11, 7, 8250, 11);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (12, 11, 1135, 12);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (13, 8, 705, 13);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (14, 5, 1370, 14);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (15, 8, 320, 15);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (16, 14, 430, 16);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (17, 10, 3264, 17);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (18, 12, 2080, 18);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (19, 13, 30855, 19);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (20, 10, 860, 20);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (21, 10, 860, 21);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (22, 8, 717, 22);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (23, 8, 1150, 23);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (24, 6, 415, 24);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (25, 13, 795, 25);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (26, 11, 615, 26);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (27, 12, 2410, 27);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (28, 7, 290, 28);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (29, 9, 755, 29);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (30, 15, 35150, 30);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (31, 11, 620, 31);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (32, 13, 2000, 32);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (33, 10, 620, 33);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (34, 8, 855, 34);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (35, 6, 7815, 35);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (36, 10, 1525, 36);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (37, 10, 1505, 37);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (38, 4, 705, 38);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (39, 9, 1860, 39);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (40, 11, 770, 40);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (41, 7, 380, 41);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (42, 8, 582, 42);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (43, 10, 425, 43);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (44, 12, 2425, 44);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (45, 11, 17820, 45);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (46, 11, 630, 46);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (47, 6, 1930, 47);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (48, 13, 39285, 48);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (49, 7, 390, 49);
INSERT INTO paniers (id, nombre_article, montant, user_id) VALUES (50, 12, 899, 50);

ALTER SEQUENCE paniers_id_seq RESTART WITH 51;

-- INSER PANIER_STYLE_ACCESSSOIRE 

-- INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (1, 2, 1, 1);
-- INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (2, 2, 1, 2);
-- INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (3, 1, 2, 3);
-- INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (4, 1, 3, 4);
-- INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (5, 2, 4, 1);
-- INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (6, 1, 4, 3);
-- INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (7, 5, 5, 1);
-- INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (8, 5, 5, 2);
-- INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (9, 5, 5, 3);
-- INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (10, 5, 5, 4);

INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (1, 4, 1, 8);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (2, 1, 1, 8);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (3, 5, 1, 10);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (4, 3, 2, 9);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (5, 3, 2, 17);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (6, 1, 2, 23);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (7, 3, 3, 18);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (8, 1, 3, 9);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (9, 4, 3, 13);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (10, 4, 4, 5);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (11, 3, 4, 24);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (12, 2, 4, 3);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (13, 2, 5, 20);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (14, 5, 5, 11);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (15, 3, 5, 5);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (16, 4, 6, 6);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (17, 2, 6, 24);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (18, 1, 6, 6);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (19, 2, 7, 24);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (20, 2, 7, 14);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (21, 5, 7, 20);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (22, 1, 8, 23);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (23, 5, 8, 15);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (24, 1, 8, 8);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (25, 3, 9, 17);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (26, 5, 9, 10);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (27, 1, 9, 3);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (28, 2, 10, 4);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (29, 2, 10, 17);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (30, 2, 10, 15);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (31, 2, 11, 22);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (32, 1, 11, 13);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (33, 4, 11, 8);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (34, 5, 12, 21);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (35, 5, 12, 18);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (36, 1, 12, 22);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (37, 1, 13, 18);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (38, 3, 13, 3);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (39, 4, 13, 6);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (40, 2, 14, 11);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (41, 1, 14, 20);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (42, 2, 14, 10);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (43, 3, 15, 16);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (44, 2, 15, 19);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (45, 3, 15, 20);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (46, 5, 16, 22);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (47, 4, 16, 17);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (48, 5, 16, 22);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (49, 4, 17, 5);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (50, 2, 17, 24);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (51, 4, 17, 6);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (52, 4, 18, 14);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (53, 4, 18, 21);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (54, 4, 18, 8);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (55, 5, 19, 4);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (56, 4, 19, 11);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (57, 4, 19, 13);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (58, 1, 20, 21);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (59, 5, 20, 17);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (60, 4, 20, 18);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (61, 2, 21, 17);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (62, 3, 21, 23);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (63, 5, 21, 8);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (64, 1, 22, 24);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (65, 2, 22, 8);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (66, 5, 22, 4);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (67, 2, 23, 18);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (68, 5, 23, 4);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (69, 1, 23, 10);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (70, 1, 24, 23);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (71, 2, 24, 15);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (72, 3, 24, 15);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (73, 3, 25, 19);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (74, 5, 25, 9);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (75, 5, 25, 20);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (76, 5, 26, 15);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (77, 2, 26, 20);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (78, 4, 26, 23);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (79, 3, 27, 11);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (80, 4, 27, 8);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (81, 5, 27, 14);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (82, 1, 28, 20);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (83, 1, 28, 11);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (84, 5, 28, 19);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (85, 4, 29, 21);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (86, 3, 29, 6);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (87, 2, 29, 8);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (88, 5, 30, 12);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (89, 5, 30, 20);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (90, 5, 30, 12);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (91, 5, 31, 21);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (92, 3, 31, 6);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (93, 3, 31, 3);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (94, 4, 32, 16);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (95, 4, 32, 4);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (96, 5, 32, 14);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (97, 5, 33, 15);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (98, 4, 33, 4);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (99, 1, 33, 6);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (100, 5, 34, 17);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (101, 2, 34, 14);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (102, 1, 34, 15);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (103, 1, 35, 13);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (104, 1, 35, 22);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (105, 4, 35, 19);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (106, 5, 36, 22);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (107, 2, 36, 10);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (108, 3, 36, 16);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (109, 3, 37, 14);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (110, 4, 37, 9);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (111, 3, 37, 3);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (112, 2, 38, 22);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (113, 1, 38, 17);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (114, 1, 38, 10);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (115, 1, 39, 14);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (116, 4, 39, 19);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (117, 4, 39, 14);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (118, 4, 40, 20);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (119, 5, 40, 11);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (120, 2, 40, 18);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (121, 2, 41, 23);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (122, 2, 41, 15);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (123, 3, 41, 11);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (124, 3, 42, 23);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (125, 4, 42, 11);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (126, 1, 42, 24);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (127, 3, 43, 17);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (128, 5, 43, 3);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (129, 2, 43, 9);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (130, 4, 44, 23);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (131, 5, 44, 6);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (132, 3, 44, 5);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (133, 3, 45, 15);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (134, 5, 45, 12);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (135, 3, 45, 16);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (136, 5, 46, 11);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (137, 2, 46, 20);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (138, 4, 46, 15);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (139, 2, 47, 15);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (140, 3, 47, 5);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (141, 1, 47, 21);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (142, 3, 48, 9);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (143, 5, 48, 13);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (144, 5, 48, 18);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (145, 2, 49, 6);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (146, 4, 49, 4);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (147, 1, 49, 23);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (148, 2, 50, 24);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (149, 5, 50, 20);
INSERT INTO panier_style (id, quantite, panier_id, style_id) VALUES (150, 5, 50, 22);

ALTER SEQUENCE panier_style_id_seq RESTART WITH 151;


-- INSERTION DE FACTURES 

-- FACTURES DE VEHICULES
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (1, '2021-01-22_1-1-1-8-24-20_1_1', 138990.00, 1, 1, 1, 1, '2021-01-22 22:00:00', '2021-01-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (2, '2021-02-22_1-1-2-8-24-20_1_2', 140790.00, 2, 2, 2, 1, '2021-02-22 22:00:00', '2021-02-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (3, '2021-02-22_1-1-3-8-24-20_1_3', 141190.00, 3, 3, 3, 1, '2021-02-22 22:00:00', '2021-02-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (4, '2021-06-22_1-1-5-8-24-20_1_4', 141190.00, 4, 4, 4, 1, '2021-06-22 22:00:00', '2021-06-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (5, '2021-10-22_1-1-6-8-24-20_1_5', 141190.00, 5, 5, 5, 1, '2021-10-22 22:00:00', '2021-10-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (6, '2021-04-22_1-1-1-9-24-20_1_6', 143890.00, 6, 6, 6, 1, '2021-04-22 22:00:00', '2021-04-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (7, '2021-06-22_1-1-2-9-24-20_1_7', 145690.00, 7, 7, 7, 1, '2021-06-22 22:00:00', '2021-06-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (8, '2021-10-22_1-1-3-9-24-20_1_8', 146090.00, 8, 8, 8, 1, '2021-10-22 22:00:00', '2021-10-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (9, '2021-03-22_1-1-5-9-24-20_1_9', 146090.00, 9, 9, 9, 1, '2021-03-22 22:00:00', '2021-03-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (10, '2021-09-22_1-1-6-9-24-20_1_10', 146090.00, 10, 10, 10, 1, '2021-09-22 22:00:00', '2021-09-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (11, '2021-09-22_1-1-1-9-25-20_1_11', 146290.00, 11, 11, 11, 1, '2021-09-22 22:00:00', '2021-09-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (12, '2021-03-22_1-1-1-9-26-20_1_12', 146290.00, 12, 12, 12, 1, '2021-03-22 22:00:00', '2021-03-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (13, '2021-06-22_2-3-1-14-24_1_13', 53490.00, 13, 13, 13, 1, '2021-06-22 22:00:00', '2021-06-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (14, '2021-03-22_2-3-2-14-24_1_14', 54690.00, 14, 14, 14, 1, '2021-03-22 22:00:00', '2021-03-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (15, '2021-04-22_2-3-3-14-24_1_15', 55090.00, 15, 15, 15, 1, '2021-04-22 22:00:00', '2021-04-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (16, '2021-10-22_2-3-5-14-24_1_16', 55090.00, 16, 16, 16, 1, '2021-10-22 22:00:00', '2021-10-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (17, '2021-02-22_2-3-6-14-24_1_17', 55490.00, 17, 17, 17, 1, '2021-02-22 22:00:00', '2021-02-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (18, '2021-01-22_2-3-1-15-24_1_18', 54680.00, 18, 18, 18, 1, '2021-01-22 22:00:00', '2021-01-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (19, '2021-12-31_2-3-2-15-24_1_19', 55880.00, 19, 19, 19, 1, '2021-12-31 22:00:00', '2021-12-31 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (20, '2022-01-22_2-3-3-15-24_1_20', 56280.00, 20, 20, 20, 1, '2022-01-22 22:00:00', '2022-01-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (21, '2022-10-22_2-3-5-15-24_1_21', 56280.00, 21, 21, 21, 1, '2022-10-22 22:00:00', '2022-10-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (22, '2022-03-22_2-3-6-15-24_1_22', 56680.00, 22, 22, 22, 1, '2022-03-22 22:00:00', '2022-03-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (23, '2022-06-22_2-3-1-15-24-22_1_23', 56030.00, 23, 23, 23, 1, '2022-06-22 22:00:00', '2022-06-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (24, '2022-05-22_2-3-2-15-24-22_1_24', 57230.00, 24, 24, 24, 1, '2022-05-22 22:00:00', '2022-05-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (25, '2022-02-22_2-3-3-15-24-22_1_25', 57630.00, 25, 25, 25, 1, '2022-02-22 22:00:00', '2022-02-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (26, '2022-01-22_2-3-5-15-24-22_1_26', 57630.00, 26, 26, 26, 1, '2022-01-22 22:00:00', '2022-01-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (27, '2022-09-22_2-3-6-15-24-22_1_27', 58030.00, 27, 27, 27, 1, '2022-09-22 22:00:00', '2022-09-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (28, '2022-03-22_2-4-1-14-24_1_28', 62490.00, 28, 28, 28, 1, '2022-03-22 22:00:00', '2022-03-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (29, '2022-07-22_2-4-2-14-24_1_29', 63690.00, 29, 29, 29, 1, '2022-07-22 22:00:00', '2022-07-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (30, '2022-09-22_2-4-3-14-24_1_30', 64090.00, 30, 30, 30, 1, '2022-09-22 22:00:00', '2022-09-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (31, '2022-04-22_2-4-5-14-24_1_31', 64090.00, 31, 31, 31, 1, '2022-04-22 22:00:00', '2022-04-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (32, '2022-05-22_2-4-6-14-24_1_32', 64490.00, 32, 32, 32, 1, '2022-05-22 22:00:00', '2022-05-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (33, '2022-08-22_2-4-1-15-25_1_33', 64870.00, 33, 33, 33, 1, '2022-08-22 22:00:00', '2022-08-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (34, '2022-02-22_2-4-2-15-25_1_34', 66070.00, 34, 34, 34, 1, '2022-02-22 22:00:00', '2022-02-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (35, '2022-11-22_2-4-3-15-25_1_35', 66470.00, 35, 35, 35, 1, '2022-11-22 22:00:00', '2022-11-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (36, '2022-07-22_2-4-5-15-25_1_36', 66470.00, 36, 36, 36, 1, '2022-07-22 22:00:00', '2022-07-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (37, '2022-01-22_2-4-6-15-25_1_37', 66870.00, 37, 37, 37, 1, '2022-01-22 22:00:00', '2022-01-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (38, '2022-02-22_2-5-1-16-24_1_38', 66490.00, 38, 38, 38, 1, '2022-02-22 22:00:00', '2022-02-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (39, '2022-11-22_2-5-2-16-24_1_39', 67690.00, 39, 39, 39, 1, '2022-11-22 22:00:00', '2022-11-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (40, '2022-08-22_2-5-3-16-24_1_40', 68090.00, 40, 40, 40, 1, '2022-08-22 22:00:00', '2022-08-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (41, '2022-10-22_2-5-5-16-24_1_41', 68090.00, 41, 41, 41, 1, '2022-10-22 22:00:00', '2022-10-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (42, '2022-10-22_2-5-6-16-24_1_42', 68490.00, 42, 42, 42, 1, '2022-10-22 22:00:00', '2022-10-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (43, '2022-11-22_2-5-1-16-25_1_43', 67680.00, 43, 43, 43, 1, '2022-11-22 22:00:00', '2022-11-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (44, '2022-01-22_2-5-2-16-25_1_44', 68880.00, 44, 44, 44, 1, '2022-01-22 22:00:00', '2022-01-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (45, '2022-01-22_2-5-3-16-25_1_45', 69280.00, 45, 45, 45, 2, '2022-01-22 22:00:00', '2022-01-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (46, '2022-05-22_2-5-5-16-25_1_46', 69280.00, 46, 46, 46, 1, '2022-05-22 22:00:00', '2022-05-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (47, '2022-06-22_2-5-6-16-25_1_47', 69680.00, 47, 47, 47, 1, '2022-06-22 22:00:00', '2022-06-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (48, '2022-06-22_3-6-1-10-24-21_1_48', 141990.00, 48, 48, 48, 1, '2022-06-22 22:00:00', '2022-06-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (49, '2022-06-22_3-6-2-10-24-21_1_49', 143790.00, 49, 49, 49, 2, '2022-06-22 22:00:00', '2022-06-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (50, '2022-06-22_3-6-3-10-24-21_1_50', 144190.00, 50, 50, 50, 2, '2022-06-22 22:00:00', '2022-06-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (51, '2022-10-22_3-6-5-10-24-21_1_51', 144190.00, 1, 1, 51, 1, '2022-10-22 22:00:00', '2022-10-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (52, '2022-07-22_3-6-6-10-24-21_1_52', 144190.00, 2, 2, 52, 1, '2022-07-22 22:00:00', '2022-07-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (53, '2022-08-22_3-6-1-11-25-21_1_53', 150290.00, 3, 3, 53, 1, '2022-08-22 22:00:00', '2022-08-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (54, '2022-10-22_3-6-2-11-25-21_1_54', 152090.00, 4, 4, 54, 1, '2022-10-22 22:00:00', '2022-10-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (55, '2022-01-22_3-6-3-11-25-21_1_55', 152490.00, 5, 5, 55, 1, '2022-01-22 22:00:00', '2022-01-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (56, '2022-07-22_3-6-5-11-25-21_1_56', 152490.00, 6, 6, 56, 1, '2022-07-22 22:00:00', '2022-07-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (57, '2022-05-22_3-6-6-11-25-21_1_57', 152490.00, 7, 7, 57, 1, '2022-05-22 22:00:00', '2022-05-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (58, '2022-06-22_3-6-1-11-26-21_1_58', 150290.00, 8, 8, 58, 1, '2022-06-22 22:00:00', '2022-06-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (59, '2022-11-22_3-6-2-11-26-21_1_59', 152090.00, 9, 9, 59, 1, '2022-11-22 22:00:00', '2022-11-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (60, '2022-06-22_3-6-3-11-26-21_1_60', 152490.00, 10, 10, 60, 1, '2022-06-22 22:00:00', '2022-06-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (61, '2022-04-22_3-6-5-11-26-21_1_61', 152490.00, 11, 11, 61, 1, '2022-04-22 22:00:00', '2022-04-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (62, '2022-05-22_3-6-6-11-26-21_1_62', 152490.00, 12, 12, 62, 1, '2022-05-22 22:00:00', '2022-05-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (63, '2022-12-22_4-8-1-12-24-23_1_63', 51340.00, 13, 13, 63, 1, '2022-12-22 22:00:00', '2022-12-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (64, '2022-05-22_4-8-2-12-24-23_1_64', 52540.00, 14, 14, 64, 1, '2022-05-22 22:00:00', '2022-05-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (65, '2022-06-22_4-8-3-12-24-23_1_65', 52940.00, 15, 15, 65, 1, '2022-06-22 22:00:00', '2022-06-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (66, '2022-07-22_4-8-5-12-24-23_1_66', 52940.00, 16, 16, 66, 1, '2022-07-22 22:00:00', '2022-07-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (67, '2022-06-22_4-8-6-12-24-23_1_67', 53340.00, 17, 17, 67, 1, '2022-06-22 22:00:00', '2022-06-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (68, '2022-01-22_4-8-1-13-25_1_68', 53280.00, 18, 18, 68, 1, '2022-01-22 22:00:00', '2022-01-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (69, '2022-07-22_4-8-2-13-25_1_69', 54480.00, 19, 19, 69, 1, '2022-07-22 22:00:00', '2022-07-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (70, '2022-05-22_4-8-3-13-25_1_70', 54880.00, 20, 20, 70, 1, '2022-05-22 22:00:00', '2022-05-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (71, '2022-04-22_4-8-5-13-25_1_71', 54880.00, 21, 21, 71, 1, '2022-04-22 22:00:00', '2022-04-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (72, '2022-05-22_4-8-6-13-25_1_72', 55280.00, 22, 22, 72, 1, '2022-05-22 22:00:00', '2022-05-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (73, '2022-07-22_4-9-1-12-24-23_1_73', 66340.00, 23, 23, 73, 1, '2022-07-22 22:00:00', '2022-07-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (74, '2022-06-22_4-9-2-12-24-23_1_74', 67540.00, 24, 24, 74, 1, '2022-06-22 22:00:00', '2022-06-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (75, '2022-02-22_4-9-4-12-24-23_1_75', 69340.00, 25, 25, 75, 1, '2022-02-22 22:00:00', '2022-02-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (76, '2022-08-22_4-9-5-12-24-23_1_76', 67940.00, 26, 26, 76, 1, '2022-08-22 22:00:00', '2022-08-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (77, '2022-12-22_4-9-7-12-24-23_1_77', 69540.00, 27, 27, 77, 1, '2022-12-22 22:00:00', '2022-12-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (78, '2022-04-22_4-10-1-17-25-23_1_78', 72530.00, 28, 28, 78, 1, '2022-04-22 22:00:00', '2022-04-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (79, '2022-08-22_4-10-2-17-25-23_1_79', 73730.00, 29, 29, 79, 1, '2022-08-22 22:00:00', '2022-08-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (80, '2022-12-22_4-10-4-17-25-23_1_80', 75530.00, 30, 30, 80, 1, '2022-12-22 22:00:00', '2022-12-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (81, '2022-05-22_4-10-5-17-25-23_1_81', 74130.00, 31, 31, 81, 1, '2022-05-22 22:00:00', '2022-05-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (82, '2022-08-22_4-10-7-17-25-23_1_82', 75730.00, 32, 32, 82, 1, '2022-08-22 22:00:00', '2022-08-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (83, '2022-08-22_4-10-7-17-24-23_1_83', 74540.00, 33, 33, 83, 1, '2022-08-22 22:00:00', '2022-08-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (84, '2022-11-22_4-10-7-17-25_1_84', 74380.00, 34, 34, 84, 1, '2022-11-22 22:00:00', '2022-11-22 22:00:00', 1000, 2);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,vehicule_id,etat_commande_id,created_at,updated_at,montant_accompte,mode_paiement_id) VALUES (85, '2022-12-22_4-10-4-17-24_1_85', 72990.00, 35, 35, 85, 1, '2022-12-22 22:00:00', '2022-12-22 22:00:00', 1000, 2);

-- FACTURES DE ACCESSOIRES
-- INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (86, 'Facture_Accessoire_35_2022-01-07', 140, 1, 1, 1, 1, '2022-01-07 22:00:00', '2022-01-07 22:00:00', 1);
-- INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (87, 'Facture_Accessoire_36_2022-01-07', 35, 2, 2, 2, 1, '2022-02-07 22:00:00', '2022-02-07 22:00:00', 1);
-- INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (88, 'Facture_Accessoire_37_2022-01-07', 35, 3, 3, 3, 1, '2022-05-07 22:00:00', '2022-05-07 22:00:00', 1);
-- INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (89, 'Facture_Accessoire_38_2022-01-07', 105, 4, 4, 4, 1, '2022-09-07 22:00:00', '2022-09-07 22:00:00', 1);
-- INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (90, 'Facture_Accessoire_39_2022-01-07', 700, 5, 5, 5, 1, '2022-11-07 22:00:00', '2022-11-07 22:00:00', 1);

INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (86, 'Facture_Accessoire_86_2021-01-22', 3775, 1, 1, 1, 1, '2021-01-22 22:00:00', '2021-01-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (87, 'Facture_Accessoire_87_2021-06-22', 385, 2, 2, 2, 1, '2021-06-22 22:00:00', '2021-06-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (88, 'Facture_Accessoire_88_2021-10-22', 31115, 3, 3, 3, 1, '2021-10-22 22:00:00', '2021-10-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (89, 'Facture_Accessoire_89_2021-06-22', 3176, 4, 4, 4, 1, '2021-06-22 22:00:00', '2021-06-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (90, 'Facture_Accessoire_90_2021-01-22', 2070, 5, 5, 5, 1, '2021-01-22 22:00:00', '2021-01-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (91, 'Facture_Accessoire_91_2021-04-22', 1049, 6, 6, 6, 1, '2021-04-22 22:00:00', '2021-04-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (92, 'Facture_Accessoire_92_2021-08-22', 1404, 7, 7, 7, 1, '2021-08-22 22:00:00', '2021-08-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (93, 'Facture_Accessoire_93_2021-03-22', 555, 8, 8, 8, 1, '2021-03-22 22:00:00', '2021-03-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (94, 'Facture_Accessoire_94_2021-09-22', 3170, 9, 9, 9, 1, '2021-09-22 22:00:00', '2021-09-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (95, 'Facture_Accessoire_95_2021-04-22', 260, 10, 10, 10, 1, '2021-04-22 22:00:00', '2021-04-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (96, 'Facture_Accessoire_96_2021-10-22', 8250, 11, 11, 11, 1, '2021-10-22 22:00:00', '2021-10-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (97, 'Facture_Accessoire_97_2021-05-22', 1135, 12, 12, 12, 1, '2021-05-22 22:00:00', '2021-05-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (98, 'Facture_Accessoire_98_2021-02-22', 705, 13, 13, 13, 1, '2021-02-22 22:00:00', '2021-02-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (99, 'Facture_Accessoire_99_2021-12-22', 1370, 14, 14, 14, 1, '2021-12-22 22:00:00', '2021-12-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (100, 'Facture_Accessoire_100_2022-01-22', 320, 15, 15, 15, 1, '2022-01-22 22:00:00', '2022-01-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (101, 'Facture_Accessoire_101_2022-11-22', 430, 16, 16, 16, 1, '2022-11-22 22:00:00', '2022-11-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (102, 'Facture_Accessoire_102_2022-06-22', 3264, 17, 17, 17, 1, '2022-06-22 22:00:00', '2022-06-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (103, 'Facture_Accessoire_103_2022-11-22', 2080, 18, 18, 18, 1, '2022-11-22 22:00:00', '2022-11-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (104, 'Facture_Accessoire_104_2022-09-22', 30855, 19, 19, 19, 1, '2022-09-22 22:00:00', '2022-09-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (105, 'Facture_Accessoire_105_2022-09-22', 860, 20, 20, 20, 1, '2022-09-22 22:00:00', '2022-09-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (106, 'Facture_Accessoire_106_2022-07-22', 860, 21, 21, 21, 1, '2022-07-22 22:00:00', '2022-07-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (107, 'Facture_Accessoire_107_2022-05-22', 717, 22, 22, 22, 1, '2022-05-22 22:00:00', '2022-05-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (108, 'Facture_Accessoire_108_2022-06-22', 1150, 23, 23, 23, 1, '2022-06-22 22:00:00', '2022-06-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (109, 'Facture_Accessoire_109_2022-04-22', 415, 24, 24, 24, 1, '2022-04-22 22:00:00', '2022-04-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (110, 'Facture_Accessoire_110_2022-10-22', 795, 25, 25, 25, 1, '2022-10-22 22:00:00', '2022-10-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (111, 'Facture_Accessoire_111_2022-06-22', 615, 26, 26, 26, 1, '2022-06-22 22:00:00', '2022-06-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (112, 'Facture_Accessoire_112_2022-05-22', 2410, 27, 27, 27, 1, '2022-05-22 22:00:00', '2022-05-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (113, 'Facture_Accessoire_113_2022-09-22', 290, 28, 28, 28, 1, '2022-09-22 22:00:00', '2022-09-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (114, 'Facture_Accessoire_114_2022-07-22', 755, 29, 29, 29, 1, '2022-07-22 22:00:00', '2022-07-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (115, 'Facture_Accessoire_115_2022-09-22', 35150, 30, 30, 30, 1, '2022-09-22 22:00:00', '2022-09-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (116, 'Facture_Accessoire_116_2022-06-22', 620, 31, 31, 31, 1, '2022-06-22 22:00:00', '2022-06-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (117, 'Facture_Accessoire_117_2022-06-22', 2000, 32, 32, 32, 1, '2022-06-22 22:00:00', '2022-06-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (118, 'Facture_Accessoire_118_2022-07-22', 620, 33, 33, 33, 1, '2022-07-22 22:00:00', '2022-07-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (119, 'Facture_Accessoire_119_2022-08-22', 855, 34, 34, 34, 1, '2022-08-22 22:00:00', '2022-08-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (120, 'Facture_Accessoire_120_2022-08-22', 7815, 35, 35, 35, 1, '2022-08-22 22:00:00', '2022-08-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (121, 'Facture_Accessoire_121_2022-08-22', 1525, 36, 36, 36, 1, '2022-08-22 22:00:00', '2022-08-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (122, 'Facture_Accessoire_122_2022-08-22', 1505, 37, 37, 37, 1, '2022-08-22 22:00:00', '2022-08-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (123, 'Facture_Accessoire_123_2022-01-22', 705, 38, 38, 38, 1, '2022-01-22 22:00:00', '2022-01-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (124, 'Facture_Accessoire_124_2022-03-22', 1860, 39, 39, 39, 1, '2022-03-22 22:00:00', '2022-03-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (125, 'Facture_Accessoire_125_2022-07-22', 770, 40, 40, 40, 1, '2022-07-22 22:00:00', '2022-07-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (126, 'Facture_Accessoire_126_2022-08-22', 380, 41, 41, 41, 1, '2022-08-22 22:00:00', '2022-08-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (127, 'Facture_Accessoire_127_2022-02-22', 582, 42, 42, 42, 1, '2022-02-22 22:00:00', '2022-02-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (128, 'Facture_Accessoire_128_2022-03-22', 425, 43, 43, 43, 1, '2022-03-22 22:00:00', '2022-03-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (129, 'Facture_Accessoire_129_2022-10-22', 2425, 44, 44, 44, 1, '2022-10-22 22:00:00', '2022-10-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (130, 'Facture_Accessoire_130_2022-09-22', 17820, 45, 45, 45, 2, '2022-09-22 22:00:00', '2022-09-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (131, 'Facture_Accessoire_131_2022-05-22', 630, 46, 46, 46, 1, '2022-05-22 22:00:00', '2022-05-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (132, 'Facture_Accessoire_132_2022-09-22', 1930, 47, 47, 47, 1, '2022-09-22 22:00:00', '2022-09-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (133, 'Facture_Accessoire_133_2022-12-22', 39285, 48, 48, 48, 1, '2022-12-22 22:00:00', '2022-12-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (134, 'Facture_Accessoire_134_2022-10-22', 390, 49, 49, 49, 2, '2022-10-22 22:00:00', '2022-10-22 22:00:00', 1);
INSERT INTO factures (id,libelle,cout,user_id,adresse_id,panier_id,etat_commande_id,created_at,updated_at,mode_paiement_id) VALUES (135, 'Facture_Accessoire_135_2022-12-22', 899, 50, 50, 50, 2, '2022-12-22 22:00:00', '2022-12-22 22:00:00', 1);

ALTER SEQUENCE factures_id_seq RESTART WITH 136;


-- CREATION DE VUES POUR POWERBI ET CSV

-- // ------- VUE CLIENTS

DROP VIEW IF EXISTS vue_clients;

CREATE VIEW vue_clients AS 
    SELECT u.id "Numéro client", u.nom "Nom client", u.prenom "Prénom client", u.nomentreprise "Nom entreprise", 
            u.numerotva "Numéro TVA", tc.libelle "Type compte"
    FROM tesla.users u
    JOIN tesla.type_comptes tc ON u.type_compte_id = tc.id;


-- // ------- VUE ADRESSES

DROP VIEW IF EXISTS vue_adresses;

CREATE VIEW vue_adresses AS 
    SELECT *
    FROM tesla.adresses a;

-- // ------- VUE ACCESSOIRES

DROP VIEW IF EXISTS vue_accessoires;

CREATE VIEW vue_accessoires AS 
    SELECT s.id "Numéro style", s.libelle "Style accessoire", a.libelle "Nom accessoire", ca.libelle "Catégorie accessoire"
    FROM tesla.styles s
        JOIN tesla.style_accessoire sa ON s.id = sa.style_id
        JOIN tesla.accessoires a ON sa.accessoire_id = a.id
        JOIN tesla.categorie_accessoires ca ON a.categorie_accessoire_id = ca.id;


-- // ------- VUE VEHICULES

DROP VIEW IF EXISTS vue_vehicules;

CREATE VIEW vue_vehicules AS 
    SELECT v.id "Numéro véhicule", motor.libelle "Nom motorisation", m.libelle "Nom modèle"
    FROM tesla.vehicules v
        JOIN tesla.motorisations motor ON v.motorisation_id = motor.id
        JOIN tesla.modeles m ON v.modele_id = m.id;

-- // ------- VUE FACTURES

DROP VIEW IF EXISTS vue_factures;

CREATE VIEW vue_factures AS 
    SELECT f.id "Numéro facture", f.libelle "Libelle facture", f.cout "Montant facture", f.user_id "Numéro client", 
            f.adresse_id "Numéro adresse", f.vehicule_id "Numéro véhicule", 
            f.panier_id "Numéro panier", acc.id "Numéro accessoire", s.id "Numéro style", 
            COALESCE(psa.quantite, 1) "Quantité commandé", COALESCE(v.prix, acc.prix) "Prix unitaire", ec.libelle "Etat commande", f.created_at "Date facture"
    FROM tesla.factures f
        LEFT JOIN tesla.etat_commandes ec ON f.etat_commande_id = ec.id
        LEFT JOIN tesla.panier_style_accessoire psa ON f.panier_id = psa.panier_id
        LEFT JOIN tesla.accessoires acc ON psa.accessoire_id = acc.id
        LEFT JOIN tesla.styles s ON psa.style_id = s.id
        LEFT JOIN tesla.vehicules v ON f.vehicule_id = v.id
    ORDER BY 1,9;
;

--########################################################################
-- PROCEDURE / TRIGGER
--#########################################################################

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


drop trigger if exists bf_upd_ins_styles on tesla.styles;
create trigger bf_upd_ins_styles
	before update or insert on tesla.styles
	FOR EACH ROW
execute procedure verif_styles_stock();


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

drop trigger if exists bf_ins_upd_panier_style on tesla.panier_style;
create trigger bf_ins_upd_panier_style
	before update or insert on tesla.panier_style
	FOR EACH ROW
execute procedure verif_styles_panier_stock();




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


drop trigger if exists bf_upd_factures on tesla.factures;
create trigger bf_upd_factures
	before update on tesla.factures
	FOR EACH ROW
execute procedure tesla.verif_upd_factures();



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


drop trigger if exists bf_upd_ins_users on tesla.users;
create trigger bf_upd_ins_users
	before update or insert on tesla.users
	FOR EACH ROW
execute procedure tesla.verif_upd_ins_users();



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
			--DO THIS
			SELECT "derniereConnexion" INTO STRICT user_dates from tesla.users where id=user_ids;
			IF vNbLignes>0 OR user_dates >= (current_date - interval'3 years' ) THEN
--on vérifie quand même (au cas où), que le user n’ai pas de commande en cours
				RAISE NOTICE 'USER % : annulation', user_ids;
				--RAISE EXCEPTION 'USER % : annulation', user_ids; 
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
					--RAISE NOTICE 'USER % : anonymisation', user_ids;
					--THEN ANONYMISATION

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

