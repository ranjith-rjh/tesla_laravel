<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    use HasFactory;

    protected $fillable= [
        'libelle'
    ];

    public function accessoires()
    {
        return $this->belongsToMany(Accessoire::class, 'style_accessoire');
    }
    public function photos(){
        return $this->hasMany(Photo::class);
    }
    public function paniers(){
        return $this->belongsToMany(Panier::class,'panier_style');
    }
}
