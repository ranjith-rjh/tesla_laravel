<?php include '../public/php/header.php'?>

<div class="englobe">
    <div class="pageModele resized4">
        <div class="configuration_container">
            <div class="slider_container">
                <div class="centered">
                        <div class="div_title_bandeau_aide dpba_panier">
                            <h1>Configuration : Traction</h1>  
                            <div class="div_petit_bandeau_aide">?</div>
                        </div>
                    </div>    
                    <div class="configuration_choix_optionnel">
                        @if(count($choix_options_4) === 0 && count($choix_options_5) === 0 )
                            <p>Pas de traction possible pour cette configuration.</p>
                        @endif
                        @foreach($choix_options_4 as $option)
                            <p>{{$option->libelle}}</p>
                            <p class="" id="option_{{$option->libelle}}_{{$option->cout}}_{{$option->description}}_{{$option->choix_option_id}}_traction">{{$option->description}}</p>
                            @if ($option->cout !== "0" )
                                <p>-Coût : {{$option->cout}} €</p>
                                <a> test </a>
                            @else
                                <p>-De Serie</p>
                            @endif
                        @endforeach
                            
                        @foreach($choix_options_5 as $option)
                            <p>{{$option->libelle}}</p>
                            <p class="" id="option_{{$option->libelle}}_{{$option->cout}}_{{$option->description}}_{{$option->choix_option_id}}_traction">{{$option->description}}</p>
                            @if ($option->cout !== "0" )
                                <p>-Coût : {{$option->cout}} €</p>
                                <button id="btn_config_prendre_traction"> test </button>
                            @else
                                <p>-De Serie</p>
                            @endif
                        @endforeach
                        
                    </div>      
                    <div class="configuration_description_choix">
                        <div class="configuration_navigation">
                            <a href="//51.83.36.122:8245/modeles/{{str_replace(" ","%20", $modele)}}/motorisation/{{str_replace(" ","%20", $motorisation)}}/couleur/{{$couleur}}/jante/{{$jante}}/" class="btn_config_choisir">Précédent</a>
                            
                            @if(count($choix_options_4) === 0 && count($choix_options_5) === 0 )
                            <a href="//51.83.36.122:8245/modeles/{{str_replace(" ","%20", $modele)}}/motorisation/{{str_replace(" ","%20", $motorisation)}}/couleur/{{$couleur}}/jante/{{$jante}}/interieur/{{$interieur}}/resume" class="btn_config_choisir lien_suivant">Continuer</a>
                            @endif 
                            
                            @foreach($choix_options_4 as $option)
                            @if ($option->cout !== "0" )
                            <!-- hidden -->
                            <a  id="btn_config_suivant_no_traction" href="//51.83.36.122:8245/modeles/{{str_replace(" ","%20", $modele)}}/motorisation/{{str_replace(" ","%20", $motorisation)}}/couleur/{{$couleur}}/jante/{{$jante}}/interieur/{{$interieur}}/resume" class="btn_config_choisir lien_suivant">Valider sélection (sans l'option)</a>
                            @endif
                            <a id="btn_config_suivant_traction" href="//51.83.36.122:8245/modeles/{{str_replace(" ","%20", $modele)}}/motorisation/{{str_replace(" ","%20", $motorisation)}}/couleur/{{$couleur}}/jante/{{$jante}}/interieur/{{$interieur}}/traction/{{$option->choix_option_id}}/resume" class="btn_config_choisir">Valider sélection</a>
                            @endforeach
                            @foreach($choix_options_5 as $option)
                            @if ($option->cout !== "0" )
                            <!-- hidden -->
                            <a  id="btn_config_suivant_no_traction" href="//51.83.36.122:8245/modeles/{{str_replace(" ","%20", $modele)}}/motorisation/{{str_replace(" ","%20", $motorisation)}}/couleur/{{$couleur}}/jante/{{$jante}}/interieur/{{$interieur}}/resume" class="btn_config_choisir lien_suivant">Valider sélection (sans l'option)</a>
                            @endif
                            <a id="btn_config_suivant_traction" href="//51.83.36.122:8245/modeles/{{str_replace(" ","%20", $modele)}}/motorisation/{{str_replace(" ","%20", $motorisation)}}/couleur/{{$couleur}}/jante/{{$jante}}/interieur/{{$interieur}}/traction/{{$option->choix_option_id}}/resume" class="btn_config_choisir lien_suivant">Valider sélection</a>
                            @endforeach
                        </div>
                    </div>        
            </div>       
        </div>
    </div>
    <div class="div_bandeau_aide">
        <div class="div_bandeau_aide_content displayedNone">
            <h2 class="title_aide">Besoin d'aide ?</h2>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Configuration : ajouter une traction</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Ajoutez, si vous le souhaitez, une traction à votre véhicule.</p>
                    <hr>
                    <p class="txt_aide">- A Noter : En cas d'ajout, un prix supplémentaire sera appliqué au prix total.</p>
                    <hr>
                    <p class="txt_aide">- A Noter : "de série" siginifie que le véhicule arrive par défaut avec ce système de traction.</p>
                    <hr>
                    <p class="txt_aide">- Cliquez ensuite sur "Valider sélection" pour valider et passer à la suite.</p>
                </div>
            </div>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Je me suis trompé de couleur d'intérieur</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Cliquez sur "Précédent" pour revenir à l'étape précédente.</p>
                </div>
            </div>
            <!-- <img class="img_aide"src="../images/configuration/modele-s/s-plaid/vue-devant.png" alt="configImg"> -->
        </div>
    </div>
    <script src="/js/aide.js"></script>
    <script src="/js/traction.js"></script>

</body>
</html>
