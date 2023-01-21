<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'lien_photo'
    ];

    public function vehicules(){
        return $this->belongsTo(Vehicule::class);
    }
    public function motorisations(){
        return $this->belongsTo(Motorisation::class);
    }
    public function modeles(){
        return $this->belongsTo(Modele::class);
    }
    public function choix_options(){
        return $this->belongsTo(ChoixOption::class);
    }
    public function styles(){
        return $this->belongsTo(Style::class);
    }
}
