<?php

namespace App\Providers;

use App\Models\User;
use App\Models\TypeCompte;
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Hash;
use App\Actions\Fortify\CreateNewUser;
use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use Illuminate\Support\Facades\RateLimiter;
use App\Actions\Fortify\UpdateUserProfileInformation;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //i used https://laravel.com/docs/9.x/fortify
        //written by remy
        
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        

        //view login
        Fortify::loginView(function () {
            return view('auth.login');
        });

        //authentication
        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('email', $request->email)->first();
            if ($user &&
                Hash::check($request->password, $user->password)) {
                return $user;
            }
        });

        //auth page
        Fortify::registerView(function () {
            $typeAccount = TypeCompte::all();
            
            return view('auth.register',compact('typeAccount'));
        });

        //reset passwrd page
        Fortify::requestPasswordResetLinkView(function () {
            return view('auth.forgot-password');
        });
         //update passwrd page
        //  Fortify::requestPasswordResetLinkView(function () {
        //     return view('auth.update-password');
        // });


        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(50)->by($email.$request->ip());
        });

        // RateLimiter::for('two-factor', function (Request $request) {
        //     return Limit::perMinute(5)->by($request->session()->get('login.id'));
        // });

        //confirm passwd page
        Fortify::confirmPasswordView(function () {
            return view('auth.confirm-password');
        });
        
        //2fa
        Fortify::twoFactorChallengeView(function () {
            return view('auth.two-factor-challenge');
        });



    }
}
