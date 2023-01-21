<?php include '../public/php/header.php' ?>

<div class="englobe">
    <div class="form_account resized1">
        <div class="div_title_bandeau_aide">
            <<h1>{{ __('Inscription') }}</h1>
            <div class="div_petit_bandeau_aide dpba_panier">?</div>
        </div>
        <div class="column_margined">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div>
                    <label class="label_form_account" for="nom">{{ __('Nom *') }}</label>
                    <div>
                        <input class="input_form_account form-control @error('nom') is-invalid @enderror" id="name" type="text" name="nom" value="{{ old('nom') }}" required autocomplete="family-name" autofocus>
                        @error('nom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label class="label_form_account" for="prenom">{{ __('Prénom *') }}</label>
                    <div>
                        <input class="input_form_account form-control @error('prenom') is-invalid @enderror" id="firstname" type="text" name="prenom" value="{{ old('prenom') }}" required autocomplete="given-name" autofocus>
                        @error('prenom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label class="label_form_account" for="secondPrenom">{{ __('Deuxième prénom') }}</label>
                    <div>
                        <input class="input_form_account form-control @error('secondPrenom') is-invalid @enderror" id="secondPrenom" type="text" name="secondPrenom" value="{{ old('secondPrenom') }}" autocomplete="additional-name">
                        @error('secondPrenom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label class="label_form_account" for="email">{{ __('Email *') }}</label>
                    <div>
                    <!-- pattern html) -->
                        <input class="input_form_account form-control @error('email') is-invalid @enderror @error('email') is-exist @enderror" 
                            id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>Cette adresse mail est déjà utilisée</strong>
                            </span>
                        @enderror  
                    </div>
                </div>

                <label class="label_check_account" >
                        {{ __('Type de compte * :') }}
                </label>
                <div class="type_create_account">
                    @foreach($typeAccount as $ta)
                    @if ($ta->id<=2)
                    <div>
                        <input class="input_check_account" type="radio" name="type_compte" id={{strtolower($ta->libelle)}} value={{$ta->libelle}}>

                        <label class="label_check_account" for={{$ta->libelle}}>
                            {{ $ta->libelle}}
                        </label>
                    </div>
                    @endif
                    @endforeach
                </div>

                <div id="register_business">
                    <div id="business_section">
                        <div>
                            <label class="label_form_account" for="nomentreprise">{{ __("Nom de l'entreprise *") }}</label>
                            <div>
                                <input class="input_form_account form-control @error('nomentreprise') is-invalid @enderror"
                                id="nomentreprise" type="text" name="nomentreprise" autocomplete="nomentreprise" required>
                                @error('nomentreprise')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label class="label_form_account" for="numerotva">{{ __("Numéro TVA *") }}</label>
                            <div>
                                <input class="input_form_account form-control @error('numerotva') is-invalid @enderror" 
                                id="numerotva" type="text" name="numerotva" autocomplete="numerotva" required
                                pattern="FR+[0-9]{11,}"
                                title="Doit être constitué de FR puis de 11 chiffres"
                                maxlength="13">
                                @error('numerotva')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="label_form_account" for="password">{{ __('Mot de passe *') }}</label>
                    <div>
                        <input class="input_form_account form-control @error('password') is-invalid @enderror" 
                            id="password" type="password" name="password" required autocomplete="new-password"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Doit contenir au minimum un chiffre, une minuscule, une majuscule et faire minimum 8 caractères">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>Les mots de passe ne correspondent pas!</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label class="label_form_account" for="password-confirm">{{ __('Confirmer le mot de passe *') }}</label>
                    <div>
                        <input class="input_form_account form-control" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <div>
                    <button type="submit" class="button_style_account">
                        {{ __('Créer un compte') }}
                    </button>
                </div>
            </form>
        </div>
        <h4 id="h4_connection_register">Vous avez déjà compte ?</h4>
        <div id="button_register">
            <input class=button_style_register type=button onclick=window.location.href='/login'; value='Connexion'/>
        </div>
    </div>
    <div class="div_bandeau_aide">
        <div class="div_bandeau_aide_content displayedNone">
            <h2 class="title_aide">Besoin d'aide ?</h2>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Comment seront traitées mes données ?</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Vos données vont être stockées dans notre base de données.</p>
                    <hr>
                    <p class="txt_aide">- Dès votre inscription, votre mot de passe est chiffré  par notre système de sécurité.</p>
                    <hr>
                    <p class="txt_aide">- Si vous souhaitez supprimer vos informations de notre système, vous pourrez supprimer ou anonymiser votre compte (via la page "mon compte").</p>
                    <hr>
                    <p class="txt_aide">- Pour plus d'explications, nous vous invitons à lire notre page de <a class="txt_cliquable" href="/donnees-personnelles">politique des données personnelles</a>.</p>
                </div>
            </div>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide">Mon adresse mail est déjà utilisée</p>
                <div class="div_txt_aide displayedNone">
                    <p class="txt_aide">- Vérifiez la bonne saisie de votre adresse mail.</p>
                    <hr>
                    <p class="txt_aide">- Il est possible que vous soyez déjà inscrit sur notre site : <a class="txt_cliquable" href="/login">Se connecter</a></p>
                    <hr>
                    <p class="txt_aide">Si le problème persiste, nous vous invitons à <a class="txt_cliquable" href="/contact">nous contacter</a>.</p>                
                </div>
            </div>
            <!-- <img class="img_aide"src="../images/configuration/modele-s/s-plaid/vue-devant.png" alt="configImg"> -->
        </div>
    </div>
    <script src="../js/aide.js"></script>
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
<script src="/js/compte.js"></script>
</html>