<?php include '../public/php/header.php' ?>
<?php
    if (isset($_COOKIE["pageThemeActuel"])){
        setcookie("pageThemePrecedente",$_COOKIE["pageThemeActuel"]);
    }
    setcookie("pageThemeActuel","profil");
?>

    <div class="form_account">
        <h1>{{ __('Editer des informations') }}</h1>
        <div class="column_margined">
            <form method="POST" action="{{ route('user-profile-information.update') }}">
                @csrf
                @method('PUT')
                <div>
                    <label class="label_form_account" for="email">{{ __('Email *') }}</label>
                    <div>
                        <input class="input_form_account form-control @error('email') is-invalid @enderror @error('email') is-exist @enderror" maxlength="255" id="email" type="email" name="email" value="{{ old('email') ?? auth()->user()->email}}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>Cette adresse mail est déjà utilisée</strong>
                            </span>
                        @enderror  
                    </div>
                </div>
                <div>
                    <label class="label_form_account" for="nom">{{ __('Nom *') }}</label>
                    <div>
                        <input class="input_form_account form-control @error('nom') is-invalid @enderror" maxlength="255" id="nom" type="nom" name="nom" value="{{ old('nom') ?? auth()->user()->nom}}" required autocomplete="nom" autofocus>
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
                        <input class="input_form_account form-control @error('prenom') is-invalid @enderror" maxlength="255" id="prenom" type="text" name="prenom" value="{{ old('prenom') ?? auth()->user()->prenom}}" required autocomplete="prenom" autofocus>
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
                        <input class="input_form_account form-control @error('secondPrenom') is-invalid @enderror" maxlength="255" id="secondPrenom" type="text" name="secondPrenom" value="{{ old('secondPrenom') ?? auth()->user()->secondPrenom}}" autocomplete="secondPrenom">
                        @error('secondPrenom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label class="label_form_account" for="telephone">{{ __('N° téléphone') }}</label>
                    <div>
                        <input class="input_form_account form-control @error('telephone') is-invalid @enderror" maxlength="10" minlength="9" 
                        id="telephone" type="text" name="telephone" value="{{ old('telephone') ?? auth()->user()->telephone}}" autocomplete="telephone"
                        pattern="[0-9]{9,}"
                        title="Format: 0701020304">
                        @error('telephone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div id="register_business">
                    @if (auth()->user()->type_compte_id==2)
                    <div id="business_section">
                        <div>
                            <label class="label_form_account" for="nomentreprise">{{ __("Nom de l'entreprise *") }}</label>
                            <div>
                                <input class="input_form_account form-control @error('nomentreprise') is-invalid @enderror" maxlength="255" id="nomentreprise" type="text" name="nomentreprise" value="{{ old('nomentreprise') ?? auth()->user()->nomentreprise}}" autocomplete="nomentreprise" required>
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
                                <input class="input_form_account form-control @error('numerotva') is-invalid @enderror" id="numerotva" type="text" name="numerotva" value="{{ old('numerotva') ?? auth()->user()->numerotva}}" autocomplete="numerotva" required
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
                    @endif
                </div>
                <div class="display_flex_col">
                    <input class="button_style_edit" type="button" onclick=window.location.href='/home'; value='Annuler' />

                    <button type="submit" class="button_style_edit">
                        {{ __('Enregistrer') }}
                    </button>
                    
                </div>
            </form>
        </div>
    </div>
    </body>
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
</html>