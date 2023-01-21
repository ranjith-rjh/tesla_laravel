<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessoire extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'description',
        'prix',
        'caracteristique',
        'meilleure_vente'
    ];

    public function categorie_accessoires()
    {
        return $this->belongsTo(CategorieAccessoire::class);
    }
    public function paniers()
    {
        return $this->belongsToMany(Panier::class, 'panier_accessoire');
    }    
    public function styles()
    {
        return $this->belongsToMany(Style::class, 'style_accessoire');
    }
    public function code_promos(){
        return $this->belongsTo(CodePromo::class);
    }
}
