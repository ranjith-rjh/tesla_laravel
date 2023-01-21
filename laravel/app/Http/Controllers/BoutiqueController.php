<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategorieAccessoire;
use App\Models\Accessoire;
use App\Models\Style;
use App\Models\Photo;


class BoutiqueController extends Controller
{
    public function acceuil(){
        $posts_categories_accessoires = CategorieAccessoire::all();

        $noms_accessoires = Accessoire::all('libelle');
        $meilleures_ventes_liste = Accessoire::select('accessoires.libelle','accessoires.prix','accessoires.meilleure_vente', 'lien_photo','accessoires.id','categorie_accessoire_id')
                                        ->join('style_accessoire','style_accessoire.accessoire_id','=','accessoires.id')
                                        ->join('styles','styles.id','=','style_accessoire.style_id')
                                        ->join('photos','photos.style_id','=','styles.id')
                                        ->where('lien_photo','like','%presentation-image%')
                                        ->where('meilleure_vente','=', True)->get();

        return view('boutiqueAcceuil', compact('posts_categories_accessoires','noms_accessoires','meilleures_ventes_liste')) ;

    }

    public function categorie($categorie){
        $categorie = str_replace("-"," ",$categorie);

        $posts_categories_accessoires = CategorieAccessoire::all();
        $meilleures_ventes = Accessoire::where('meilleure_vente','=', True)->get();
        
        $categorie_parent = CategorieAccessoire::where('libelle', '=', $categorie)->firstOrFail();
        $sub_categories = CategorieAccessoire::where('categorie_accessoire_id', '=',$categorie_parent->id)->get();


        if (count($sub_categories)==0 ){
            
            //$accessoires = Accessoire::where('categorie_accessoire_id','=', $categorie_parent->id)->get();
            $accessoires = Accessoire::select('accessoires.libelle','accessoires.prix','accessoires.meilleure_vente', 'lien_photo','accessoires.id','categorie_accessoire_id')
                                        ->join('style_accessoire','style_accessoire.accessoire_id','=','accessoires.id')
                                        ->join('styles','styles.id','=','style_accessoire.style_id')
                                        ->join('photos','photos.style_id','=','styles.id')
                                        ->where('lien_photo','like','%presentation-image%')
                                        ->where('categorie_accessoire_id','=', $categorie_parent->id)->get();
        }
        else {
            // $accessoires = Accessoire::whereIn('categorie_accessoire_id', $sub_categories->pluck('id'))->get();
            $accessoires = Accessoire::select('accessoires.libelle','accessoires.prix','accessoires.meilleure_vente', 'lien_photo','accessoires.id','categorie_accessoire_id')
                                        ->join('style_accessoire','style_accessoire.accessoire_id','=','accessoires.id')
                                        ->join('styles','styles.id','=','style_accessoire.style_id')
                                        ->join('photos','photos.style_id','=','styles.id')
                                        ->where('lien_photo','like','%presentation-image.avif%')
                                        ->whereIn('categorie_accessoire_id', $sub_categories->pluck('id'))->get();
        }


        $style = Style::all();

        return view('boutiqueCategory', compact('posts_categories_accessoires','categorie_parent','sub_categories','accessoires','style','meilleures_ventes')) ;
        

    }

    public function accessoire($cat, $id_accessoire){
    
        $posts_categories_accessoires = CategorieAccessoire::all();

        $mon_accessoire = Accessoire::findOrFail($id_accessoire);

        $mes_styles = Style::findOrFail($id_accessoire)->get();

        $mes_styles = $mon_accessoire->styles()->where('accessoire_id', $mon_accessoire->id)->get();

        $photos_accessoire = Photo::whereIn('style_id', $mes_styles->pluck('id'))->get();

        return view('boutiqueAccessoire', compact('posts_categories_accessoires','mon_accessoire','mes_styles','photos_accessoire'));
    }

    public function recherche(Request $request){
        $posts_categories_accessoires = CategorieAccessoire::all();
        $term = $request->term;
        
        //$accessoires = Accessoire::where('libelle','ilike', '%'.$term.'%')->get();
        $accessoires = Accessoire::select('accessoires.libelle','accessoires.prix','accessoires.meilleure_vente', 'lien_photo','accessoires.id','categorie_accessoire_id')
                                        ->join('style_accessoire','style_accessoire.accessoire_id','=','accessoires.id')
                                        ->join('styles','styles.id','=','style_accessoire.style_id')
                                        ->join('photos','photos.style_id','=','styles.id')
                                        ->where('lien_photo','like','%presentation-image.avif%')
                                        ->where('accessoires.libelle','ilike', '%'.$term.'%')->get();

        return view('boutiqueRecherche', compact('posts_categories_accessoires','accessoires','term'));
    }

}