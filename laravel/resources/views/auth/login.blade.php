<?php include '../public/php/header.php' ?>



    <div class="englobe">
        <div class="form_account resized1">
            <div class="div_title_bandeau_aide">
            <h1>{{ __('Connexion') }}</h1>
            <div class="div_petit_bandeau_aide dpba_panier">?</div>
            </div>
            <div class="display_connection_account">
                <div class="column_margined" id="div_connection_email">
                    <h4 class="h4_connection">Se connecter avec l'adresse Email</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <label class="label_form_account" for="email">{{ __('Email') }}</label>
                            <div>
                                <input class="input_form_account form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Le mail et le mot de passe ne correspondent pas!</strong>
                                    </span> 
                                    
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label class="label_form_account" for="password">{{ __('Mot de passe') }}</label>
                            <div>
                                <input class="input_form_account form-control @error('password') is-invalid @enderror" wid="password" type="password" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <input class="input_check_account" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="label_check_account" for="remember">
                                {{ __('Se souvenir de moi') }}
                            </label>
                        </div>

                        <div id="button_connection">
                            <button type="submit" class="button_style_account">
                                {{ __('Connexion') }}
                            </button>
                            <div class="display_flex_row" id="forgot_email_password">
                                @if (Route::has('password.request'))
                                    <a class="button_forgot" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
                <div id="div_connection_google_auth" class="column_margined">
                    <div class="column" id="div_conn_google">
                        <h3 class="h4_connection">Se connecter avec Google</h3>
                        <a href="{{ route('google-auth')}}">
                            <img class="google_img_co" src="../images/logos/Google_Logo.png" alt="Cliquer sur l'image pour se connecter">
                        </a>
                    </div>
                </div>
            </div>
            <h4 id="h4_connection_register">Pas encore de compte ?</h4>
            <div id="button_register">
                <input id="button_go_register_page" class=button_style_register type=button onclick=window.location.href='/register'; value='Créer un compte'/>
            </div>
        </div>
    <div class="div_bandeau_aide">
            <div class="div_bandeau_aide_content displayedNone">
                <h2 class="title_aide">Besoin d'aide ?</h2>
                <div class="div_groupe_text_aide">
                    <p class="petit_title_aide" >Pourquoi je n'arrive pas à me connecter ?</p>
                    <div class="div_txt_aide displayedNone" >
                        <p class="txt_aide">- Si vous n'avez pas encore de compte, cliquez ici :  <a class="txt_cliquable" href="/register">s'enregistrer</a></p>
                        <hr>
                        <p class="txt_aide">- Si vous avez oublié votre mot de passe, cliquez ici : <a class="txt_cliquable" href="/forgot-password">mot de passe oublié</a></p>
                        <hr>
                        <p class="txt_aide">- Vérifiez que l'adresse mail et le mot de passe saisis sont corrects.</p>
                        <hr>
                        <p class="txt_aide">- Si le problème persiste, je vous invite à <a class="txt_cliquable" href="/contact">nous contacter</a>.</p>
                    </div>
                </div>
                <div class="div_groupe_text_aide">
                    <p class="petit_title_aide">Pourquoi m'a-t-on redirigé ici ?</p>
                    <div class="div_txt_aide displayedNone">
                        <p class="txt_aide">- Pour réaliser certaines actions sur notre site, vous devez être connecté.
                            </p>
                            <hr>
                            <p class="txt_aide">- Si vous avez été redirigé ici, c'est qu'il faut vous connecter ou vous créer un compte.
                                </p>
                                <hr>
                        <p class="txt_aide">- Une fois connecté, vous serez de nouveau redirigé là où vous deviez être redirigé à l'origine (paiement, enregistrement de véhicule, ...).
                        </p>
                    </div>
                </div>
                <div class="div_groupe_text_aide">
                    <p class="petit_title_aide">Dois-je être déjà inscrit pour me connecter avec Google ?</p>
                    <div class="div_txt_aide displayedNone">
                        <p class="txt_aide">- Vous n'avez pas besoin d'être inscrit avec l'adresse mail de votre compte Google.</p>
                        <p class="txt_aide">- Vous serez automatiquement inscrit lors de votre première connexion.</p>
                    </div>
                </div>
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