<?php include '../public/php/header.php'?>


<div class="englobe">
    <div class="div_2fa resized1">
        <div class="div_title_bandeau_aide">
            <h1 >Défi de double authentification :</h1>
            <div class="div_petit_bandeau_aide">?</div>
        </div>
        <div class="column_margined test">
            <form method="POST" action="{{ route('two-factor.login') }}">
                    @csrf
                <div class="div_into_div_2fa">
                    <p>
                        Merci d'entrer le code envoyé par SMS 
                        @if(isset($phone))
                            au {{$phone}}
                        @endif
                    </p> 
                    <div class="div_into_form_2fa">
                        <label for="code" class="col-md-4 col-form-label text-md-end">Code :</label>

                        <div class="col-md-6">
                            <input id="code" type="code" class="form-control @error('code') is-invalid @enderror" name="code" required autocomplete="current-password">

                            @error('code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Code incorrect</strong>
                                </span>
                            @enderror
                            @if (isset($erreur))
                                <p class="p_erreur_mauvais_code">{{$erreur}}</p>
                            @endif  
                            @if (isset($erreur_envoi))
                                <p class="p_erreur_mauvais_code">Erreur lors de l'envoi du message</p>
                            @endif  
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div>
                            <input class="button_style_register btn_2fa"  type=button onclick=window.location.href='/login'; value='Annuler'/>
                            <button type="submit" class="button_style_register btn_2fa">
                                Confirmer
                            </button>


                        </div>
                    </div>
                    </div>
                </form>
        </div>
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