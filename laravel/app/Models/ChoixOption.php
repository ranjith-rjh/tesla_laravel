<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChoixOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'description'
    ];

    //relation many to many entre les motorisations et les choix d'options
    public function motorisations()
    {
        return $this->belongsToMany(Motorisation::class, 'choix_option_motorisation')->withPivot('cout');
    }
    

    public function categorie_options(){
        return $this->belongsToMany(CategorieOption::class);
    }
    

    public function photos(){
        return $this->hasMany(Photo::class);
    }

    public function vehicules()
    {
        return $this->belongsToMany(Vehicule::class,'choix_option_vehicule');
    }
}
