 <?php 
    include '../public/php/header.php';
?>

<div class="englobe">
    <div class="div_page">
    <div class="centered">
        <div class="div_title_bandeau_aide dpba_panier">
            <h1 >Choisir le modèle :</h1>
            <div class="div_petit_bandeau_aide">?</div>
        </div>
    </div>  

        <div class="pageModele">
             <div class="configuration_container">
                <div class="slider_container">
                    <!-- Tous les sliders -->
                    <!-- Slider des motorisations -->
                    <div class="slider_container_display">
                        <div class="slider_display_info">
                            @foreach($motor as $motorisation)
                                @foreach($motorisation->photos as $maPhoto)
                                    <div class="slider_display_info_image">
                                        <img id="image_{{$motorisation->libelle}}" class="visible" src="{{$maPhoto->lien_photo}}" alt="{{$maPhoto->lien_photo}}">
                                    </div>
                                @endforeach 
                                <div id="caracteristique_{{$motorisation->libelle}}" class="slider_display_info_cara visible">
                                    <p class="slider_display_info_cara_modele">{{$motorisation->libelle}}</p>
                                    <br>
                                    <ul class="ul_cara">
                                        <li><h2 class="slider_display_info_cara_cat">Accélération (0-100km/h) :<br></h2>{{$motorisation->acceleration}} s</li>
                                        <li><h2 class="slider_display_info_cara_cat">Vitesse max :<br></h2> {{$motorisation->vitesse_max}} km/h</li>
                                        <li><h2 class="slider_display_info_cara_cat">Autonomie :<br></h2> {{$motorisation->autonomie}} km</li>
                                        <li><h2 class="slider_display_info_cara_cat">Motopropulseur :<br></h2> {{$motorisation->motopropulseur}}</li>
                                        <li><h2 class="slider_display_info_cara_cat">Prix :<br></h2> {{number_format($motorisation->prix, 2, ',', ' ')}} €</li>
                                    </ul>
        
                                    <!-- <div class="slider_display_info_but">
                                            <a class="slider_display_info_but_choisir" href="//51.83.36.122:8245/modeles/{{str_replace(" ","%20", $libelle_model)}}/motorisation/{{str_replace(" ","%20", $motorisation->id)}}/"><span>Continuer</span></a>
                                    </div> -->
                                    <button id="button_config_continuer">
                                        <a href="//51.83.36.122:8245/modeles/{{str_replace(" ","%20", $libelle_model)}}/motorisation/{{str_replace(" ","%20", $motorisation->id)}}/">Continuer</a>
                                    </button>
                                </div>
                            @endforeach
                            
                        </div>
                        <div class="slider_display_button">
                            @foreach ($motor as $motorisation)
                                <button class="button_config" id="button_{{$motorisation->libelle}}">{{$motorisation->libelle}}</button>
                            @endforeach 
                        </div>
                        
                    </div>
        
        
                    <!-- Sliders des options -->
                    
                </div>
                
             </div>
        
         </div>
    </div>
    
<div class="div_bandeau_aide">
        <div class="div_bandeau_aide_content displayedNone">
            <h2 class="title_aide">Besoin d'aide ?</h2>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Configuration : choisir une motorisation</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Comparez les différentes motorisations disponilbles, et choisissez-en une.</p>
                    <hr>
                    <p class="txt_aide">- A Noter : Les caractéristiques et le prix varient en fonction de la motorisation choisie.</p>
                    <hr>
                    <p class="txt_aide">- Cliquez ensuite sur "Continuer" pour valider et passer à la suite de la configuration.</p>
                </div>
            </div>
            <!-- <img class="img_aide"src="../images/configuration/modele-s/s-plaid/vue-devant.png" alt="configImg"> -->
        </div>
    </div>
    <script src="../js/aide.js"></script>

</div>
    
    <script src="../js/config.js"></script>
    <script src="../js/modele.js"></script>
</body>
</html>
