<?php include '../public/php/header.php' ?>


<div class="englobe">
    <div class="div_forgot_password resized1">
    <div class="div_title_bandeau_aide">
        <h1 >Vous voulez réinitialiser votre mot de passe ?</h1>
            <div class="div_petit_bandeau_aide">?</div>
        </div>
        <div class="column_margined">
            <form method="POST" action="{{route('change-password')}}">
            @csrf

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @elseif (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
                <div>
                    <label class="label_form_account" for="old_password_input">{{ __('Mot de passe') }}</label>
                    <div>
                        <input name="old_password" id="old_password_input" type="password" class="input_form_account form-control @error('old_password') is-invalid @enderror">
                        @error('old_password')
                            <span class="danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label class="label_form_account" for="new-password-input">{{ __('Nouveau mot de passe') }}</label>
                    <div>
                        <input name="new_password" id="new-password-input" class="input_form_account form-control @error('new_password') is-invalid @enderror" type="password" 
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Doit contenir au minimum un chiffre, une minuscule, une majuscule et faire minimum 8 caractères">
                        @error('new_password')
                            <span class="danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label class="label_form_account" for="confirm_new_passwordinput">{{ __('Confirmer le nouveau mot de passe') }}</label>
                    <div>
                        <input name="new_password_confirmation" id="confirm_new_password_input" class="input_form_account form-control" type="password">
                    </div>
                </div>

                <button type="submit" class="button_style_account">
                    {{ __('Valider') }}
                </button>
            </form>
        </div>
        <input class="button_style_edit" type="button" onclick=window.location.href='/home'; value='Retour' />
    </div>
    <div class="div_bandeau_aide">
        <div class="div_bandeau_aide_content displayedNone">
            <h2 class="title_aide">Besoin d'aide ?</h2>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Comment acheter des articles ?</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Ajoutez les articles souhaités depuis la <a class="txt_cliquable" href="/boutique">BOUTIQUE</a></p>
                    <hr>
                    <p class="txt_aide">- Supprimez les articles non désirés en cliquant sur "supprimer".</p>
                    <hr>
                    <p class="txt_aide">- Modifiez la quantité de chaque article si besoin.</p>
                    <hr>
                    <p class="txt_aide">- Cliquez sur "procéder au paiement". Si vous n'êtes pas connectés, vous serez redirigé vers la page de connexion.</p>
                    <hr>
                    <p class="txt_aide">- Une fois connecté, vous serez redirigé sur la page de livraison puis sur celle du paiement.</p>
                </div>
            </div>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide">Comment utiliser un code promo ?</p>
                <div class="div_txt_aide displayedNone">
                    <p class="txt_aide">- Rentrez le code promo dans la zone prévue à cet effet puis valider.</p>
                    <hr>
                    <p class="txt_aide">- Si le code est valide, nous appliquons une promotion de x euros pour chaque article concerné dans le panier.</p>
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
</html>