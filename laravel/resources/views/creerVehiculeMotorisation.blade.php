<?php

use Stripe\Service\Issuing\IssuingServiceFactory;

    include '../public/php/header.php';
?>


<!-- Eviter de saisir à chaque fois  -->

<?php
    isset($_POST['nom']) ? $nom = $_POST['nom'] : $nom = "";
    isset($_POST['choix_modele']) ? $choix_modele = $_POST['choix_modele'] : $choix_modele = "";
    isset($_POST['choix_classe_energetique']) ? $choix_classe_energetique = $_POST['choix_classe_energetique'] : $choix_classe_energetique = "";
    isset($_POST['choix_acceleration']) ? $choix_acceleration = $_POST['choix_acceleration'] : $choix_acceleration = "";
    isset($_POST['choix_vitesse_max']) ? $choix_vitesse_max = $_POST['choix_vitesse_max'] : $choix_vitesse_max = "";
    isset($_POST['choix_autonomie']) ? $choix_autonomie = $_POST['choix_autonomie'] : $choix_autonomie = "";
    isset($_POST['choix_motopropulseur']) ? $choix_motopropulseur = $_POST['choix_motopropulseur'] : $choix_motopropulseur = "";
    isset($_POST['choix_prix']) ? $choix_prix = $_POST['choix_prix'] : $choix_prix = "";
?>

<!-- FORMULAIRE DE SAISIE -->

<div class="form_account">
    <h1>Créer un véhicule</h1>
    <h3>Motorisation</h3>
    <div class="column_margined">
        <form method="POST" action="http://51.83.36.122:8245/creer-vehicule/motorisations">
            <input type="hidden" name="_token" value="OwukaB3EZ0PrJoTvcEOOkbKHZQULNucpG6MdrR0R">

            <!-- Corriger l'erreur : 419 | PAGE EXPIRED -->
            @csrf
            
            <!-- NOM DU MOTORISATION -->
            <div>
                <label class="label_form_account" for="nom">Nom de la motorisation*</label>
                <div>
                    <input class="input_form_account form-control " id="name" type="text" name="nom" value="<?php echo $nom ?>" required autocomplete="family-name" autofocus>
                </div>
            </div>

            <!-- CHOIX DU MODELE -->
            <div class="creation_vehicule_input_choice">
                <label for="choix_modele">Modèle* :</label>
                <select name="choix_modele" id="choix_modele" required>
                    @if($choix_modele == "")
                        <option value="" selected="selected">--Choix--</option>
                    @else
                        <option value="">--Choix--</option>
                    @endif
                    @foreach($lesModeles as $m)
                        @if((int)$choix_modele == $m->id)
                            <option value="{{$m->id}}" selected="selected">{{$m->libelle}}</option>
                        @else
                            <option value="{{$m->id}}">{{$m->libelle}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            

            <!-- CHOIX CLASSE ENERGITIQUES -->
            <div class="creation_vehicule_input_choice">
                <label for="choix_classe_energetique">Classe Energetique* :</label>
                <select name="choix_classe_energetique" id="choix_classe_energetique" required>
                    @if($choix_classe_energetique == "")
                        <option value="" selected="selected">--Choix--</option>
                    @else
                        <option value="">--Choix--</option>
                    @endif
                    @foreach($lesClasseEnergetiques as $ce)
                        @if((int)$choix_classe_energetique == $ce->id)
                            <option value="{{$ce->id}}" selected="selected">{{$ce->libelle}}</option>
                        @else
                            <option value="{{$ce->id}}">{{$ce->libelle}}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <!-- Acceleration -->
            <div class="creation_vehicule_input_choice">
                <label for="choix_acceleration">Accelération (en sec)* :</label>
                <input type="number" step="any" required " id="choix_acceleration" name="choix_acceleration" class="creation_vehicule_input_nbr" value="<?php echo $choix_acceleration ?>">
            </div>

            <!-- Vitesse max -->
            <div class="creation_vehicule_input_choice">
                <label for="choix_vitesse_max">Vitesse max (en km/h)* :</label>
                <input type="number" step="any" required id="choix_vitesse_max" name="choix_vitesse_max" class="creation_vehicule_input_nbr" value="<?php echo $choix_vitesse_max ?>">
            </div>

            <!-- Autonomie -->
            <div class="creation_vehicule_input_choice">
                <label for="choix_autonomie">Autonomie (en km)* :</label>
                <input type="number" step="any" required id="choix_autonomie" name="choix_autonomie" class="creation_vehicule_input_nbr" value="<?php echo $choix_autonomie ?>">
            </div>


            <!-- Motopropulseur -->
            <div class="creation_vehicule_input_choice">
                <label for="choix_motopropulseur">Motopropulseur* : </label>
                <input type="text" required id="choix_motopropulseur" name="choix_motopropulseur" class="creation_vehicule_input_nbr" value="<?php echo $choix_motopropulseur ?>">
            </div>

            <!-- Prix -->
            <div class="creation_vehicule_input_choice">
                <label for="choix_prix">Prix (en €)* : </label>
                <input type="number" step="any" required id="choix_prix" name="choix_prix" class="creation_vehicule_input_nbr" value="<?php echo $choix_prix ?>">
            </div>

            <div>
                <button type="submit" class="button_style_account creation_vehicule_btn">
                    Créer une motorisation
                </button>
            </div>
        </form>

        @if($clique == true)
            <!-- Afficher un message d'erreur -->
            <div class="creation_vehicule_msg_box">
               <p>Message : </p>
                @if($motorisationNouvelle == true)
                    <p>La Motorisation à été ajouté à la base</p>
                @else
                    <p>Cette motorisation existe déjà pour ce modèle, entrer une nouvelle !</p>
                @endif
            </div>
        @endif


    </div>
</div>