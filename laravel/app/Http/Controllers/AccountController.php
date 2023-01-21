<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Actions\Fortify\UpdateUserPassword;
use App\Models\User;
use App\Models\User_vehicule;
use App\Models\UserTemp;
use App\Models\Photo;
use App\Models\Modele;
use App\Models\Adresse;
use App\Models\Motorisation;
use App\Models\ChoixOption;
use Illuminate\Http\Request;
use App\Models\CategorieOption;
use App\Models\Facture;
use App\Models\TypeCompte;
use finfo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Vehicule;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use vendor\laravel\fortify\src\Http\Controllers\AuthenticatedSessionController;

class AccountController extends Controller
{


    public function anonymiserAdmin(){
        $nb = DB::select('SELECT suppr_or_anonymize_user()');
        return back()->with('message', 'Les comptes inactifs ont bien été anonymisés');
    }

    //client account page
    public function showHome(){
        $nameAccountType=auth()->user()->type_compte->libelle;
        $myUser = auth()->user();
        $allFactureUser = $myUser->factures;
        $bool_facture_home = False;
        foreach($allFactureUser as $oneFacture){
            if($oneFacture->user_id===$myUser->id){
                $bool_facture_home = true;
            }
        }

        //dd($allFactureUser);
        // return view('home', compact('nameAccountType', 'myUser', 'allFactureUser', 'bool_facture_home'));
        
        // Redirection dépendant du type de compte 
        if($nameAccountType == "Administrateur") {
            return view('homeAdmin', compact('nameAccountType', 'myUser', 'allFactureUser', 'bool_facture_home'));
        } else {
            return view('home', compact('nameAccountType', 'myUser', 'allFactureUser', 'bool_facture_home'));
        }
    }

    // Création d'une autre fonction pour rediriger en fonction du type de compte (client ou admin)
    // Par Ranjith
    // public function showHomeTest(){

    //     $nameAccountType=auth()->user()->type_compte->libelle;
    //     $myUser = auth()->user();
    //     $allFactureUser = $myUser->factures;
    //     $bool_facture_home = False;
    //     foreach($allFactureUser as $oneFacture){
    //         if($oneFacture->user_id===$myUser->id){
    //             $bool_facture_home = true;
    //         }
    //     }

    //     // Redirection dépendant du type de compte 
    //     if($nameAccountType == "Administrateur") {
    //         return view('homeAdmin', compact('nameAccountType', 'myUser', 'allFactureUser', 'bool_facture_home'));
    //     } else {
    //         return view('home', compact('nameAccountType', 'myUser', 'allFactureUser', 'bool_facture_home'));
    //     }
    //     //dd($allFactureUser);
    // }
    
    public function showEdit(){
        return view('profile.edit');
    }

    public function changePassword(){
        return view('auth.change-password');
    }

    public function updatePassword(Request $request) {

        # valider et confirer
        $request->validate([
            'old_password'=>'required',
            'new_password'=>'required|confirmed',
        ]);
        # verifie ancien mdp correcte
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error","Mot de passe incorrecte");
        }
        # verifier nouveau mdp != ancien mdp
        if(Hash::check($request->new_password, auth()->user()->password)){
            return back()->with("error","Saissisez un mot de passe different");
        }

        #Update new password
        User::whereId(auth()->user()->id)->update([
            'password'=>Hash::make($request->new_password)
        ]);

