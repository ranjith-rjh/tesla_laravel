<?php include '../public/php/header.php' ?>

    <div id="faq_container">
        <h1>F.A.Q</h1>
        <div id="type_question">
            <h4>Cliquez sur la catégorie où vous désirez vous renseigner</h4>
            <input class="input_categorie_button" onclick="scrollToSection('compte')" type="button" value="Mon compte"/>
            <input class="input_categorie_button" onclick="scrollToSection('donneespersonnelles')" type="button" value="Mes données personnelles"/>
            <input class="input_categorie_button" onclick="scrollToSection('paiement')" type="button" value="Paiement"/>
            <input class="input_categorie_button" onclick="scrollToSection('Véhicules')" type="button" value="Véhicules"/>
            <input class="input_categorie_button" onclick="scrollToSection('Accessoires')" type="button" value="Accessoires"/>
            <input class="input_categorie_button" onclick="scrollToSection('boutique_panier')" type="button" value="Boutique/Panier"/>
            <input class="input_categorie_button" type="button" value="Ma commande"/>
        </div>
        <h7>Si vous ne trouvez pas de réponse à votre question parmi les catégories proposées ici, n'hésitez pas à <a class="txt_cliquable" href="/contact">nous contacter</a>.</h7>
        <div id="question_container">
            <hr>
            <h5 id="compte">Mon compte :</h5>
            <div>
                <div class="faq_btn_collapsible arrow-container" onclick="toggleArrow(this)">
                    Que se passe-t-il si je supprime ou anonymise mon compte ?
                    <i class="arrow down">▲</i>
                </div>
                <div class="description_question_faq">
                    <br>
                    <p class="txt_aide">- Quand vous cliquerez sur les boutons "Supprimez mon compte" ou "Anonymiser" sur votre page de compte.</p>
                    <p class="txt_aide">- Vous serez redirigé sur une page où l'on vous demandera de valider votre mot de passe.</p>
                    <p class="txt_aide">- Après validation, votre compte sera supprimé et vos informations personnelles seront rendues anonymes.</p>
                    <p class="txt_aide">- Cette action est irréversible et vous n'aurez plus accès à votre compte.</p>
                </div>
                <div class="faq_btn_collapsible arrow-container" onclick="toggleArrow(this)">
                    Comment activer la double authentication ?
                    <i class="arrow down">▲</i>
                </div>
                <div class="description_question_faq">
                    <br>
                    <p class="txt_aide">- Vérifiez que vous avez bien ajouté votre numéro de téléphone (onglet "informations personnelles").</p>
                    <p class="txt_aide">- Pour ajouter un numéro, cliquez sur "Modifier mes informations personnelles".</p>
                    <p class="txt_aide">- Réessayez d'activer la double authentification après avoir validé votre mot de passe.</p>
                    <p class="txt_aide">- Si le problème persiste, nous vous invitons à <a class="txt_cliquable" href="/contact">nous contacter</a>.</p>
                </div>  
            </div>
            <hr>
            <h5 id="donneespersonnelles">Mes données personnelles :</h5>
            <div>
                <div class="faq_btn_collapsible arrow-container" onclick="toggleArrow(this)">
                    Comment seront traitées mes données ?
                    <i class="arrow down">▲</i>
                </div>
                <div class="description_question_faq">
                    <br>
                    <p class="txt_aide">- Elles seront enregistrées dans notre système de données.</p>
                    <p class="txt_aide">- Votre mot de passe est crypté dès votre inscription par notre système de sécurité.</p>
                    <p class="txt_aide">- Vous pouvez à tout moment sur votre page de compte supprimer celui-ci ou anonymiser vos données personnelles.</p>
                    <p class="txt_aide">Pour plus d'explication nous vous invitons à lire notre page de <a class="txt_cliquable" href="/donnees-personnelles">politique des données personnelles</a></p>
                </div>
            </div>
            <hr>
            <h5 id="paiement">Paiement :</h5>
            <div>
                <div class="faq_btn_collapsible arrow-container" onclick="toggleArrow(this)">
                    première question
                    <i class="arrow down">▲</i>
                </div>
                <div class="description_question_faq">
                    <br>
                    <p class="txt_aide">Description de la question</p>
                </div>
            </div>
            <hr>
            <h5 id="Véhicules">Véhicules :</h5>
            <div>
                <div class="faq_btn_collapsible arrow-container" onclick="toggleArrow(this)">
                    première question
                    <i class="arrow down">▲</i>
                </div>
                <div class="description_question_faq">
                    <br>
                    <p class="txt_aide">Description de la question</p>
                </div>
            </div>
            <hr>
            <h5 id="Accessoires">Accessoires :</h5>
            <div>
                <div class="faq_btn_collapsible arrow-container" onclick="toggleArrow(this)">
                    première question
                    <i class="arrow down">▲</i>
                </div>
                <div class="description_question_faq">
                    <br>
                    <p class="txt_aide">Description de la question</p>
                </div>
            </div>
            <hr>
            <h5 id="boutique_panier">Boutique/Panier :</h5>
            <div>
                <div class="faq_btn_collapsible arrow-container" onclick="toggleArrow(this)">
                    première question
                    <i class="arrow down">▲</i>
                </div>
                <div class="description_question_faq">
                    <br>
                    <p class="txt_aide">Description de la question</p>
                </div>
            </div>
            <hr>
            <h5 id="boutique_panier">Ma commande :</h5>
            <div>
                <div class="faq_btn_collapsible arrow-container" onclick="toggleArrow(this)">
                    première question
                    <i class="arrow down">▲</i>
                </div>
                <div class="description_question_faq">
                    <br>
                    <p class="txt_aide">Description de la question</p>
                </div>
            </div>
        </div>
    </div>
    <button id="return_up_button">▲</button>
</div>

<footer>
    <p style="margin-bottom:8px;">
        <a href="/mentions-legales">Mentions légales</a>
        |
        <a href="/donnees-personnelles">Politique des données personnelles</a>
        |
        <a id="gerer_cookie_footer" href="#">Gérer mes cookies</a>
        |
        <a href="/contact">Contact</a>
        |
        <a href="/faq">F.A.Q</a>
    </p>
    <p>Tesla Corporation ~2022</p>
</footer>
</body>
</html>
<script defer src="../js/faq.js"></script>