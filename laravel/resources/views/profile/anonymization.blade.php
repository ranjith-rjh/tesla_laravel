<?php include '../public/php/header.php' ?>
<?php
    if (isset($_COOKIE["pageThemeActuel"])){
        setcookie("pageThemePrecedente",$_COOKIE["pageThemeActuel"]);
    }
    setcookie("pageThemeActuel","profil");
?>


    <div class="div_forgot_password">
        <h1>Souhaitez vous anonymiser votre compte ?</h1>
        <p>Si c'est le cas veuillez saisir votre mot de passe pour confirmer.</p>
        <p id="p_warning_info">Vous ne pourrez plus accéder à votre compte.</p>
        <form method="POST" action="{{ url('profile/anonymization') }}">
        @csrf
            <div>
                <input class="input_forgot_email form-control @error('password') is-invalid @enderror" name="password" id="password" type="password" placholder="Votre mot de passe..." required autocomplete="password" autofocus/>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div id="error_password">
                <span class="invalid-feedback" role="alert">
                    <strong>{{ session()->get('error') }}</strong>
                </span>
            </div>
            <input class="button_style_edit" type="button" onclick="window.location.href='/home';" value="Annuler">
            <button type="submit" class="button_style_edit">
                {{ __('Valider') }}
            </button>
        </form> 
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