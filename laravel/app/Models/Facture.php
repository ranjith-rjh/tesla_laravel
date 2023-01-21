<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'cout',
        'montant_accompte'
    ];
    public function etat_commande(){
        return $this->belongsTo(EtatCommande::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function adresse(){
        return $this->belongsTo(Adresse::class);
    }
    public function vehicule(){
        return $this->belongsTo(Vehicule::class);
    }
    public function mode_paiement(){
        return $this->belongsTo(ModePaiement::class);
    }
    public function panier(){
        return $this->belongsTo(Panier::class);
    }
}

