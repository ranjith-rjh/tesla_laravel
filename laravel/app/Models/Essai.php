<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Essai extends Model
{
    use HasFactory;
    protected $fillable = [
        "dateRes",
        "user_id",
        "modele_id",
        "motorisation_id",
        "vehicule_id"
    ];

    public function vehicules(){
        return $this->belongsTo(Vehicule::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
