<?php include '../public/php/header.php'?>
<link rel="stylesheet" href="/css/shop.css">

@include('boutique')


<div class="englobe">
    <div class="content_shop_accessoire">
        <h1>Meilleurs ventes</h1>
        <div class="container_accessoires">
            @foreach ($meilleures_ventes_liste as $un_accessoire)
            
            <a href="./boutique/search/{{$un_accessoire->id}}" class="accessoire_presentation">
                <div class="accessoire_presentation_image">
                    
                    <img src="{{$un_accessoire->lien_photo}}"></img>
                </div>
                <div class="accessoire_presentation_libelle">
                    <p>{{$un_accessoire->libelle}}</p>
                </div>    
                <div class="accessoire_presentation_prix">
                    <p>{{$un_accessoire->prix}} €</p>
                </div>
            </a>
            
            @endforeach
        </div>
    </div>
    <div class="div_bandeau_aide">
        <div class="div_bandeau_aide_content displayedNone">
            <h2 class="title_aide">Besoin d'aide ?</h2>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Comment trouver un article ?</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Retrouvez nos accessoires en parcourant les catégories ou parmi nos meilleures ventes.</p>
                    <hr>
                    <p class="txt_aide">- Vous pouvez également effectuer une recherche à partir d'un mot clé, dans la barre prévue à cet effet (appuyez sur la touche "Entrée" pour valider).</p>
                </div>
            </div>
            <!-- <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Comment acheter des articles ?</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Cliquez sur l'article voulu. Choisissez le style ainsi que la quantité désirée.</p>
                    <hr>
                    <p>- Ajoutez le au panier en cliquant sur le bouton. Vous allez être redirigé vers le contenu de votre <a href="/panier" class="txt_cliquable">panier</a>.</p>
                    <hr>
                    <p class="txt_aide">- Cliquez sur ensuite sur "procéder au paiement". Si vous n'êtes pas connecté, vous allez être redirigé vers la page de connexion.</p>
                </div>
            </div>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >J'ai changé d'avis, comment modifier ?</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Rendez-vous sur votre <a href="/panier" class="txt_cliquable">panier</a> pour modifier la quantité.</p>
                    <hr>
                    <p class="txt_aide">- Cliquez sur le bouton supprimer, pour supprimer l'article de votre panier.</p>
                </div>
            </div> -->
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >J'ai ajouté un mauvais article au panier ou j'ai selectionné une mauvaise quantité.<br>Que faire ?</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Il est possible supprimer des articles de votre panier ou même modifier leurs quantité.</p>
                    <hr>
                    <p class="txt_aide">- Pour cela, rendez-vous sur votre <a href="/panier" class="txt_cliquable">panier</a>.</p>
                </div>
            </div>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Je ne trouve pas mon article / il n'y a plus de stock</p>
                <div class="div_txt_aide displayedNone" >
                
                    <p class="txt_aide">- Certains articles sont en rupture de stock ou ne sont pas encore disponibles.</p>
                    <hr>
                    <p class="txt_aide">- Nous vous invitons à revenir ultérieurement.</p>
                </div>
            </div>
            <!-- <img class="img_aide"src="../images/configuration/modele-s/s-plaid/vue-devant.png" alt="configImg"> -->
        </div>
    </div>
    <script src="../js/aide.js"></script>

</div>
</div>

<div>
    <img src="../../public/images/logos/loupe.png"></img>
</div>

<script src="/js/shop.js"></script>


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