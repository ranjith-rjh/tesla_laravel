<?php include '../public/php/header.php' ?>



<!-- <div class="englobe"> -->

    <div class="rico">

        <div class="contenu">
        
            <nav class="menu">
                    @foreach($posts_modeles as $post)
                        <!-- on donne un id en fonction de l'id du modele -->
                        <p class="menuLat" id=link_model{{$post->id}} >
            
                            <a href=#model{{$post->id}}> 
                                {{ $post->libelle }}
                            </a>
                        </p>
                    @endforeach
            </nav>
            @foreach($posts_modeles as $post)
                <div class="slider" id=model{{$post->id}}>
                    <div>
        
                        <div class="main_informations">
                            <h3>{{$post->libelle}}</h3>
                            <p>Vitesse max : {{$posts_motors[$post->id - 1]->vitesse_max}} km/h</p>
                            <p>0-100 km/h : {{$posts_motors[$post->id - 1]->acceleration}} s</p>
                            <p>Autonomie  : {{$posts_motors[$post->id - 1]->autonomie}} km</p>
                        </div>
                        <div class="butContainer">
                            <button class="butCreer button_style_home" >
                                <!-- le lien renvoie, grâce à la route, à une page dédiée à tel vehicule -->
                                <!-- le str_replace() permet de remplacer l'espace par %20 pour l'url -->
                                <a href=/modeles/{{str_replace(" ","%20", $post->libelle)}}>Configurer ce véhicule</a>
                            </button>
                            <button class="butEssai button_style_home"><a href="/reservation">Réserver un essai</a></button>
                        </div>
                    </div>
                </div>
            @endforeach
        

            

            <div class="footer">
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
            </div>
        </div>
        

    </div>
    

</div>

<div id="addForm">
?    
</div>


<div class="div_aide_homepage">
    <div class="div_bandeau_aide_content">
        <h2 class="title_aide">Besoin d'aide ?</h2>
        <div class="div_groupe_text_aide">
            <p class="petit_title_aide" >Comment naviguer entre les modèles de véhicules ?</p>
            <div class="div_txt_aide displayedNone" >
                <!-- <p class="txt_aide">- Sur la droite de l'écran vous pouvez voir le modèle présenté avec ses caractéristiques.</p>
                <hr> -->
                <p class="txt_aide">- Vous pouvez simplement défiler la page pour voir les photos de chaque modèles et leurs caractéristiques.</p>
                <hr>
                <p class="txt_aide">- Si vous savez quel modèle vous intéresse : utilisez le menu latéral de gauche, en cliquant sur le modèle voulu.</p>
            </div>
        </div>
        <div class="div_groupe_text_aide">
            <p class="petit_title_aide" >Comment acheter un véhicule neuf ?</p>
            <div class="div_txt_aide displayedNone" >
                <p class="txt_aide">- Cliquez sur le bouton "Configurer ce véhicule" en bas à gauche pour entamer le processus de configuration d'un véhicule neuf.</p>
                <hr>
                <p class="txt_aide">- Suivez le tutoriel relatif à cette page pour plus d'informations.</p>
            </div>
        </div>
        <div class="div_groupe_text_aide">
            <p class="petit_title_aide" >Comment réserver un essai ?</p>
            <div class="div_txt_aide displayedNone" >
                <p class="txt_aide">- Cliquez sur le bouton "Réserver un essai" en bas à droite pour réserver votre essai.</p>
                <hr>
                <p class="txt_aide">- Suivez le tutoriel relatif à cette page pour plus d'informations.</p>
            </div>
        </div>
        <div class="div_groupe_text_aide">
            <p class="petit_title_aide" >Comment accéder à la boutique ?</p>
            <div class="div_txt_aide displayedNone" >
                <p>- Vous pouvez cliquer sur le bouton <img alt="image de magasin" src="/images/logos/boutique.png" class="img_description_aide"></img> en haut du site.</p>
            </div>
        </div>
        <div class="div_groupe_text_aide">
            <p class="petit_title_aide" >Comment consulter mon panier ?</p>
            <div class="div_txt_aide displayedNone" >
                <p class="txt_aide">- Vous pouvez cliquer sur le bouton <img alt="image du caddie" src="/images/logos/caddie.png" class="img_description_aide"></img> en haut du site.</p>
            </div>
        </div>
        <div class="div_groupe_text_aide">
            <p class="petit_title_aide" >Comment paramètrer et/ou modifier des informations relatives à mon compte ?</p>
            <div class="div_txt_aide displayedNone" >
                <p class="txt_aide">- Vous pouvez accéder à ces paramètrages depuis la page "mon compte".</p>
                <hr>
                <p class="txt_aide">- Vous pouvez y accéder en cliquant sur le bouton <img src="/images/logos/logo_user.png" class="img_description_aide"></img> en haut du site.</p>
                <hr>
                <p class="txt_aide">- A noter : si vous n'êtes pas connecté, vous serez redirigé d'abord sur la page de connexion.</p>
            </div>
        </div>
        <div class="div_groupe_text_aide">
            <p class="petit_title_aide" >Comment consulter mes informations personnelles et/ou mes commandes ?</p>
            <div class="div_txt_aide displayedNone" >
                <p class="txt_aide">- Ces informations se trouvent sur la page "mon compte".</p>
                <hr>
                <p class="txt_aide">- Vous pouvez y accéder en cliquant sur le bouton <img src="/images/logos/logo_user.png" class="img_description_aide"></img> en haut du site.</p>
                <hr>
                <p class="txt_aide">- A noter : si vous n'êtes pas connecté, vous serez redirigé d'abord sur la page de connexion.</p>

            </div>
        </div>
        <div class="div_groupe_text_aide">
            <p class="petit_title_aide" >Comment fonctionne le système de paiement ?</p>
            <div class="div_txt_aide displayedNone" >
                <p class="txt_aide">- Nous utilisons le service Paypal pour que vos données bancaires soient sécurisées au mieux.</p>
                <hr>
                <p class="txt_aide">- Nous n'enregistrons pas vos données bancaires.</p>
                <hr>
                <p class="txt_aide">- Vous serez amené à faire un paiement lors d'un achat de véhicule neuf ou lors du paiement d'un panier.</p>

            </div>
        </div>
        <!-- <img class="img_aide"src="../images/configuration/modele-s/s-plaid/vue-devant.png" alt="configImg"> -->
    </div>
</div>
    




</div>
</body>
</html>    

<script src="../js/main.js"></script>
<script src="../js/aide.js"></script>
