<?php 
    include '../public/php/header.php';
?>


    <div class="englobe">
            <div id="reservation_page">
                <div class="div_title_bandeau_aide">
                    <h1>Réservation d'un essai</h1>
                    <div class="div_petit_bandeau_aide">?</div>
                </div>
                <br>
                <div class="reservation_container">
                    <div class="res_vehicule">
                        <img src="../images/configuration/modele-3/base/vue-devant.png">
                        @foreach($posts_modeles as $post)
                            @if ($post->id==2)
                                <div class="res_main_informations"><h3>{{$post->libelle}}</h3></div>
                                <div class="res_main_informations"><p>Vitesse max : {{$posts_motors[$post->id - 1]->vitesse_max}} km/h</p></div>
                                <div class="res_main_informations"><p>0-100 km/h : {{$posts_motors[$post->id - 1]->acceleration}} s</p></div>
                                <div class="res_main_informations"><p>Autonomie  : {{$posts_motors[$post->id - 1]->autonomie}} km</p></div>
                            @endif
                        @endforeach
                    </div>
                    <div class="res_vehicule">
                        <img src="../images/configuration/modele-y/base/vue-devant.png">
                        @foreach($posts_modeles as $post)
                            @if ($post->id==4)
                                <div class="res_main_informations">
                                    <h3>{{$post->libelle}}</h3>
                                    <p>Vitesse max : {{$posts_motors[$post->id - 1]->vitesse_max}} km/h</p>
                                    <p>0-100 km/h : {{$posts_motors[$post->id - 1]->acceleration}} s</p>
                                    <p>Autonomie  : {{$posts_motors[$post->id - 1]->autonomie}} km</p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <br>
                <div id="reservation">
                    <div>
                        <form action="{{ url('/reservation')}}" method="POST" id="reservation_form">
                        @csrf
                            <label>Heure :</label>
                            <input type="number" name="hour" id="hour" min="8" max="17" value="8">
                            <label> et date de l'essai :</label>
                            <input type="date" name="date" id="date" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>">
                            <label>avec un </label>
                            <select name="car" id="car">
                                @foreach($posts_modeles as $post)
                                    @if ($post->id==2)
                                        <option value="{{ $post->id }}">{{$post->libelle}}</option>
                                    @endif
                                @endforeach
                                @foreach($posts_modeles as $post)
                                    @if ($post->id==4)
                                        <option value="{{ $post->id }}">{{$post->libelle}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <br>
                            <div>
                                <span class="invalid-feedback" style="display:block;" role="alert">
                                    <strong>{{ session()->get('error') }}</strong>
                                </span>
                            </div>
                            <input class="res_button_submit" type="submit" id="submit" value="Réserver">
                        </form>
                    </div>
                </div>
            </div>
            <div class="div_bandeau_aide">
            <div class="div_bandeau_aide_content displayedNone">
                <h2 class="title_aide">Besoin d'aide ?</h2>
                <div class="div_groupe_text_aide">
                    <p class="petit_title_aide" >Comment prendre rendez-vous pour un essai ?</p>
                    <div class="div_txt_aide displayedNone" >
                        <p class="txt_aide">- Sélectionnez l'heure et la date de l'essai ainsi que le modèle voulu.</p>
                        <hr>
                        <p class="txt_aide">- Cliquez ensuite sur "Réserver". Si vous n'êtes pas connecté, vous allez être redirigé vers la page de connexion.</p>
                    </div>
                </div>
                <div class="div_groupe_text_aide">
                    <p class="petit_title_aide">Pourquoi y a-t-il seulement 2 modèles ?</p>
                    <div class="div_txt_aide displayedNone">
                        <p class="txt_aide">Nous proposons en essai, seulement les modèles les plus vendus.</p>
                    </div>
                </div>
                <!-- <img class="img_aide"src="../images/configuration/modele-s/s-plaid/vue-devant.png" alt="configImg"> -->
            </div>
        </div>
        <script src="../js/aide.js"></script>
    </div>    
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
