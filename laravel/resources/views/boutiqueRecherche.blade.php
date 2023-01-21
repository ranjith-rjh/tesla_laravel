<?php include '../public/php/header.php'?>

@include('boutique')

<div class="englobe">

    <div class="content_shop_accessoire resized1">
        
        <p>Resultat pour la recherche "{{$_POST['term']}}"</p>
        
        @if (count($accessoires) == 0)
        <br>
            <p>Pas de résultat pour votre recherche.</p>
        @endif
        <div class="container_accessoires">
            @foreach ($accessoires as $un_accessoire)
            <a href="boutique/search/{{$un_accessoire->id}}" class="accessoire_presentation">
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
                <p class="petit_title_aide" >Je ne trouve pas mon article / il n'y a plus de stock</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Le problème peut provenir de votre recherche.<br>=>Vérifiez la syntaxe et réessayez.</p>
                    <hr>
                    <p class="txt_aide">-Certains articles sont en rupture de stock ou ne sont pas encore disponibles.</p>
                    <hr>
                    <p class="txt_aide">- Nous vous invitons à revenir ultérieurement.</p>
                </div>
            </div>
            <!-- <img class="img_aide"src="../images/configuration/modele-s/s-plaid/vue-devant.png" alt="configImg"> -->
        </div>
    </div>
    <script src="../../js/aide.js"></script>
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