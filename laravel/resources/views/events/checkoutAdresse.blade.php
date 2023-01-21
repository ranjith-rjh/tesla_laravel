<?php include '../public/php/header.php' ?>

    <div class="englobe">
        <div class="form_account resized1">   
            <div class="div_title_bandeau_aide">
                <h1>Informations de livraison</h1>
                <div class="div_petit_bandeau_aide dpba_panier">?</div>
            </div>
            
            @if (isset($idVehicule))
                <form method="POST" action="/{{$idVehicule}}/checkout/adresse">
            @else
                <form method="POST" action="/panier/adresse">
            @endif
                    @csrf
                    
                    <h3 class="titleAddress" >Entrez l'adresse de livraison :</h3>
                    <div>
                    @if (auth()->user()->adresse == null)
                        <input class="input_form_account" maxlength="120"  id="input"/>
                    @else
                        <input value="{{$adresseComplete}}" class="input_form_account" maxlength="120"  id="input" />
                    @endif
                        <div id="toWriteAddresses">

                        </div>
                    </div>

                    <hr class="titleAddress" >
                    <h3 class="titleAddress" >Informations précises:</h3>
                    
                    <div>
                        <label class="label_form_account" for="rue">{{ __('Rue :') }}</label>
                        <div>
                            @if (auth()->user()->adresse == null)
                                <input class="input_form_account form-control @error('rue') is-invalid @enderror" maxlength="255" id="rue" type="rue" name="rue" required autocomplete="street-address" autofocus>
                            @else
                                <input value="{{auth()->user()->adresse->rue}}" class="input_form_account form-control @error('rue') is-invalid @enderror" maxlength="255" id="rue" type="rue" name="rue" required autocomplete="street-address" autofocus>
                            @endif
                            @error('rue')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label class="label_form_account" for="ville">{{ __('Ville :') }}</label>
                        <div>
                            @if (auth()->user()->adresse == null)
                                <input class="input_form_account form-control @error('ville') is-invalid @enderror" maxlength="255" id="ville" type="ville" name="ville" required autocomplete="address_level2" autofocus>
                            @else
                                <input value={{auth()->user()->adresse->ville}} class="input_form_account form-control @error('ville') is-invalid @enderror" maxlength="255" id="ville" type="ville" name="ville" required autocomplete="address_level2" autofocus>
                            @endif
                            @error('ville')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label class="label_form_account" for="codePostal">{{ __('Code postal :') }}</label>
                        <div>
                            @if (auth()->user()->adresse == null)
                                <input class="input_form_account form-control @error('codePostal') is-invalid @enderror" maxlength="5" id="codePostal" type="text" name="codePostal" required autocomplete="postal-code" autofocus>
                            @else
                                <input value={{auth()->user()->adresse->codePostal}} class="input_form_account form-control @error('codePostal') is-invalid @enderror" maxlength="5" id="codePostal" type="text" name="codePostal" required autocomplete="postal-code" autofocus>
                            @endif
                            @error('codePostal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label class="label_form_account" for="pays">{{ __('Pays :') }}</label>
                        <div>
                            @if (auth()->user()->adresse == null)
                                <input class="input_form_account form-control @error('pays') is-invalid @enderror" maxlength="255" id="pays" type="text" name="pays" autocomplete="country-name">
                            @else
                                <input value="{{auth()->user()->adresse->pays}}" class="input_form_account form-control @error('pays') is-invalid @enderror" maxlength="255" id="pays" type="text" name="pays" autocomplete="country-name">
                            @endif
                            @error('pays')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="display_flex_col">
                        <input class="button_style_edit" type="button" onclick=window.location.href='/'; value='Annuler' />

                        <button type="submit" class="button_style_edit">
                            {{ __('Enregistrer') }}
                        </button>
                        
                    </div>
                </form>
            
        </div>
        <div class="div_bandeau_aide">
            <div class="div_bandeau_aide_content displayedNone">
                <h2 class="title_aide">Besoin d'aide ?</h2>
                <div class="div_groupe_text_aide">
                    <p class="petit_title_aide" >Pourquoi dois-je saisir mon adresse ?</p>
                    <div class="div_txt_aide displayedNone" >
                        <p class="txt_aide">- Nous avons besoin de votre adresse pour pouvoir vous livrer votre commande.</p>
                    </div>
                </div>
                <div class="div_groupe_text_aide">
                    <p class="petit_title_aide" >Qui a accès à mon adresse ?</p>
                    <div class="div_txt_aide displayedNone" >
                        <p class="txt_aide">- Seulement le service de livraison a accès à votre adresse.</p>
                        <hr>
                        <p class="txt_aide">- Si vous voulez supprimer votre adresse de notre base de donnée, nous vous invitons à supprimer ou anonymiser votre compte (via la page "mon compte").</p>
                        <hr>
                        <p class="txt_aide">- Pour plus d'explications, nous vous invitons à lire notre page de <a class="txt_cliquable" href="/donnees-personnelles">politique des données personnelles</a></p>
                    </div>
                </div>
                <!-- <img class="img_aide"src="../images/configuration/modele-s/s-plaid/vue-devant.png" alt="configImg"> -->
            </div>
        </div>
        <script src="/js/aide.js"></script>
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
<script src="../../js/autocomplete.js"></script>
</html>
