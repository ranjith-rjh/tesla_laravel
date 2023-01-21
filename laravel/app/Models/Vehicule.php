<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $fillable = [
        'prix'
    ];

    public function user(){
        return $this->belongsToMany(User::class,'user_vehicule');
    }

    public function modele(){
        return $this->belongsTo(Modele::class);
    }
    

    
    //Validé par Rico et Cormac
    public function motorisation(){
        return $this->belongsTo(Motorisation::class);
    }

    public function choix_options()
    {
        return $this->belongsToMany(ChoixOption::class,'choix_option_vehicule');
    }

    public function photos(){
        return $this->hasMany(Photo::class);
    }
    public function essais(){
        return $this->hasOne(Essai::class);
    }
    public function factures(){
        return $this->hasMany(Facture::class);
    }
}
