<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    // Créer une séquence pour incrémenter
    protected $fillable = [
        'numero',
        'date',
        'somme'
    ];

    public function accessoires(){
        return $this->hasMany(ChoixOption::class);
    }
}
