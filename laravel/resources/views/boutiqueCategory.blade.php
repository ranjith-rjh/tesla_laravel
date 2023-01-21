<?php include '../public/php/header.php'?>
@include('boutique')

<div class="englobe">
<div class="content_shop_accessoire resized1">

    <h1>{{$categorie_parent->libelle}}</h1>
   
    <div>
        @if(count($sub_categories)==0)
        <div class="container_accessoires">
            @foreach ($accessoires as $un_accessoire)
                    @if($un_accessoire->categorie_accessoire_id == $categorie_parent->id)
                        <div class="accessoire_presentation">
                            <div class="accessoire_presentation_image">
                            
                                <img src="{{$un_accessoire->lien_photo}}"></img>
                            </div>
                            <div class="accessoire_presentation_libelle">
                                <a href="./{{$un_accessoire->id}}">{{$un_accessoire->libelle}}</a>
                            </div>    
                            <div class="accessoire_presentation_prix">
                                <a href="./{{$un_accessoire->id}}">{{$un_accessoire->prix}} €</a>
                            </div>
                        </div>
                    @endif
            @endforeach
        </div>
        @else
            @foreach ($sub_categories as $sub_categorie)
            <div id="{{str_replace(" ","-",$sub_categorie->libelle)}}" class="title_accessoires">
                <h2>{{$sub_categorie->libelle}}</h2>
                
                @if($sub_categorie->libelle == "Meilleures Ventes")
                <div class="container_accessoires">
                    @foreach ($accessoires as $un_accessoire)
                        @if($un_accessoire->meilleure_vente)
                        
                        
                        <a href="./{{$un_accessoire->id}}" class="accessoire_presentation">
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
                        @endif
                    @endforeach
                </div>
                @else
                <div class="container_accessoires">
                    @foreach ($accessoires as $un_accessoire)
                        @if($un_accessoire->categorie_accessoire_id == $sub_categorie->id)
                        <a href="./{{$un_accessoire->id}}" class="accessoire_presentation">
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
                        @endif
                    @endforeach
                </div>
                    @endif
            </div>
            @endforeach
        @endif

    </div>
</div>

<div class="div_bandeau_aide">
        <div class="div_bandeau_aide_content displayedNone">
            <h2 class="title_aide">Besoin d'aide ?</h2>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Où trouver les articles ?</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Retrouvez nos accessoires en parcourant les catégories ou parmi nos meilleures ventes.</p>
                    <hr>
                    <p class="txt_aide">- Vous pouvez également rechercher à partir d'un mot clé, dans la barre prévue à cet effet.</p>
                </div>
            </div>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Comment acheter des articles ?</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Cliquez sur l'article voulu. Choisissez le style ainsi que la quantité désirée.</p>
                    <hr>
                    <p>- Ajoutez-le au panier en cliquant sur le bouton. Vous allez être redirigé vers le contenu de votre <a href="/panier" class="txt_cliquable">panier</a>.</p>
                    <hr>
                    <p class="txt_aide">- Cliquez ensuite sur "procéder au paiement". Si vous n'êtes pas connecté, vous allez être redirigé vers la page de connexion.</p>
                </div>
            </div>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >J'ai changé d'avis, comment modifier ?</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Rendez-vous sur votre <a href="/panier" class="txt_cliquable">panier</a> pour modifier la quantité.</p>
                    <hr>
                    <p class="txt_aide">- Cliquez sur le bouton supprimer, pour supprimer l'article de votre panier.</p>
                </div>
            </div>
            <!-- <img class="img_aide"src="../images/configuration/modele-s/s-plaid/vue-devant.png" alt="configImg"> -->
        </div>
    </div>
    <script src="../../js/aide.js"></script>
</div>
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