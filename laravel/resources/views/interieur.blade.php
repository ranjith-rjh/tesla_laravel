<?php include '../public/php/header.php'?>

<div class="englobe">
    <div class="pageModele">
        <div class="configuration_container resized4">
            <div class="slider_container">
            <div class="centered">
                        <div class="div_title_bandeau_aide dpba_panier">
                            <h1>Configuration : Couleur de l'intérieur</h1>  
                            <div class="div_petit_bandeau_aide">?</div>
                        </div>
                    </div> 
                    <div class="configuration_choix">
                        @foreach($choix_options as $option)
                            <img src="{{$option->lien_photo}}" alt="{{$option->lien_photo}}" class="configuration_choix_cercle" id="option_{{$option->libelle}}_{{$option->cout}}_{{$option->description}}_{{$option->choix_option_id}}_interieur">
                            
                        @endforeach
                    </div>      
                    <div class="configuration_description_choix">
                        <div>
                            <p class="nom_option">{{$choix_options[0]->libelle}}</p>
                            <!-- if cout !== then cout else De serie -->
                            @if ($choix_options[0]->cout === "0") 
                            <p class="cout_option">De série</p>
                            @else 
                            <p class="cout_option">{{$choix_options[0]->cout}} €</p>
                            @endif
                            <p class="description_option">{{$choix_options[0]->description}}</p>
                        </div>
                        <a href="../../" class="btn_config_choisir">Précédent</a>
                        <a href="" class="btn_config_choisir lien_suivant">Choisir</a>
                    </div>        
            </div>       
        </div>
    </div>
    <div class="div_bandeau_aide">
    <div class="div_bandeau_aide_content displayedNone">
            <h2 class="title_aide">Besoin d'aide ?</h2>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Configuration : choisir une couleur d'intérieur</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Comparez les différentes couleurs d'intérieur et choisissez-en une. La couleur choisie est celle entourée par un cercle.</p>
                    <hr>
                    <p class="txt_aide">- A Noter : Le prix varie en fonction de la couleur choisie. Ce dernier sera ajouté au prix total.</p>
                    <hr>
                    <p class="txt_aide">- A Noter : "de série" est la configuration par défaut (pas de rajout de prix).</p>
                    <hr>
                    <p class="txt_aide">- Cliquez ensuite sur "Choisir" pour valider et passer à la suite.</p>
                </div>
            </div>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Je me suis trompé de jantes</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Cliquez sur "Précédent" pour revenir à l'étape précédente.</p>
                </div>
            </div>
        <!-- <img class="img_aide"src="../images/configuration/modele-s/s-plaid/vue-devant.png" alt="configImg"> -->
    </div>
</div>
<script src="/js/aide.js"></script>

    <script src="/js/option.js"></script>

</body>
</html>
