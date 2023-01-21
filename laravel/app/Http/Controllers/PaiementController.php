<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Adresse;
use App\Models\Facture;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    public function showPaiement($adresse,$vehiculeId,$panierId){
        if ($vehiculeId!=null)
        {
            $vehicule = Vehicule::find($vehiculeId);
            return view('events.paiement',compact('vehicule','adresse'));
        }
        else{
            //panier
            //todo
        }
    }


    public function showFacturation(Request $request)
    {
        $vehicule= Vehicule::find($request->vehiculeId);
        $adresse=Adresse::find($request->adresseId);
        $user = User::find(auth()->user()->id);
        $montant=$request->montantAccompte;
        $mode_paiement=$request->mode_paiement;
        PaiementController::createFacture($vehicule,$adresse,$user,$montant,$mode_paiement);

        return redirect('/merci');
    }
    public function createFacture($vehicule,$adresse,$user,$montant,$mode_paiement)
    {
        // $vehicule = Vehicule::find($idVehicule);
        $libelleFacture=date('Y-m-d')."_";
        $libelleFacture.=$vehicule->modele_id;
        $libelleFacture.="-".$vehicule->motorisation_id;
        $features = $vehicule->choix_options;
        foreach($features as $feature)
        {
            $libelleFacture.="-".$feature->id;
        }
        $libelleFacture.="_".$user->id;

        $facture = Facture::create([
            'libelle' => $libelleFacture,
            'cout' => $vehicule->prix,
            'montant_accompte' => $montant
        ]);

        // $facture->update([
        //     'libelle' => $libelleFacture."_".$facture->id
        // ]);
        
        //associate user
        $facture->user()->associate($user->id);
        //associate adresse
        $facture->adresse()->associate($adresse->id);
        //associate vehicule
        $facture->vehicule()->associate($vehicule->id);
        //associate etat commande
        $facture->etat_commande()->associate(1);
        //associate mode paiement
        $facture->mode_paiement()->associate($mode_paiement); 

        $facture->save();

    }

    public function showAddressView($idVehicule){
        $user = User::find(auth()->user()->id);
        if ($user->adresse !== null)
        {
            $adresseComplete = "";
            $adresseComplete.=$user->adresse->rue;
            $adresseComplete.=" ".$user->adresse->codePostal;
            $adresseComplete.=" ".$user->adresse->ville;
            return view('events.checkoutAdresse',compact('adresseComplete','idVehicule'));
        }

        return view('events.checkoutAdresse', compact('idVehicule'));

    }
    public function createOrPassAddress(Request $request, $idVehicule){
        //validate
        $request->validate([
            'rue' => ["required", "string"],
            'ville' => ["required", "string"],
            'codePostal' => ["required", "numeric"],
            'pays' => ["required", "string"]
        ]);

        $user = User::find(auth()->user()->id);
        $adresses =  Adresse::all();
        foreach ($adresses as $adresse)
        {
            if ($adresse->rue === $request->rue &&
                $adresse->ville === $request->ville &&
                $adresse->codePostal === $request->codePostal &&
                $adresse->pays === $request->pays)
                {
                    //it's the same
                    //il faut associer la nouvelle adresse et la facture
                    //todo
                    // PaiementController::createFacture($idVehicule,$adresse,$user);
                    
                    return PaiementController::showPaiement($adresse,$idVehicule,null);
                    //return redirect('/'.$idVehicule.'/checkout/facturation');
                }
            }
            //create new address
            $adresse = PaiementController::createAddress($request,$user);
            //il faut associer la nouvelle adresse et la facture
            //todo
            
        //PaiementController::createFacture( $idVehicule,$adresse,$user);
        return PaiementController::showPaiement($adresse,$idVehicule,null);
        // return redirect('/'.$idVehicule.'/checkout/facturation');
    }

    public function createAddress(Request $request, $user){        
        
        $address = Adresse::create([
            'rue' => $request->rue,
            'ville' => $request->ville,
            'codePostal' => $request->codePostal,
            'pays' => $request->pays
        ]);     
        // $newAddress = $user->adresse()->associate($address);
        // $user->update([
        // ]);
        return $address;
    }

    public function checkAddressView(Request $request, $id){
        //validate
        $request->validate([
            'rue' => ["required", "string"],
            'ville' => ["required", "string"],
            'codePostal' => ["required", "numeric"],
            'pays' => ["required", "string"]
        ]);

        $user = User::find($id);
        $address = Adresse::find($user->adresse_id);

        // $address->update([
        //     'rue' => $request->rue,
        //     'ville' => $request->ville,
        //     'codePostal' => $request->codePostal,
        //     'pays' => $request->pays
        // ]);

        // return redirect('/home');
    }
}
