<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;
use Laravel\Fortify\TwoFactorAuthenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Billable, TwoFactorAuthenticatable;
    //use MustVerifyMobile;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'prenom',
        'secondPrenom',
        'email',
        'password',
        'telephone',
        'nomentreprise',
        'numerotva',
        'mobile_verify_code',
        'google_id',
        'derniereConnexion'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'mobile_verified_at' => 'datetime',
    ];

    public function type_compte(){
        return $this->belongsTo(TypeCompte::class);
    }
    
    public function adresse(){
        return $this->belongsTo(Adresse::class);
    }

    public function factures(){
        return $this->hasMany(Facture::class);
    }
    
    public function vehicules(){
        return $this->belongsToMany(Vehicule::class,'user_vehicule');
    }

    public function essais(){
        return $this->hasOne(Essai::class);
    }

    public function panier(){
        return $this->hasOne(Panier::class);
    }
}
