<?php

namespace App\Http\Controllers;

use App\Models\ChoixOption;
use Illuminate\Http\Request;
use App\Models\Modele;
use App\Models\Motorisation;
use App\Models\CategorieOption;
use App\Models\Photo;
class ModeleController extends Controller
{
    
    public function show($libelle)
    {

        $motor = Motorisation::select('motorisations.*')
                                ->join('modeles', 'motorisations.modele_id', '=', 'modeles.id')
                                ->where('modeles.libelle', 'like', $libelle.'%')
                                ->get();

        $categorie_options = CategorieOption::all();
        $libelle_model = $libelle;

        return view('modele', compact('motor', 'categorie_options', 'libelle_model'));
    }

}
