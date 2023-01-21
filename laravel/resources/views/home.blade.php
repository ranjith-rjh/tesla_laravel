<?php include '../public/php/header.php' ?>

<div class="englobe">
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
                                <p>{{number_format($facture->cout, 2, ',', ' ')}} €</p>
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
                                            <li>
                                            @if($choix->id == 20)
                                                <span class="gras"> Barre et récepteur d'attelage en acier</span> coût : {{number_format($choix->motorisations->first()->pivot->cout, 2, ',', ' ')}} €
                                            @elseif($choix->id == 21)
                                                <span class="gras">Barre d'attelage en acier de classe II</span> coût : {{number_format($choix->motorisations->first()->pivot->cout, 2, ',', ' ')}} €
                                            @elseif($choix->id == 22)
                                                <span class="gras">Crochet d'attelage en acier avec adapteur amovible</span> coût : {{number_format($choix->motorisations->first()->pivot->cout, 2, ',', ' ')}} €
                                            @elseif($choix->id == 23)
                                                <span class="gras">Barre de remorquage en acier de classe II</span> 
                                            @endif
                                            coût : {{number_format($choix->motorisations->first()->pivot->cout, 2, ',', ' ')}} €
                                            </li>
                                        @else
                                            <?php
                                                if($choix->id<=7){
                                                    $categorie="Couleur :";
                                                }
                                                elseif($choix->id>=24 and $choix->id<=26){
                                                    $categorie="Intérieur de couleur ";
                                                }
                                                elseif($choix->id>=27 and $choix->id<=28){
                                                    $categorie="Intérieur de couleur ";
                                                }
                                                elseif($choix->id==29){
                                                    $categorie="Intérieur de couleur ";
                                                }
                                                else{
                                                    $categorie="";
                                                }
                                                
                                            ?>
                                            <li><?php echo $categorie ?> <span class="gras">{{$choix->libelle}}</span> coût : {{number_format($choix->motorisations->first()->pivot->cout, 2, ',', ' ')}} €</li>
                                        @endif

                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @else
                    <h5>Détail de la commande :</h5>
                    <div class="div_information_commande">
                        <div class="undiv_div_information_commande">
                            <h6>Accessoires :</h6>
                            <hr>
                            <ul>
                            @foreach($facture->panier->styles as $style)
                                <li><span class="gras">{{$style->pivot->quantite}}</span> {{$style->libelle}}<br><span class="gras">Montant</span> (unité) : {{number_format($style->accessoires[0]->prix, 2, ',', ' ')}} €</li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="div_information_commande">
                        <div class="undiv_div_information_commande">
                            <h6>Prix :</h6>
                            <hr>
                            <p>{{number_format($facture->panier->montant, 2, ',', ' ')}} €</p>
                        </div>
                        <div class="undiv_div_information_commande">
                            <h6>Nombre d'article :</h6>
                            <hr>
                            <p>{{$facture->panier->nombre_article}}</p>
                        </div>
                    </div>
                    @endif
                    <div class="div_information_commande">
                            <div class="undiv_div_information_commande">
                                <h6>Etat de la commande :</h6>
                                <hr>
                                @if($facture->etat_commande_id==1)
                                    <p><span style="color:darkred"><?php echo $etatcommande ?></span></p>
                                @else
                                    <p><span style="color:darkgreen;"><?php echo $etatcommande ?></span></p>
                                @endif
                            </div>
                        </div>
                </div>
            </div>
        @endforeach
    @endif

    <div class="account_infos resized2">
        <div class="centered">

            <div class="div_title_bandeau_aide">
                <h1 >Mon compte</h1>
                <div class="div_petit_bandeau_aide">?</div>
            </div>
        </div>
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
                            <input id="button_modify_info" class=button_style_register type=button onclick=window.location.href="{{route('change-password')}}"; value='Changer mon mot de passe'/>
                        </div>
                    </div>
                </div>
                
                <div id="display_commandes" class="hidden">
                    <h3>Mes Commandes</h3>
                    @if ($bool_facture_home == FALSE)

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
                                <tr> <td id="td_commande" style="text-align: center;">{{$facture->id}}</td> <td id="td_commande" style="text-align: center;">{{number_format($facture->cout, 2, ',', ' ')}} €</td> <td id="td_commande" style="text-align: center;"><?php echo $day."/".$month."/".$year ?></td> <td id="td_commande" style="text-align: center;"><?php echo $etatcommande ?></td> <td id="btn_detail_commande_cellule" style="text-align: center;"><input class="btn_detail_commande" id="{{$facture->id}}" type="button" value="Détail de la commande..."></input> </td></tr>
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
        <div id="div_account_button">
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
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
        <!-- <form id="confirm-password-form" action="{{ route('password.confirm') }}" method="POST">
            @csrf
        </form> -->
    </div>



    <div class="div_bandeau_aide">
        <div class="div_bandeau_aide_content displayedNone">
            <h2 class="title_aide">Besoin d'aide ?</h2>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Où voir mes commandes ?</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Cliquez sur l'onglet "mes commandes", positionné en haut à gauche.</p>
                    <hr>
                    <p class="txt_aide">- Pour voir l'état d'une commande, cliquez sur "Détail de la commande" à droite de la commande souhaitée.</p>
                </div>
            </div>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide">Je n'arrive pas à activer la double authentication</p>
                <div class="div_txt_aide displayedNone">
                    <p class="txt_aide">- Vérifiez que vous avez bien ajouté votre numéro de téléphone (onglet "informations personnelles"). <br>Pour ajouter un numéro, cliquez sur "Modifier mes informations personnelles".</p>
                    <hr>
                    <!-- <p class="txt_aide">- Pour ajouter un numéro, cliquez sur "Modifier mes informations personnelles".</p>
                    <hr> -->
                    <p class="txt_aide">- Réessayez d'activer la double authentification après avoir validé votre mot de passe.</p>
                    <hr>
                    <p class="txt_aide">- Si le problème persiste, nous vous invitons à <a class="txt_cliquable" href="/contact">nous contacter</a>.</p>
                </div>
            </div>
            <!-- <div class="div_groupe_text_aide">
                <p class="petit_title_aide">L'intérêt de saisir mon adresse ?</p>
                <div class="div_txt_aide displayedNone">
                    <p class="txt_aide">Si vous saisissez votre adresse cela permettra d'éviter, pour vos futures commandes, de la saisir à chaque fois.</p>
                </div>
            </div> -->
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide">Que se passe-t-il si je supprime ou anonymise mon compte ?</p>
                <div class="div_txt_aide displayedNone">
                    <p class="txt_aide">- Vous serez redirigé sur une page où l'on vous demandera de valider votre mot de passe.</p>
                    <hr>
                    <p class="txt_aide">- Après validation, votre compte sera supprimé et vos informations personnelles seront rendues anonymes.</p>
                    <hr>
                    <p class="txt_aide">- Cette action est irréversible et vous n'aurez plus accès à votre compte.</p>
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
<script type=text/javascript src="../js/detail_compte.js"></script>

