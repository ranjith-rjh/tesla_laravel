<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    use HasFactory;

    protected $fillable = [
        'rue',
        'ville',
        'codePostal',
        'pays'
    ];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function factures(){
        return $this->hasMany(Facture::class);
    }
}
