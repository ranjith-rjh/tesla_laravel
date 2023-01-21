<?php

namespace App\Http\Controllers;

use App\Models\Modele;
use App\Models\Vehicule;
use App\Models\User;
use Barryvdh\DomPDF\PDF;
use App\Models\ChoixOption;
use App\Models\Motorisation;
use Illuminate\Http\Request;
use App\Models\CategorieOption;
use App\Models\ClasseEnergetique;
use GuzzleHttp\Promise\Create;
use Illuminate\Cache\RedisStore;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\View\ViewException;
use LaravelLang\Lang\Plugins\Breeze\V1;
use PhpParser\Node\Stmt\Echo_;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;

class CreerVehiculeController extends Controller
{

    // =================== MODELE

    // Retourne la vue pour entrer le nom du modèle 
    public function vueNomModele() {

        $nameAccountType=auth()->user()->type_compte->libelle;
        $clique = false;
        $lesModeles = Modele::all();
        $modeleNouveau = true;

        // Redirection dépendant du type de compte 
        if($nameAccountType == "Administrateur") {
            return view('creerVehiculeModele', compact('lesModeles', 'clique', 'modeleNouveau'));
        } else {
            return redirect('/home');
        }

       
    }

    // Valide la saisie en fonction de la base
    // Si le modele est inexistant ==> Ajout dans la BDD
    public function validationFormModele(Request $req) {
        $nameAccountType=auth()->user()->type_compte->libelle;
        $clique = true;
        $nomModele = $req->input()["nom"];
        $lesModeles = Modele::all();
        $modeleNouveau = true;

        // Vérifier si le input existe déjà

        foreach($lesModeles as $m) {
            if(ucwords($nomModele) == ucwords($m->libelle))
            {
                $modeleNouveau = false;
                break;
            }
        }

        if($modeleNouveau == true)
        {
            $modele = Modele::create([
                "libelle" => ucwords($nomModele),
            ]);

            $modele->update([
            ]);


        }

        // Redirection dépendant du type de compte 
        if($nameAccountType == "Administrateur") {
            return view('creerVehiculeModele', compact('modeleNouveau', 'clique'));
        } else {
            return redirect('/home');
        }

    }


    // =================== MOTORISATION
    
    public function vueNomMotorisation() {
        $nameAccountType=auth()->user()->type_compte->libelle;
        $clique = false;
        $lesModeles = Modele::all();
        $lesClasseEnergetiques = ClasseEnergetique::all();

        // Redirection dépendant du type de compte 
        if($nameAccountType == "Administrateur") {
            return view('creerVehiculeMotorisation', compact('lesModeles', 'lesClasseEnergetiques', 'clique'));
        } else {
            return redirect('/home');
        }

    }

    public function validationFormMotorisation(Request $req) {
        $nameAccountType=auth()->user()->type_compte->libelle;
        $clique = true;
        $lesModeles = Modele::all();
        $lesMotorisations = Motorisation::all();
        $lesClasseEnergetiques = ClasseEnergetique::all();
        $motorisationNouvelle = true;
        $saisie = $req->input();
        
        // Formattage des données saisies

        $saisieBonType = $saisie;
        $saisieBonType['choix_modele'] = (int)$saisieBonType['choix_modele'];
        $saisieBonType['choix_classe_energetique'] = (int)$saisieBonType['choix_classe_energetique'];
        $saisieBonType['choix_acceleration'] = number_format(floatval($saisieBonType['choix_acceleration']),1,".", "");
        $saisieBonType['choix_vitesse_max'] = (int)$saisieBonType['choix_vitesse_max'];
        $saisieBonType['choix_autonomie'] = (int)$saisieBonType['choix_autonomie'];
        $saisieBonType['choix_motopropulseur'] = ucwords(strtolower($saisieBonType['choix_motopropulseur']));
        $saisieBonType['choix_prix'] = number_format(floatval($saisieBonType['choix_prix']),2,".", "");

        $modeleChoisi = Modele::find($saisieBonType['choix_modele'])->libelle;
        $saisieBonType['nom'] = ucwords($modeleChoisi . " " . strtolower($saisieBonType['nom']));

        array_shift($saisieBonType);

        // Vérifier si la motorisation existe déjà 

        $nomMotorisation = $saisieBonType['nom'];

        foreach($lesMotorisations as $m){
            if(ucwords($nomMotorisation) == ucwords($m->libelle))
            {
                $motorisationNouvelle = false;
                break;
            }
        }

        // Insertion de la motorisation dans la base 

        $modele = Modele::find($saisieBonType['choix_modele']);
        $classeEnergetique = ClasseEnergetique::find($saisieBonType['choix_classe_energetique']);

        if($motorisationNouvelle == true) {

            $motorisation = new Motorisation;
            $motorisation->fill([
                    "libelle" => $saisieBonType['nom'],
                    "acceleration" => $saisieBonType['choix_acceleration'],
                    "vitesse_max" => $saisieBonType['choix_vitesse_max'],
                    "autonomie" => $saisieBonType['choix_autonomie'],
                    "motopropulseur" => $saisieBonType['choix_motopropulseur'],
                    "prix" => $saisieBonType['choix_prix'],
            ]);

            // $motorisation->save();

            // $motorisation->modele()->associate($modele->id);
            // $motorisation->classe_energetique()->associate($classeEnergetique->id);

            // $motorisation = Motorisation::create([
            //     // "modele_id" => $saisieBonType['choix_modele'],
            //     // "classe_energetique_id" => $saisieBonType['choix_classe_energetique'],
            //     "modele_id" => (int)1,
            //     "classe_energetique_id" => (int)1,
            //     "libelle" => $saisieBonType['nom'],
            //     "acceleration" => $saisieBonType['choix_acceleration'],
            //     "vitesse_max" => $saisieBonType['choix_vitesse_max'],
            //     "autonomie" => $saisieBonType['choix_autonomie'],
            //     "motopropulseur" => $saisieBonType['choix_motopropulseur'],
            //     "prix" => $saisieBonType['choix_prix'],
            // ]);



            $motorisation->modele()->associate($modele);
            $motorisation->classe_energetique()->associate($classeEnergetique);


            $motorisation->save();
        }


        // Redirection dépendant du type de compte 
        if($nameAccountType == "Administrateur") {
            return view('creerVehiculeMotorisation', compact('lesModeles', 'lesClasseEnergetiques', 'clique', 'saisie', 'saisieBonType', 'motorisationNouvelle', 'modele'));
        } else {
            return redirect('/home');
        }


    }

}
