<?php

namespace App\Http\Controllers;

use App\Models\ChoixOption;
use Illuminate\Http\Request;
use App\Models\Modele;
use App\Models\Motorisation;
use App\Models\CategorieOption;
use App\Models\Photo;

class MainPageController extends Controller
{
    public function index2(){
        $posts_modeles = Modele::all();
        $posts_motors = Motorisation::all();

        return view('mainTemp', compact('posts_modeles','posts_motors')) ;

    }

}
