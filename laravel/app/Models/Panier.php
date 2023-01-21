<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre_article",
        "montant"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    // public function styles(){
    //     return $this->hasMany(Style::class);
    // }

    public function styles(){
        return $this->belongsToMany(Style::class,'panier_style');
    }

    public function accessoires()
    {
        return $this->belongsToMany(Accessoire::class, 'panier_accessoire');
    }
    public function facture(){
        return $this->belongsTo(Facture::class);
    }
}
