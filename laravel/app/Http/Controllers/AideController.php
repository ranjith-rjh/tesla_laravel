<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AideController extends Controller
{
    //
    public function show(){
        return view('aide.main');
    }
}
