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
use Illuminate\Support\Facades\App;
use LaravelLang\Lang\Plugins\Breeze\V1;

// use App\Http\Controllers\PDF\PDF;

class OptionController extends Controller
{
    public function returnViewPourPaiement($idVehicule)
    {
        return redirect("/".$idVehicule."/checkout/adresse");
    }

    public function enregistrerVehiculeUser($idVehicule){
        $monUser = User::find(auth()->user()->id);
        $vehicule = Vehicule::find($idVehicule);
        
        
        $enregistrements = $monUser->vehicules;
        $test=$enregistrements;
        foreach($enregistrements as $enregistrement)
        {
            if ($enregistrement->id === $idVehicule)
            {
                //vehicule déjà enregistré
                return false;
            }
        }
        $monUser->vehicules()->attach($idVehicule);

        return true;
    }

    public function creerVehicule2($model, $motorisation, $couleur, $jante, $interieur, $isEnregistrer){
        return OptionController::creerVehicule($model, $motorisation, $couleur, $jante, $interieur,null, $isEnregistrer);
    }
    public function creerVehicule($model, $motorisation, $couleur, $jante, $interieur,$traction, $isEnregistrer ){
        //################
        //GET DATA
        //################

        //infos
        $libelleMoteur = Motorisation::find($motorisation);
        $libelleCouleur = ChoixOption::find($couleur);
        $libelleJantes = ChoixOption::find($jante);
        $libelleInterieur = ChoixOption::find($interieur);
        $libelleTraction = null;

        $prixTraction = 0;

        if (isset($traction))
        {
            $libelleTraction = ChoixOption::find($traction);
            $prixTraction = $libelleTraction->motorisations()->where('choix_option_id', $libelleTraction->id)->first()->pivot->cout;
        }

        // prix
        $prixMotorisation = $libelleMoteur->prix;
        $prixCouleur = $libelleCouleur->motorisations()->where('motorisation_id', $libelleMoteur->id)->first()->pivot->cout;
        $prixJantes = $libelleJantes->motorisations()->where('motorisation_id', $libelleMoteur->id)->first()->pivot->cout;
        $prixInterieur = $libelleInterieur->motorisations()->where('motorisation_id', $libelleMoteur->id)->first()->pivot->cout;

        $totalprix = $prixMotorisation + $prixCouleur + $prixJantes + $prixInterieur + $prixTraction;

        $isButton = true;
        
        //get model
        $models = Modele::all();
        foreach($models as $oneModel)
        {
            if ($oneModel->libelle === $model)
            {
                $monModel = $oneModel;
            }
        }

        //################
        //CHECK IF VEHICULE DOES NOT EXIST
        //################
        //get all vehicule 
        $allVehicules = Vehicule::all();
        foreach($allVehicules as $oneVehicule)
        {
            //check if not same features
            if ($oneVehicule->modele_id===$monModel->id && 
                $oneVehicule->motorisation_id===$libelleMoteur->id)
            {
                //vehicule already exists

                //get all features
                $features = $oneVehicule->choix_options;
                if (!empty($features))
                {
                    if ($libelleTraction !== null)
                    {
                        $myFeatures = array($libelleCouleur->id,$libelleJantes->id,$libelleInterieur->id,$libelleTraction->id);
                        if(isset($features[3]))
                        {
                            $theFeatures = array($features[0]->id,$features[1]->id,$features[2]->id,$features[3]->id);
                        }
                        else
                        {
                            $theFeatures = array($features[0]->id,$features[1]->id,$features[2]->id);
                        }
                    }
                    else 
                    {
                        $myFeatures = array($libelleCouleur->id,$libelleJantes->id,$libelleInterieur->id);
                        $theFeatures = array($features[0]->id,$features[1]->id,$features[2]->id);
                    }
                    
                    //verify
                    array_multisort($myFeatures);
                    array_multisort($theFeatures);

                    // $test = $myFeatures;
                    // $test2 = $theFeatures;
                    // return view('test2',compact('test','test2'));
                    if ($myFeatures == $theFeatures )
                    {
                        $id = $oneVehicule->id;
                        if ($isEnregistrer === "save")
                        {
                            $isVehiculeEnregistre=true;
                            $isVehiculeDejaEnregistre=true;
                            if(OptionController::enregistrerVehiculeUser($id))
                            {
                                return view('resumeConfiguration', compact('isButton','model', 'libelleMoteur', 'libelleCouleur', 'libelleJantes', 'libelleInterieur','libelleTraction', 'totalprix','isVehiculeEnregistre'));
                            }
                            return view('resumeConfiguration', compact('isButton','model', 'libelleMoteur', 'libelleCouleur', 'libelleJantes', 'libelleInterieur','libelleTraction', 'totalprix','isVehiculeDejaEnregistre'));
                        }
                        //vehicule already exists with same conf
                        return OptionController::returnViewPourPaiement($id);
                    }    
                }
            }
        }      

        //################
        //CREATE VEHICULE
        //################
        //create vehicule from user
        $vehicule = Vehicule::create([
            "prix" => $totalprix,
        ]);
        //associate vehicule and model
        $vehicule->modele()->associate($monModel);
        //associate vehicule and model
        $vehicule->motorisation()->associate($libelleMoteur);
        //associate options
        $vehicule->choix_options()->attach($libelleCouleur->id);
        $vehicule->choix_options()->attach($libelleJantes->id);
        $vehicule->choix_options()->attach($libelleInterieur->id);
        if (isset($traction))
        {
            $libelleTraction = ChoixOption::find($traction);
            $vehicule->choix_options()->attach($libelleTraction->id);
        }
        //saving
        $vehicule->update([
        ]);
        if ($isEnregistrer === "save")
        {
            $id = $vehicule->id;
            OptionController::enregistrerVehiculeUser($id);
            return view('resumeConfiguration', compact('isButton','model', 'libelleMoteur', 'libelleCouleur', 'libelleJantes', 'libelleInterieur','libelleTraction', 'totalprix'));
        }
        return OptionController::returnViewPourPaiement($vehicule->id);
    }

    
    public function couleur_controller($modele, $motorisation){
        
        $choix_options = ChoixOption::select('*')
                                    ->join('choix_option_motorisation','choix_option_motorisation.choix_option_id','=', 'choix_options.id')
                                    ->join('choix_option_categorie_option','choix_option_categorie_option.choix_option_id','=', 'choix_options.id')
                                    ->join('photos','photos.choix_option_id','=', 'choix_options.id')
                                    ->where('choix_option_motorisation.motorisation_id','like',$motorisation)
                                    ->where('choix_option_categorie_option.categorie_option_id','like', 1)
                                    ->get();

                                    
        $categorie_options = CategorieOption::all();
        return view('couleur', compact('choix_options','categorie_options','modele','motorisation'));
    }

