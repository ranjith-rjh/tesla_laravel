<?php

namespace App\Http\Controllers;

use App\Models\ChoixOption;
use Illuminate\Http\Request;
use App\Models\Modele;
use App\Models\Motorisation;
use App\Models\CategorieOption;
use App\Models\Photo;
use Faker\Core\Color;

class testController extends Controller
{
 
    public function test(){
        return view('test2');
    }

    
    // public function test($idMotor, $idColor){
    //     //on a recupéré en paramètres nos id qui étaient dans l'url

    //     //on récupère les objets qui correspondent à cet id
    //     $motor = Motorisation::find($idMotor);
    //     $color = ChoixOption::find($idColor);

    //     //on renvoie la vue test2 qui aura en variables php $color et $motor
    //     return view('test2', compact('color','motor'));
    // }

    // public function index2(){
    //     $posts_modeles = Modele::all();
    //     $posts_motors = Motorisation::all();

    //     return view('mainTemp', compact('posts_modeles','posts_motors')) ;

    // }

    // public function show($libelle)
    // {

    //     $motor = Motorisation::select('motorisations.*')
    //                             ->join('modeles', 'motorisations.modele_id', '=', 'modeles.id')
    //                             ->where('modeles.libelle', 'like', $libelle.'%')
    //                             ->get();

    //     $categorie_options = CategorieOption::all();

    //     $motorisation_selec = "";

    //     return view('modele', compact('motor', 'categorie_options','motorisation_selec'));
    // }

    // public function couleur($id, $modele_selec){
        
    // }

    // public function update(Request $request, $id){

    //     $beer = Beer:finorfail($id);
    //     $request->validate([])
    // }

    // public function showUpdate($id){
    //     $beer = Beer:findOrFail($id);
    //     $brands = Brand::all();

    //     return view('beer_update', [
    //         "beer" =>$beer,
    //         "brands" => $brands
    //     ])
    // }

    // public function delete($id){
    //     $beer = Beer:findOrFail($id);
    //     $beer->delete();
    //     return redirect()->back(); //permet de rediriger vers l'url d'avant
    // $beer->bars()->detach()
    // }


    // public function create(Request $request){
    //     $request->validate([//todo
    //     ]);
    //     $brand->beers()->create([
    //         "name" => $name,
    //     ]);
    // }

}
