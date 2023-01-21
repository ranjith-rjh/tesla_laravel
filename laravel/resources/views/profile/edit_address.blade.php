<?php include '../public/php/header.php' ?>
<?php
    if (isset($_COOKIE["pageThemeActuel"])){
        setcookie("pageThemePrecedente",$_COOKIE["pageThemeActuel"]);
    }
    setcookie("pageThemeActuel","profil");
?>


    <div class="form_account">
        <h1>{{ __('Modifier mon adresse') }}</h1>
        <div class="column_margined">
            <form method="POST" action="/profile/address/{{$user->id}}">
                @csrf
                @method('PUT')
                
                <h3 class="titleAddress" >{{ __('Entrez votre adresse :') }}</h3>
                <div>
                    <input class="input_form_account" maxlength="120"  id="input" autofocus/>
                    <div id="toWriteAddresses">

                    </div>
                </div>

                <hr class="titleAddress" >
                <h3 class="titleAddress" >Informations précises:</h3>
                
                <div>
                    <label class="label_form_account" for="rue">{{ __('Rue : *') }}</label>
                    <div>
                        <input class="input_form_account form-control @error('rue') is-invalid @enderror" maxlength="255" id="rue" type="rue" name="rue" value="{{ old('rue') ?? $address->rue}}" required autocomplete="street-address" >
                        @error('rue')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div>
                    <label class="label_form_account" for="ville">{{ __('Ville : *') }}</label>
                    <div>
                        <input class="input_form_account form-control @error('ville') is-invalid @enderror" maxlength="255" id="ville" type="ville" name="ville" value="{{ old('ville') ?? $address->ville}}" required autocomplete="address_level2" autofocus>
                        @error('ville')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div>
                    <label class="label_form_account" for="codePostal">{{ __('Code postal : *') }}</label>
                    <div>
                        <input class="input_form_account form-control @error('codePostal') is-invalid @enderror" maxlength="5" id="codePostal" type="text" name="codePostal" value="{{ old('codePostal') ?? $address->codePostal}}" required autocomplete="postal-code" autofocus>
                        @error('codePostal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div>
                    <label class="label_form_account" for="pays">{{ __('Pays : *') }}</label>
                    <div>
                        <input class="input_form_account form-control @error('pays') is-invalid @enderror" maxlength="255" id="pays" type="text" name="pays" value="{{ old('pays') ?? $address->pays }}" autocomplete="country-name">
                        @error('pays')
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
                            <label class="label_form_account" for="nomentreprise">{{ __("Nom de l'entreprise") }}</label>
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
                            <label class="label_form_account" for="numerotva">{{ __("Numéro TVA") }}</label>
                            <div>
                                <input class="input_form_account form-control @error('numerotva') is-invalid @enderror" maxlength="255" id="numerotva" type="text" name="numerotva" value="{{ old('numerotva') ?? auth()->user()->numerotva}}" autocomplete="numerotva" required>
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
<script src="../js/autocomplete.js"></script>
</html>
