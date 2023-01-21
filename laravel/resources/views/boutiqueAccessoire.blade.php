<?php include '../public/php/header.php'?>

<?php
    foreach($mes_styles as $style){
        setcookie("stock".$style->id, $style->stock);
    }
    ?>


@include('boutique')

<div class="englobe margined14">
    <div class="page_accessoire">
        
        <div class="flex_accessoire">
            
            <div class="description_shop_accessoire">
                
                <h2>{{$mon_accessoire->libelle}}</h2>
            
                <span>{{$mon_accessoire->description}}</span>
                <br>
                <span>{{$mon_accessoire->prix}} €</span>
                
            </div>
            
            <form method="POST" action="" class="commande_accessoire">
                {{ csrf_field() }}
                <input type="number" value="1" min="1" id="input_commander_accessoire">Quantité</input>
                <button type="submit" class="" id="button_commander_accessoire">+ Ajouter au panier</button>
            </form>
            
        </div>
        <div class="couleur_image_de_merde">
            <div class="styles_selector">
                <?php
                    $nombre_photo = count($photos_accessoire);
                    $nombre_style = count($mes_styles);
                    
                    for($i = 0; $i<$nombre_style; $i++){
                        ${"list_photo".$i} = $photos_accessoire->splice(0,$nombre_photo/$nombre_style);
                        
                ?>
                        <img id="style_id_{{${"list_photo".$i}[0]->style_id}}" class="style_option" src="{{${"list_photo".$i}[0]->lien_photo}}"></img>
                        
                        
                        <br>
                        
                <?php
                    }
            
                ?>
        
        
            </div>
    <div class="styles_images_slide">
        @for($i=0;$i<$nombre_style;$i++)
        <div class="visible">
            @for ($j=1; $j<($nombre_photo/$nombre_style);$j++)
            <img class="images_slide_{{$i}}" src="{{${"list_photo".$i}[$j]->lien_photo}}"></img>
            @endfor
        </div>
        @endfor 
    </div>
</div>
</div>
<div class="div_bandeau_aide">
        <div class="div_bandeau_aide_content displayedNone">
            <h2 class="title_aide">Besoin d'aide ?</h2>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Le produit n'est plus disponible </p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Malheureusement, votre produit est en rupture de stock</p>
                    <hr>
                    <p class="txt_aide">- Nous vous invitons à revenir ultérieurement.</p>
                    <hr>
                    <p class="txt_aide">- Nous effectuons des réaprovisionnements régulièrement.</p>
                </div>
            </div>
            <!-- <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Comment voir d'autres articles ?</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Retrouvez nos accessoires en parcourant les catégories ou parmi les meilleurs ventes.</p>
                    <hr>
                    <p class="txt_aide">- Vous pouvez également rechercher à partir d'un mot clé, dans la barre prévue à cet effet.</p>
                </div>
            </div> -->
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Comment changer de style/couleur ?</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Cliquez sur le style souhaité (en bas à gauche). Le style choisi est entouré par un cercle noir.</p>
                    <hr>
                    <p>- A Noter : Seuls certains articles ont plusieurs styles.</p>
                </div>
            </div>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Comment changer la quantité ?</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Saisissez la quantité désirée dans la barre prévue à cet effet.</p>
                    <hr>
                    <p>- A Noter : Les quantités choisies sont limitées aux stocks disponibles.</p>
                </div>
            </div>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Comment directement payer mon article ?</p>
                <div class="div_txt_aide displayedNone" >
                    <p>- Cliquez sur le bouton "Ajouter au panier". Vous allez être redirigé vers le contenu de votre <a href="/panier" class="txt_cliquable">panier</a>.</p>
                    <hr>
                    <p class="txt_aide">- Une fois sur votre panier, cliquez sur "procéder au paiement".</p>
                </div>
            </div>
            <!-- <img class="img_aide"src="../images/configuration/modele-s/s-plaid/vue-devant.png" alt="configImg"> -->
        </div>
    </div>
    <script src="../../js/aide.js"></script>

</div>

    
    
    
    
<script src="/js/accessoire.js"></script>
    


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