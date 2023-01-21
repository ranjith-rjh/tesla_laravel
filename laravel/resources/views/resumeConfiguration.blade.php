<?php
if (isset($isButton) && $isButton==true)
    include '../public/php/header.php';
else
    echo '<style>
    #resume_container 
    {
        padding-top: 20vh;
        text-align: center;
    }

    #table_resume {
        margin-bottom: 4rem;
    }

    #table_resume > tr{
        width: 60%;
    }

    tr > td{
        border: 2px solid black;
        padding: 5px;
        text-align: center;
    }

    .td_resume_titre {
        /* width: 40%; */
    }

    .td_resume_valeur {
        text-align: left;
        padding-left: 10px;
        width: 80%;
    }

    .td_titre {
        color: white;
        background-color: black;
    }

    #resume_container > table{
        border-collapse: collapse;
        margin-left: auto; 
        margin-right: auto;
        margin-top: 2rem;
    }

    #resume_container > h1 {
        margin-bottom: 2rem;
    }

    hr{
        border: 2px solid black;
        width: 60%;
        margin-left: auto; 
        margin-right: auto;
    }

    .h3_resume_already_registred{
        color: red;
    }

    #resume_coordonees{
        width: 65%;
        margin-left: auto;
        margin-right: auto;
        text-align: left;
        margin-bottom: 3rem;
        background-color: red;
        color: white;
        text-align: center;
    }
</style>'
?>

