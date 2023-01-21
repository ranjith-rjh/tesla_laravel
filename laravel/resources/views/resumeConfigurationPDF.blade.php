<?php
if (isset($isButton) && $isButton==true)
    include '../public/php/header.php';
?>

    <div id="resume_container">
        <h1>Configuration de votre Tesla</h1>
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
                @if (auth()->user() !== null)
                    <div class="div_config_enregistrer_conf">
                        <form method="POST" action="//51.83.36.122:8245/modeles/{{str_replace(" ","%20", $model)}}/motorisation/{{$libelleMoteur->id}}/couleur/{{$libelleCouleur->id}}/jante/{{$libelleJantes->id}}/interieur/{{$libelleInterieur->id}}/traction/{{$libelleTraction->id}}/resume">
                            @csrf    
                            <button type="submit" class="btn_config_choisir">Enregistrer ma configuration</button>
                        </form>
                    </div>
                @endif
            @else
                <a href="./"  class="btn_config_choisir">Précédent</a>
                <a href="./resume/download" target="_blank" class="btn_config_choisir">Télécharger</a>
                @if (auth()->user() !== null)
                <div class="div_config_enregistrer_conf">
                    <form method="POST" action="//51.83.36.122:8245/modeles/{{str_replace(" ","%20", $model)}}/motorisation/{{$libelleMoteur->id}}/couleur/{{$libelleCouleur->id}}/jante/{{$libelleJantes->id}}/interieur/{{$libelleInterieur->id}}/resume">
                        @csrf    
                        <button type="submit" class="btn_config_choisir">Enregistrer ma configuration</button>
                    </form>
                </div>
                @endif
            @endif
        @endif
        @if (isset($isAlreadyExists))
        <h3 class="h3_resume_already_registred">Cette configuration est déjà enregistrée sur ce profil !</h3>
        @endif
        </div>
    </div>
</body>
</html>
