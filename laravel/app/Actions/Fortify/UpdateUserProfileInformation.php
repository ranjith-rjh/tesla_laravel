<?php

namespace App\Actions\Fortify;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */


    

    public function update($user, array $input)
    {
        //dd($input);
        Validator::make($input, [
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'secondPrenom' => ['nullable','string', 'max:255'],
            'telephone' => ['nullable','string', 'max:20'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
        ])->validateWithBag('updateProfileInformation');

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            if (isset($input['nomentreprise']) && isset($input['numerotva']) ){
                $user->forceFill([
                    'nom' => $input['nom'],
                    'email' => $input['email'],
                    'prenom' => $input['prenom'],
                    'secondPrenom' => $input['secondPrenom'],
                    'telephone' => $input['telephone'],
                    'nomentreprise' => $input['nomentreprise'],
                    'numerotva' => $input['numerotva'],
                ])->save();
            };
            $user->forceFill([
                'nom' => $input['nom'],
                'email' => $input['email'],
                'prenom' => $input['prenom'],
                'secondPrenom' => $input['secondPrenom'],
                'telephone' => $input['telephone'],
                
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'nom' => $input['nom'],
            'email' => $input['email'],
            'prenom' => $input['prenom'],
            'secondPrenom' => $input['secondPrenom'],
            'telephone' => $input['telephone'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
