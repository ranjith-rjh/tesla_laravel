<?php include '../public/php/header.php' ?>
<?php
    if (isset($_COOKIE["pageThemeActuel"])){
        setcookie("pageThemePrecedente",$_COOKIE["pageThemeActuel"]);
    }
    setcookie("pageThemeActuel","profil");
?>


    <div class="form_account">
        <h1>{{ __('Ajouter mon adresse') }}</h1>
        <div class="column_margined">
            <form method="POST" action="/profile/address/create">
                @csrf
                

                <label class="label_form_account" for="input">{{ __('Entrez votre adresse :') }}</label>
                <div>
                    <input class="input_form_account" id="input" autofocus/>
                    <div id="toWriteAddresses">

                    </div>
                </div>

                <hr class="titleAddress" >
                <h3 class="titleAddress" >Informations précises:</h3>
                <hr class="titleAddress" >
                <div>
                    <label class="label_form_account" for="rue">{{ __('Rue : *') }}</label>
                    <div>
                        <input class="input_form_account form-control @error('rue') is-invalid @enderror" maxlength="255" id="rue" type="rue" name="rue" value="{{ old('rue')}}" required >
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
                        <input class="input_form_account form-control @error('ville') is-invalid @enderror" maxlength="255"id="ville" type="ville" name="ville" value="{{ old('ville') }}" required autofocus autocomplete="off" >
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
                        <input class="input_form_account form-control @error('codePostal') is-invalid @enderror" maxlength="5" id="codePostal" type="text" name="codePostal" value="{{ old('codePostal') }}" required autofocus
                        pattern="[0-9]{5}"
                        title="Exemple format: 74000">
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
                        <input class="input_form_account form-control @error('pays') is-invalid @enderror" maxlength="255" id="pays" type="text" name="pays" value="{{ old('pays') }}" >
                        @error('pays')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
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
</body>
 
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
<script src="../js/autocomplete.js"></script>
</html>