<div class="englobe">
    <div id="resume_container">
        <div id="resume_coordonees">
            <h2>Tesla</h2>
        </div>
        @if (isset($isButton) && $isButton==true)
        <div class="centered">
            <div class="div_title_bandeau_aide">
                <h1>Configuration de votre Tesla</h1>  
                <div class="div_petit_bandeau_aide">?</div>
            </div>
        </div>  
        @else
        <h1>Configuration de votre Tesla</h1>
        @endif
        <hr>
        <table id="table_resume">
            <tr>
                <td colspan="2" class="td_titre">Votre véhicule</td>
            </tr>
            <tr>
                <td class="td_resume_titre">Modele</td>
                <td class="td_resume_valeur">{{$model}}</td>
            </tr>
            <tr>
                <td class="td_resume_titre">Motorisation</td>
                <td class="td_resume_valeur">{{$libelleMoteur->libelle}}</td>
            </tr>
            <tr>
                <td class="td_resume_titre">Couleur</td>
                <td class="td_resume_valeur">{{$libelleCouleur->libelle}}</td>
            </tr>   
            <tr>
                <td class="td_resume_titre">Jantes</td>
                <td class="td_resume_valeur">{{$libelleJantes->libelle}}</td>
            </tr>
            <tr>
                <td class="td_resume_titre">Interieur</td>
                <td class="td_resume_valeur">{{$libelleInterieur->libelle}}</td>
            </tr>
            <tr>
                <td class="td_resume_titre">Traction</td>
                <td class="td_resume_valeur">
                @if (isset($libelleTraction))
                {{$libelleTraction->description}}
                @else
                Pas de moyen de traction
                @endif
                </td>

            </tr>
            <tr>
                <td class="td_resume_titre">Prix Total</td>
                <td class="td_resume_valeur">{{number_format($totalprix, 2, ',', ' ')}} €</td>
            </tr>
        </table>
        @if (isset($isButton) && $isButton==true)
            @if (isset($libelleTraction))
                <a href="../../"  class="btn_config_choisir">Précédent</a>
                <a href="./resume/download" target="_blank" class="btn_config_choisir">Télécharger</a>
                <div class="div_config_enregistrer_conf">
                    <form method="POST" action="//51.83.36.122:8245/modeles/{{str_replace(" ","%20", $model)}}/motorisation/{{$libelleMoteur->id}}/couleur/{{$libelleCouleur->id}}/jante/{{$libelleJantes->id}}/interieur/{{$libelleInterieur->id}}/traction/{{$libelleTraction->id}}/create">
                        @csrf    
                        <button type="submit" class="btn_config_choisir">Procéder au paiement</button>
                    </form>
                </div>
                    <form method="POST" action="//51.83.36.122:8245/modeles/{{str_replace(" ","%20", $model)}}/motorisation/{{$libelleMoteur->id}}/couleur/{{$libelleCouleur->id}}/jante/{{$libelleJantes->id}}/interieur/{{$libelleInterieur->id}}/traction/{{$libelleTraction->id}}/save">
                        @csrf    
                        <button type="submit" class="btn_config_choisir">Enregistrer ma configuration</button>
                    </form>
            @else
                <a href="./"  class="btn_config_choisir">Précédent</a>
                <a href="./resume/download" target="_blank" class="btn_config_choisir">Télécharger</a>
                <div class="div_config_enregistrer_conf">
                    <form method="POST" action="//51.83.36.122:8245/modeles/{{str_replace(" ","%20", $model)}}/motorisation/{{$libelleMoteur->id}}/couleur/{{$libelleCouleur->id}}/jante/{{$libelleJantes->id}}/interieur/{{$libelleInterieur->id}}/create">
                        @csrf    
                        <button type="submit" class="btn_config_choisir">Procéder au paiement</button>
                    </form>
                </div>
                    <form method="POST" action="//51.83.36.122:8245/modeles/{{str_replace(" ","%20", $model)}}/motorisation/{{$libelleMoteur->id}}/couleur/{{$libelleCouleur->id}}/jante/{{$libelleJantes->id}}/interieur/{{$libelleInterieur->id}}/save">
                        @csrf    
                        <button type="submit" class="btn_config_choisir">Enregistrer ma configuration</button>
                    </form>
            @endif
            
        @endif
        @if (isset($isVehiculeEnregistre))
        <h3 class="h3_resume_already_registred">Le véhicule a bien été enregistré</h3>
        @endif
        @if (isset($isVehiculeDejaEnregistre))
        <h3 class="h3_resume_already_registred">Le véhicule a déjà été enregistré</h3>
        @endif
        </div>
    @if (isset($isButton) && $isButton==true)
    <div class="div_bandeau_aide resized4">
        <div class="div_bandeau_aide_content displayedNone">
            <h2 class="title_aide">Besoin d'aide ?</h2>
            <div class="div_groupe_text_aide">
                    <p class="petit_title_aide" >Je me suis trompé dans mes choix</p>
                    <div class="div_txt_aide displayedNone" >
                        <p class="txt_aide">- Cliquez sur "Précédent" pour revenir à l'étape précédente.</p>
                        <hr>
                        <p class="txt_aide">- Cliquez <a class="txt_cliquable" href="//51.83.36.122:8245/modeles/{{str_replace(" ","%20", $model)}}">ici</a> pour recommencer la configuration.</p>
                    </div>
                </div>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Comment conserver mon résumé de configuration ?</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Cliquez sur le bouton "Télécharger" pour télécharger le résumé au format PDF.</p>
                    <hr>
                    <p class="txt_aide">- Cliquez sur "Enregistrer ma configuration" pour la retrouver aisément plus tard ( nécessite d'être connecté).</p>
                    <hr>
                    <p class="txt_aide">- Vous pouvez aussi copier l'url de la page pour la partager.</p>
                </div>
            </div>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Je souhaite acheter ma Tesla maintenant</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Cliquez sur "Procéder au paiement" : vous serez redirigé vers la page de livraison vers celle de paiement.</p>
                    <hr>
                    <p class="txt_aide">- A Noter : Si vous n'êtes pas connecté, vous allez être redirigé d'abord vers la page de connexion.</p>
                </div>
            </div>
            <!-- <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Je souhaite acheter ma Tesla plus tard</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Cliquez sur "Enregistrer ma configuration" pour éviter de refaire votre configuration de A à Z.</p>
                    <hr>
                    <p class="txt_aide">- A Noter : Cette action nécessite d'être connecté.</p>
                </div>
            </div> -->
            <!-- <img class="img_aide"src="../images/configuration/modele-s/s-plaid/vue-devant.png" alt="configImg"> -->
        </div>
    </div>
    <script src="/js/aide.js"></script>
    @endif
</div>
</body>
</html>
