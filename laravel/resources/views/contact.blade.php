<?php include '../public/php/header.php'?>

    <div id="div_form_personnal_data">
        <h4>Formulaire de demande :</h4>
        <form id="form_personnal_data" method="POST">
        @csrf
            <div class="div_personnal_data_input">
                <div class="undiv_div_personnal_data_input">
                    <label for="nom">Nom : *</label><br>
                    <input class="form-control @error('nom') is-invalid @enderror" type="text" name="nom" required autocomplete="family-name" autofocus>
                    @error('nom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="undiv_div_personnal_data_input">
                    <label for="prenom">Prénom : *</label><br>
                    <input class="form-control @error('prenom') is-invalid @enderror" type="text" name="prenom" required autocomplete="given-name" autofocus>
                    @error('prenom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="undiv_div_personnal_data_input">
                    <label for="email">Adresse mail : *</label><br>
                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" required autocomplete="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>Cette adresse mail est déjà utilisée</strong>
                        </span>
                    @enderror  
                </div>
            </div>
            <div id="div_message_sujet_demande">
                <div class="undiv_div_personnal_data_input">
                    <label for="type_sujet">Type de demande : *</label><br>
                    <select name="type_sujet">
                        <option value="Problème sur mon compte">Problème sur mon compte</option>
                        <option value="Problème sur ma livraison">Problème sur ma livraison</option>
                        <option value="Problème adresse mail">Problème avec mon adresse mail</option>
                        <option value="Problème de paiement">Problème de paiement</option>
                        <option value="Mes données personnelles">Mes données personnelles</option>                        
                        <option value="Autre">Autre</option>
                    </select>
                </div>
                <div class="undiv_div_personnal_data_input">
                    <label for="sujet">Sujet de votre demande :</label><br>
                    <input type="text" name="sujet" style="width:85%;">
                </div>
                <div class="undiv_div_personnal_data_input">
                    <label for="message">Expliquer votre demande : *</label><br>
                    <textarea type="text" name="message" required></textarea>
                </div>
            </div>
            <input class="button_style_account creation_vehicule_btn" type="submit" value="Envoyer">
            <div>
                @error('error')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
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