<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Modele;
use App\Models\Motorisation;
use App\Models\Essai;
use App\Models\Vehicule;
use Illuminate\Database\Eloquent\Model;

class ReservationController extends Controller
{
    public function showReservation(){
        $posts_modeles = Modele::all();
        $posts_motors= Motorisation::all();
        $myUser = auth()->user();
        return view('reservation', compact('posts_modeles','posts_motors', 'myUser'));
    }

    public function reservation(Request $request){
        // dd($request->car);

        if($request->car==2)
        {
            $id_vehicule = 2;
            $id_modele = $request->car;
            $id_motorisation = Vehicule::find($id_vehicule)->motorisation_id;
        }
        else{
            $id_vehicule = 4;
            $id_modele = $request->car;
            $id_motorisation = Vehicule::find($id_vehicule)->motorisation_id;
        }

        $allEssai = Essai::all();
        $bool = false;
        $heures = $request['hour']; 
        if($request['hour']<10){
            $heures = "0".$request['hour'];
        }
        $date_request = $request['date']." ".$heures.":00".":00";
        foreach($allEssai as $oneEssai){
            if($oneEssai->modele_id==$id_vehicule and strval($oneEssai->dateRes)==strval($date_request))
            {
                $bool = true;
                break;
            }
        }

        if ($bool==true)
        {
            return back()->with('error', 'Un essai a deja été pris pour ce modèle à cette date et heure');
        }
        else{

            auth()->user()->essais()->create([
                'dateRes' => $date_request,
                'user_id' => auth()->user()->id,
                'modele_id' => $id_modele,
                'motorisation_id' => $id_motorisation,
                'vehicule_id' => $id_vehicule
            ]);
            return view('reserve');
        }

    }
}