    public function jante_controller($modele, $motorisation, $couleur){
        
        $choix_options = ChoixOption::select('*')
                                    ->join('choix_option_motorisation','choix_option_motorisation.choix_option_id','=', 'choix_options.id')
                                    ->join('choix_option_categorie_option','choix_option_categorie_option.choix_option_id','=', 'choix_options.id')
                                    ->join('photos','photos.choix_option_id','=', 'choix_options.id')
                                    ->where('choix_option_motorisation.motorisation_id','like',$motorisation)
                                    ->where('choix_option_categorie_option.categorie_option_id','like', 2)
                                    ->get();

        
        $categorie_options = CategorieOption::all();    
        return view('jante', compact('choix_options','categorie_options','modele','motorisation', 'couleur'));
    }

    public function interieur_controller($modele, $motorisation, $couleur, $jante){
        
        $choix_options = ChoixOption::select('*')
                                    ->join('choix_option_motorisation','choix_option_motorisation.choix_option_id','=', 'choix_options.id')
                                    ->join('choix_option_categorie_option','choix_option_categorie_option.choix_option_id','=', 'choix_options.id')
                                    ->join('photos','photos.choix_option_id','=', 'choix_options.id')
                                    ->where('choix_option_motorisation.motorisation_id','like',$motorisation)
                                    ->where('choix_option_categorie_option.categorie_option_id','like', 6)
                                    ->get();

                                    
        $categorie_options = CategorieOption::all();

        return view('interieur', compact('choix_options','categorie_options','modele','motorisation', 'couleur', 'jante'));
    }

    public function traction_controller($modele, $motorisation, $couleur, $jante, $interieur){
        
        $choix_options_4 = ChoixOption::select('*')
                                    ->join('choix_option_motorisation','choix_option_motorisation.choix_option_id','=', 'choix_options.id')
                                    ->join('choix_option_categorie_option','choix_option_categorie_option.choix_option_id','=', 'choix_options.id')
                                    ->where('choix_option_motorisation.motorisation_id','like',$motorisation)
                                    ->where('choix_option_categorie_option.categorie_option_id','=', 4)
                                    //->orWhere('choix_option_categorie_option.categorie_option_id','=', 5)
                                    ->get();
        
        $choix_options_5 = ChoixOption::select('*')
                                    ->join('choix_option_motorisation','choix_option_motorisation.choix_option_id','=', 'choix_options.id')
                                    ->join('choix_option_categorie_option','choix_option_categorie_option.choix_option_id','=', 'choix_options.id')
                                    ->where('choix_option_motorisation.motorisation_id','like',$motorisation)
                                    ->where('choix_option_categorie_option.categorie_option_id','=', 5)
                                    //->orWhere('choix_option_categorie_option.categorie_option_id','=', 5)
                                    ->get();
                                    
        $categorie_options = CategorieOption::all();

        return view('traction', compact('choix_options_4','choix_options_5','categorie_options','modele','motorisation', 'couleur', 'jante', 'interieur'));
    }

