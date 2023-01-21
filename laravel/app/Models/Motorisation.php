<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'acceleration',
        'vitesse_max',
        'autonomie',
        'motopropulseur',
        'prix'
    ];

    public function modele(){
        return $this->belongsTo(Modele::class);
    }

    public function classe_energetique(){
        return $this->belongsTo(ClasseEnergetique::class);
    }
    public function photos(){
        return $this->hasMany(Photo::class);
    }
    
    //relation many to many entre les motorisations et les choix d'options
    public function choix_options()
    {
        return $this->belongsToMany(ChoixOption::class,'choix_option_motorisation')->withPivot(['cout']);
    }

    // Pas trop sur... fait selon les mots du prof
    public function vehicules(){
        return $this->hasOne(Vehicule::class);
    }

}
