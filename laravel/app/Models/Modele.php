<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    use HasFactory;

    protected $fillable = [
        "libelle"
    ];

    public function motorisations(){
        return $this->hasMany(Motorisation::class);
    }

    // Pas trop sur... fait selon les mots du prof
    public function vehicules(){
        return $this->hasOne(Vehicule::class);
    }

    public function photos(){
        return $this->belongsTo(Photo::class);
    }
}