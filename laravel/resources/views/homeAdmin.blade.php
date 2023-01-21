<?php include '../public/php/header.php' ?>


    @if($bool_facture_home == TRUE)
        @foreach($allFactureUser as $facture)
            <?php
            $create_date=$facture->created_at;
            $year=substr($create_date, 0, 4);
            $month=substr($create_date, 5, 2);
            $day=substr($create_date, 8, 2);
            $etatcommande="En cours de livraison";
            if ($facture->etat_commande_id==2)
                $etatcommande="Livrée"
            ?>
            <div id="commande_{{$facture->id}}" class="display_detail_commande visible">
                <div class="cross_out_detail">X</div>
                <div class="display_detail_commande_info">
                    <h4 style="text-decoration:underline; font-weight:bolder; margin-bottom: 10px;">Commande N°{{$facture->id}}</h4>
                    <hr>
                    <h5>Information de livraison :</h5>
                    <div class="div_information_commande">
                        <div class="undiv_div_information_commande">
                            <h6>Au nom de :</h6>
                            <hr>
                            <p>{{$myUser->prenom}} @isset($myUser->secondPrenom) {{$myUser->secondPrenom}} @endisset {{$myUser->nom}}</p>
                        </div>
                        <div class="undiv_div_information_commande">
                            <h6>E-mail :</h6>
                            <hr>
                            <p>{{$myUser->email}}</p>
                        </div>
                        <div class="undiv_div_information_commande">
                            <h6>Numéro de Téléphone :</h6>
                            <hr>
                            @if ($myUser->telephone==NULL)
                                <div id="display_inline">
                                    <input class="account_add_info_commande" type=button value='non renseigné'/><p></p>
                                </div>
                            @else
                                <p>{{$myUser->telephone}}</p>
                            @endif
                        </div>
                        <div class="undiv_div_information_commande">
                            <h6>Date de commande :</h6>
                            <hr>
                            <p><?php echo $day."/".$month."/".$year ?></p>
                        </div>
                    </div>
                    <div class="div_information_commande">
                        <div class="undiv_div_information_commande" style="margin-bottom:15px;">
                            <h6>Livrée à : </h6>
                            <hr>
                            <p>{{$facture->adresse->rue}}, {{$facture->adresse->codePostal}} {{$facture->adresse->ville}}, {{$facture->adresse->pays}} </p>
                        </div>
                        <div class="undiv_div_information_commande" style="margin-bottom:15px;">
                            <h6>Date de livraison : </h6>
                            <hr>
                            @if($facture->etat_commande_id===1)
                                <p>Pas encore déterminé mais très prochainement</p>
                            @else
                                <p><?php echo $day."/".$month."/".$year ?></p>
                            @endif
                        </div>
                    </div>
                    <hr>
                    @if($facture->panier_id == NULL)
                    <h5>Détail de la commande :</h5>
                    <div class="div_information_commande">
                        <div class="undiv_div_information_commande">
                            <h6>Modèle :</h6>
                            <hr>
                            <p>{{$facture->vehicule->modele->libelle}}</p>
                        </div>
                        <div class="undiv_div_information_commande">
                            <h6>Motorisation :</h6>
                            <hr>
                            <p>{{$facture->vehicule->motorisation->libelle}}</p>
                        </div>
                        <div class="undiv_div_information_commande">
                            <h6>Prix :</h6>
                            <hr>
                            <p>{{$facture->cout}} €</p>
                        </div>
                        <div class="undiv_div_information_commande">
                            <h6>Classe Energetique :</h6>
                            <hr>
                            <p>{{$facture->vehicule->motorisation->classe_energetique->libelle}}</p>
                        </div>
                    </div>
                    <div class="div_information_commande">
                        <div class="undiv_div_information_commande">
                            <h6>Choix options :</h6>
                            <hr>
                            <ul>
                                @foreach($facture->vehicule->choix_options as $choix)
                                    @if($choix->libelle == NULL)
                                        <li>{{$choix->description}}</li>
                                    @else
                                        <li>{{$choix->libelle}} cout : {{$choix->cout}}</li>
                                    @endif
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        @endforeach
    @endif

    <div class="account_infos">
        <div class="account_container">
            <div class="account_options">
                <div class="button_account_option button_account_select" id="button_option_info" onclick="changeClassB1()">Informations Personnelles</div>
                <div class="button_account_option" id="button_option_commandes" onclick="changeClassB2()">Mes commandes</div>
                <div class="button_account_option" id="button_option_paiement" onclick="changeClassB3()">Mode de paiement</div>
            </div>
            <hr id="hr_account">
            <div class="display_account_option" id="div_account_option_infos">
                <div id="display_account_section" class="display_flex_row">
                    <div id="display_account_info" class="display_account_block">
                        <h4 class="home_title_boxes">Informations Personnelles</h4>
                        <hr>
                        <div class="display_block_set_height">
                            <div>
                                <h4>Nom complet :</h4>
                                <p>{{$myUser->prenom}} @isset($myUser->secondPrenom) {{$myUser->secondPrenom}} @endisset {{$myUser->nom}}</p>
                            </div>
                            <div>
                                <h4>E-mail :</h4>
                                <p>{{$myUser->email}}</p>
                            </div>
                                <div>
                                    <h4>Numéro de Téléphone :</h4>
                                    @if ($myUser->telephone==NULL)
                                        <div id="display_inline">
                                            <p class="account_add_info" type=button value='non renseigné'></p>
                                        </div>
                                    @else
                                        <p>{{$myUser->telephone}}</p>
                                    @endif
                                </div>
                            @if ($myUser->type_compte_id==2)
                                <div>
                                    <h4>Nom de l'entreprise :</h4>
                                    <p>{{$myUser->nomentreprise}}</p>
                                </div>
                                <div>
                                    <h4>Numéro TVA :</h4>
                                    <p>{{$myUser->numerotva}}</p>
                                </div>
                            @endif
                        </div>
                        <hr>
                        <div class="div_center_button_modify">
                            <input id="button_modify_info" class=button_style_register type=button onclick=window.location.href='/profile/edit'; value='Modifier mes informations personnelles'/>
                        </div>
                    </div>
                    <div id="display_account_address" class="display_account_block">
                        <h4 class="home_title_boxes">Adresse</h4>
                        <hr>
                        <div class="display_block_set_height">
                            <div>
                                <h4>Rue :</h4>
                                @if ($myUser->adresse_id==NULL)
                                    <input class="account_add_info" type=button value='non renseigné'/><p></p>
                                @else
                                    <p>{{$myUser->adresse->rue}}</p>
                                @endif
                            </div>
                            <div>
                                <h4>Code Postal :</h4>
                                @if ($myUser->adresse_id==NULL)
                                    <input class="account_add_info" type=button value='non renseigné'/><p></p>
                                @else
                                    <p>{{$myUser->adresse->codePostal}}</p>
                                @endif
                            </div>
                            <div>
                                <h4>Ville :</h4>
                                @if ($myUser->adresse_id==NULL)
                                    <input class="account_add_info" type=button value='non renseigné'/><p></p>
                                @else
                                    <p>{{$myUser->adresse->ville}}</p>
                                @endif
                            </div>
                            <div>
                                <h4>Pays :</h4>
                                @if ($myUser->adresse_id==NULL)
                                    <input class="account_add_info" type=button value='non renseigné'/><p></p>
                                @else
                                    <p>{{$myUser->adresse->pays}}</p>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="div_center_button_modify">
                            <input id="button_modify_info" class=button_style_register type=button onclick=window.location.href='/profile/address'; value='Ajouter / modifier mon adresse'/>
                        </div>
                    </div>
                    <div id="display_account_address" class="display_account_block">
                        <h4 class="home_title_boxes">Mot de Passe</h4>
                        <hr>
                        <div class="display_block_set_height">
                            <div>
                                <h4>Mot de passe :</h4>
                                <p>********</p>
                            </div>
                            <div>
                                <h4>Double authentification :</h4>
                                <form method="POST" action="/user/two-factor-authentication">
                                    @csrf
                                    @if (auth()->user()->two_factor_secret)
                                        @method('DELETE')
                                        <p>La double authentification est activée</p>
                                        <br>
                                        <button class="button_style_register red">
                                            Désactiver
                                        </button>
                                    @else
                                        <p>La double authentification est désactivée</p>
                                        <br>
                                        <button class="button_style_register green">
                                            Activer
                                        </button>
                                        @if (session('erreur_2fa'))
                                            <br>
                                            <p>Pour activer l'A2F, vous devez d'abord ajouter votre numéro de téléphone!</p>
                                        @endif
                                    @endif

                                </form>
                                <!-- <p>if active afficher active</p>
                                <p>if inactive afficher button 'activate'</p> -->
                            </div>
                        </div>
                        <hr>
                        <div class="div_center_button_modify">
                            <input id="button_modify_info_password" class=button_style_register type=button; value='Modifier mot de passe'/>
                        </div>
                    </div>
                </div>
                
                <div id="display_commandes" class="hidden">
                    <h3>Mes Commandes</h3>
                    @if ($bool_facture_home == FALSE)
                        <br>
                        <p>Vous n'avez pas fait de commande</p>
                    @else
                        <table id="table_commande" style="border-spacing: 7px; border-collapse: separate;">
                            <tr> <th style="text-align: center;">Numéro de Commande</th> <th style="text-align: center;">Prix</th> <th style="text-align: center;">Date de commande</th> <th style="text-align: center;">Etat de la commande</th></tr>
                            @foreach($allFactureUser as $facture)
                                <?php
                                $create_date=$facture->created_at;
                                $year=substr($create_date, 0, 4);
                                $month=substr($create_date, 5, 2);
                                $day=substr($create_date, 8, 2);
                                $etatcommande="En cours de livraison";
                                if ($facture->etat_commande_id==2)
                                    $etatcommande="Livrée"
                                ?>
                                <br>
                                <tr> <td id="td_commande" style="text-align: center;">{{$facture->id}}</td> <td id="td_commande" style="text-align: center;">{{$facture->cout}} €</td> <td id="td_commande" style="text-align: center;"><?php echo $day."/".$month."/".$year ?></td> <td id="td_commande" style="text-align: center;"><?php echo $etatcommande ?></td> <td id="btn_detail_commande_cellule" style="text-align: center;"><input class="btn_detail_commande" id="{{$facture->id}}" type="button" value="Détail de la commande..."></input> </td></tr>
                            @endforeach
                        </table>
                    @endif
                </div>
                <div id="display_mode_paiement" class="hidden">
                    <h3>Mode de paiement</h3>
                    
                </div>
            </div>
        </div>
        <div id="div_error_password">
            <span class="invalid-feedback" style="display:block;" role="alert">
                <strong>{{ session()->get('error') }}</strong>
            </span>
        </div>
        <div class="div_account_button">
            <button class="account_button_disconnect" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <a href="{{ route('logout') }}" >
                    Se Déconnecter
                </a>
            </button>
            <!-- <button class="account_button_disconnect" onclick="event.preventDefault(); document.getElementById('confirm-password-form').submit();">
                <a href="{{ route('password.confirm') }}" >
                    Supprimer votre compte
                </a>
            </button> -->
            <input class="account_button_disconnect" type=button onclick=window.location.href='/profile/delete'; value='Supprimer votre compte'/>
            <input class="account_button_disconnect" type=button onclick=window.location.href='/profile/anonymization'; value='Anonymiser'/>
            <br>
            <input class="account_button_disconnect" type=button onclick=window.location.href='/creer-vehicule/modeles'; value='Créer Modèle'/>
            <input class="account_button_disconnect" type=button onclick=window.location.href='/creer-vehicule/motorisations'; value='Créer Motorisation'/>
        </div>
        <div class="div_account_button">
            <form method="POST" action="/anonymiserInactif"> 
            @csrf 
            <div id="div_button_account_ano_admin">
                <p>Anonymiser / supprimer tout les comptes inactifs depuis 3 ans :</p>
                <input class="account_button_disconnect" id="button_ano_admin" type="submit"  value="Anonymiser les comptes inactifs"/>
            </div>
            <div id="div_error_password">
                <span class="invalid-feedback" style="display:block; font-size:25px;" role="alert">
                    <strong>{{ session()->get('message') }}</strong>
                </span>
            </div>
            </form>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
        <!-- <form id="confirm-password-form" action="{{ route('password.confirm') }}" method="POST">
            @csrf
        </form> -->
    </div>



</div>    
<footer>
    <p style="margin-bottom:8px;">
        <a href="/mentions-legales">Mentions légales</a>
        |
        <a href="/donnees-personnelles">Politique des données personnelles</a>
        |
        <a id="gerer_cookie" href="#">Gérer mes cookies</a>
        |
        <a href="/contact">Contact</a>
    </p>
    <p>Tesla Corporation ~2022</p>
</footer>
</body>
</html>
<script type=text/javascript src="../js/detail_compte.js"></script>