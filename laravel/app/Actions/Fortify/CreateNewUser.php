<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\TypeCompte;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        // Définir le nouveau fuseau horaire
        date_default_timezone_set('Europe/Paris');
        $date = date('Y-m-d h:i:s');
        // dd($date);
        // dd($input['email']);
        // $user = User::where('email', $input['email'])->get()->first();
        // dd($user);
        // if($user != null){
        //     $user->update([
        //         'derniereConnexion'=> $date
        //     ]);
        //     $user->save();
        // }

        if ($input['type_compte'] == 'Business')
        {
            $typeCompte = TypeCompte::find(2);
            
        }
        else
        {
            $typeCompte = TypeCompte::find(1);
        }


        if (isset($input['nomentreprise']) && isset($input['numerotva']) ){
            $newUser = $typeCompte->users()->create([
                'nom' => $input['nom'],
                'prenom' =>$input['prenom'],
                'secondPrenom' =>$input['secondPrenom'],
                'email' => $input['email'],
                'nomentreprise' => $input['nomentreprise'],
                'numerotva' => $input['numerotva'],
                'password' => Hash::make($input['password']),
            ]);
            $newUser->update([
                'derniereConnexion'=> $date
            ]);
            return $newUser;
        };
        
        $newUser=$typeCompte->users()->create([
            'nom' => $input['nom'],
            'prenom' =>$input['prenom'],
            'secondPrenom' =>$input['secondPrenom'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
        $newUser->update([
            'derniereConnexion'=> $date
        ]);
        return $newUser;
    }
}
