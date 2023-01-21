<?php include '../public/php/header.php' ?>


    <div class="div_forgot_password">
        <h1>Vous avez oublié votre mot de passe ?</h1>
        <p>Veuillez saisir l'adresse mail avec laquel votre compte est associé.</p>
        <form method="POST" action="">
        @csrf
            <div>
                <input placholder="Votre Email :" class="input_forgot_email form-control @error('email') is-invalid @enderror" name="email" type="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="button_style_account">
                        {{ __('Valider') }}
                    </button>
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