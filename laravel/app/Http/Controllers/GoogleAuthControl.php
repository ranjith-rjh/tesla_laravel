<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use app\Actions\Fortify\CreateNewUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\SessionGuard;
use App\Models\User;
use App\Models\TypeCompte;

class GoogleAuthControl extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function callbackGoogle(){
        // try {
            $google_user = Socialite::driver('google')->stateless()->user();
            // dd($google_user->getId());
            $user = User::where('google_id', $google_user->getId())->first();
            //dd($user);
            if (!$user) {

                $typeCompte = TypeCompte::find(1);
                //dd($typeCompte);
                $new_user = $typeCompte->users()->create([
                    'nom' => $google_user->user["family_name"],
                    'prenom' => $google_user->user["given_name"],
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId()                    
                ]);
                

                Auth::login($new_user);

                return redirect()->intended('home');
            }
            else{
                Auth::login($user);

                return redirect()->intended('home');
            }
        //}
        // catch(\Throwable $th)
        // {
        //     dd('Something went wrong! '. $th->getMessage());
        // }
    }
}
