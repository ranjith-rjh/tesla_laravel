<?php include '../public/php/header.php'?>



    <div class="div_2fa ">
        <h1 class="">Confirmer le mot de passe : </h1>
        <div class="column_margined test">
            <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf
                <div class="div_into_div_2fa">
                        <p>Merci de confirmer votre mot de passe avant de continuer.</p>


                            <div class="div_into_form_2fa">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Mot de passe :</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <br>
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Mot de passe incorrect</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                <input class="button_style_register btn_2fa"  type=button onclick=window.location.href='/login'; value='Annuler'/>
                                <button type="submit" class="button_style_register btn_2fa">
                                    Confirmer
                                </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
</html>