        return back()->with("status","Votre mot de passe à été changé");
    }

    public function showAddress(){
        $user = User::find(auth()->user()->id);
        $address = $user->adresse;
        if ($address == null)
            return view('profile.add_address', compact('user','address'));

        return view('profile.edit_address', compact('user','address'));
        // $user->adresse()->associate($address);
        // $user->update([
        //     'nom' => 'test'
        // ]);
    }

    public function updateAdress(Request $request, $id){
        //validate
        $request->validate([
            'rue' => ["required", "string"],
            'ville' => ["required", "string"],
            'codePostal' => ["required", "numeric"],
            'pays' => ["required", "string"]
        ]);

        //check si adresse existe deja
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
                    //il faut associer la nouvelle adresse et le user
                    $user->adresse()->dissociate();
                    $user->adresse()->associate($adresse)->save();
                    return redirect('/home');
                }
        }

        $user->adresse()->dissociate();
        $adresse =  AccountController::createAddress($request);
        $user->adresse()->associate($adresse)->save();

        return redirect('/home');
    }

    public function createAddressOrPass(Request $request){
        //validate
        $request->validate([
            'rue' => ["required", "string"],
            'ville' => ["required", "string"],
            'codePostal' => ["required", "numeric"],
            'pays' => ["required", "string"]
        ]);        
        
        //check si adresse existe deja
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
                    //il faut associer la nouvelle adresse et le user
                    $user->adresse()->associate($adresse)->save();
                    return redirect('/home');
                }
        }
        //create new address
        $adresse = AccountController::createAddress($request);
        //il faut associer la nouvelle adresse et le user
        $user->adresse()->associate($adresse)->save();

        return redirect('/home');
    }

    public function createAddress(Request $request){        
        
        $address = Adresse::create([
            'rue' => $request->rue,
            'ville' => $request->ville,
            'codePostal' => $request->codePostal,
            'pays' => $request->pays
        ]);     
        return $address;
    }

    public function showAnonymization(){
        $myUser = auth()->user();

        $allFactureUser = $myUser->factures;
        
        $bool=false;
        foreach($allFactureUser as $oneFacture){
            if($oneFacture->etat_commande_id===1){
                $bool = true;
            }
        }
        if($bool===false){
            return view('profile.anonymization', compact('myUser'));
        }
        else{
            return back()->with('error', 'Vous ne pouvez pas anonymiser votre compte vous avez une commande en cours.');
        }        
    }
    public function showDelete(){
        $myUser = auth()->user();

        $allFactureUser = $myUser->factures;
        //dd($allFactureUser);
        $bool=false;
        foreach($allFactureUser as $oneFacture){
            if($oneFacture->etat_commande_id===1){
                $bool = true;
            }
        }

        if($bool===false){
            return view('profile.delete', compact('myUser'));
        }
        else{
            return back()->with('error', 'Vous ne pouvez pas supprimer votre compte vous avez une commande en cours.');
        }
        
    }
    public static function doDeleteOrAno(Request $request){

        //validate de password
        $user = auth()->user();
        $user_password=auth()->user()->password;
        
        if(Hash::check($request->password, $user_password)){
            $myUser = Auth::user();
            $allFactureUser = $myUser->factures;
            $bool_facture=false;
            foreach($allFactureUser as $oneFacture){
                if($oneFacture->etat_commande_id===1){
                    $bool_facture = true;
                }
            }

            $allUserVehicule = User::has("vehicules")->get();
            // dd($vehicule);
            // dd($allVehicules);
            $bool_vehicule = false;
            foreach($allUserVehicule as $oneUserVehicule){
                if($oneUserVehicule->id===$myUser->id){
                    $bool_vehicule = true;
                }
            }

            if ($bool_facture === false) {
                if ($bool_vehicule == false) {
                    $address = $myUser->adresse;
                    $address_id = $myUser->adresse_id;
                    $myUser->delete();
                    if (!($address == null)) {
                        $address_user = Adresse::find($address_id);
                        $address_user->delete();
                    }
                } else {
                    $address = $myUser->adresse;
                    $mailcheck = false;
                    // if (!($address == null)) {
                    //     $address_user = Adresse::find($myUser->adresse_id);
                    //     $address_user->update([
                    //         'rue' => '##################'
                    //     ]);
                    // }
                    while($mailcheck == false) {
                        $array = ["~", "é", "#", "&", "è", "à", "€", "{", "}", "*", "+", "-", "[", "]", "(", ")", "_", "=", "$", "µ", "§", "<", ">", "ç", "ö", "ô", "ê", "â", "Ä", "î", "ï", "£", "|", "?", "!", "ù", "%", "û", "Ü", "ü", "Û", "Â", "ä", "!", "¿", "á", "¡", "∀", "z", "x", "ʍ", "ʌ", "n", "ʇ", "s", "ɹ", "b", "d", "o", "ɯ", "ן", "ʞ", "ɾ", "ᴉ", "ɥ", "ƃ", "ɟ", "ǝ", "p", "ɔ", "q", "ɐ", "Z", "⅄", "X", "M", "Λ", "∩", "⊥", "S", "ᴚ", "Ꝺ", "Ԁ", "O", "W", "Ꞁ", "ʞ", "ᒋ", "I", "H", "⅁", "Ⅎ", "Ǝ", "ᗡ", "Ͻ", "ᗺ", "∀", "¤"];

                        $count_array = count($array) - 1;

                        $random_length = rand(10, 255);

                        $random_mail = "";

                        for ($i = 0; $i < $random_length; $i++) {
                            if($random_length/2 == $i){
                                $random_index = "@";
                            }
                            if(($random_length/2)+3 == $i){
                                $random_index = ".";
                            }
                            else{
                                $random_index = rand(0, $count_array);
                            }
                            $random_index = rand(0, $count_array);
                            $random_mail = $random_mail . $array[$random_index];
                        }

                        if(is_null(User::where('email', '=', $random_mail)->first())){
                            $mailcheck = true;
                        }
                    }
                    
                    

                    $myUser->email = $random_mail;
                    $myUser->nom = '##################';
                    $myUser->prenom = '##################';
                    $myUser->secondPrenom = '##################';
                    $myUser->password = '##################';
                    $myUser->adresse_id = null;
                    $myUser->telephone = null;
                    $myUser->google_id = null;
                    $myUser->derniereConnexion = null;

                    $compte_type_myUser = $myUser->type_compte_id;
                    if (!($compte_type_myUser == (TypeCompte::find(1))->id)) {
                        $myUser->nomentreprise = null;
                        $myUser->numerotva = null;
                    }
                    $myUser->save();

                }

                auth()->logout();

                return view('profile.confirm');
            }
            else{
                return view('/home')->with('error', 'Vous ne pouvez pas supprimer ou anonymiser votre compte vous avez une commande en cours.');
            }
        }
        else{
            return back()->with('error', 'Erreur sur le mot de passe, mauvais mot de passe saisie');
        }
    }
}