    public function resumerConfiguration2($model, $motorisation, $couleur, $jante, $interieur)
    {
        $libelleMoteur = Motorisation::find($motorisation);
        $libelleCouleur = ChoixOption::find($couleur);
        $libelleJantes = ChoixOption::find($jante);
        $libelleInterieur = ChoixOption::find($interieur);
        $isButton=true;

        // prix
        $prixMotorisation = $libelleMoteur->prix;
        $prixCouleur = $libelleCouleur->motorisations()->where('motorisation_id', $libelleMoteur->id)->first()->pivot->cout;
        $prixJantes = $libelleJantes->motorisations()->where('motorisation_id', $libelleMoteur->id)->first()->pivot->cout;
        $prixInterieur = $libelleInterieur->motorisations()->where('motorisation_id', $libelleMoteur->id)->first()->pivot->cout;

        $totalprix = $prixMotorisation + $prixCouleur + $prixJantes + $prixInterieur;

        $test = array($prixMotorisation, $prixCouleur, $prixJantes, $prixInterieur);
        return view('resumeConfiguration', compact('isButton','model', 'libelleMoteur', 'libelleCouleur', 'libelleJantes', 'libelleInterieur', 'totalprix', 'test'));

    }

    public function resumerConfiguration($model, $motorisation, $couleur, $jante, $interieur,$traction)
    {
        $libelleMoteur = Motorisation::find($motorisation);
        $libelleCouleur = ChoixOption::find($couleur);
        $libelleJantes = ChoixOption::find($jante);
        $libelleInterieur = ChoixOption::find($interieur);
        $isButton=true;
        $libelleTraction = ChoixOption::find($traction);

        // prix
        $prixMotorisation = $libelleMoteur->prix;
        $prixCouleur = $libelleCouleur->motorisations()->where('motorisation_id', $libelleMoteur->id)->first()->pivot->cout;
        $prixJantes = $libelleJantes->motorisations()->where('motorisation_id', $libelleMoteur->id)->first()->pivot->cout;
        $prixInterieur = $libelleInterieur->motorisations()->where('motorisation_id', $libelleMoteur->id)->first()->pivot->cout;
        $prixTraction = $libelleTraction->motorisations()->where('motorisation_id', $libelleMoteur->id)->first()->pivot->cout;

        $totalprix = $prixMotorisation + $prixCouleur + $prixJantes + $prixInterieur + $prixTraction;
        return view('resumeConfiguration', compact('isButton','model', 'libelleMoteur', 'libelleCouleur', 'libelleJantes', 'libelleInterieur','libelleTraction', 'totalprix'));
    }

    public function genererPDF2($model, $motorisation, $couleur, $jante, $interieur )
    {
        return OptionController::genererPDF($model, $motorisation, $couleur, $jante, $interieur, null );
    }
    public function genererPDF($model, $motorisation, $couleur, $jante, $interieur,$traction ) {
        $pdf = App::make('dompdf.wrapper');

        //infos
        $libelleMoteur = Motorisation::find($motorisation);
        $libelleCouleur = ChoixOption::find($couleur);
        $libelleJantes = ChoixOption::find($jante);
        $libelleInterieur = ChoixOption::find($interieur);
        $libelleTraction=null;

        $prixTraction = 0;

        if (isset($traction))
        {
            $libelleTraction = ChoixOption::find($traction);
            $prixTraction = $libelleTraction->motorisations()->where('choix_option_id', $libelleTraction->id)->first()->pivot->cout;
        }

        // prix
        $prixMotorisation = $libelleMoteur->prix;
        $prixCouleur = $libelleCouleur->motorisations()->where('motorisation_id', $libelleMoteur->id)->first()->pivot->cout;
        $prixJantes = $libelleJantes->motorisations()->where('motorisation_id', $libelleMoteur->id)->first()->pivot->cout;
        $prixInterieur = $libelleInterieur->motorisations()->where('motorisation_id', $libelleMoteur->id)->first()->pivot->cout;

        $totalprix = $prixMotorisation + $prixCouleur + $prixJantes + $prixInterieur + $prixTraction;

        $pdf->loadHTML(view('resumeConfiguration', compact('model', 'libelleMoteur', 'libelleCouleur', 'libelleJantes', 'libelleInterieur','libelleTraction', 'totalprix')));
        return $pdf->stream();
    }
}