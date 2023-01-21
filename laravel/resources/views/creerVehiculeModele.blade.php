<?php
    include '../public/php/header.php';
?>

<!-- Eviter de saisir à chaque fois  -->

<?php
    isset($_POST['nom']) ? $nom = $_POST['nom'] : $nom = "";
?>


<!-- FORMULAIRE DE SAISIE -->

<div class="form_account">
    <h1>Créer un véhicule</h1>
    <h3>Modèle</h3>
    <div class="column_margined">
        <form method="POST" action="http://51.83.36.122:8245/creer-vehicule/modeles">
            <input type="hidden" name="_token" value="OwukaB3EZ0PrJoTvcEOOkbKHZQULNucpG6MdrR0R">
            
            <!-- Corriger l'erreur : 419 | PAGE EXPIRED -->
            @csrf
            
            <!-- NOM DU MODELE -->
            <div>
                <label class="label_form_account" for="nom">Nom du modèle*</label>
                <div>
                    <input class="input_form_account form-control " id="name" type="text" name="nom" value="<?php echo $nom ?>" required autocomplete="family-name" autofocus>
                </div>
            </div>

            <div>
                <button type="submit" class="button_style_account creation_vehicule_btn">
                    Créer un modèle
                </button>
            </div>
        </form>


        @if($clique == true)
            <!-- Afficher un message d'erreur -->
            <div class="creation_vehicule_msg_box">
               <p>Message : </p>
                @if($modeleNouveau == true)
                    <p>Le modèle à été ajouté à la base</p>
                @else
                    <p>Ce modèles existe déjà entrer une nouvelle !</p>
                @endif
            </div>
        @endif
    </div>
</div>