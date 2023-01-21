<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClasseEnergetique extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle'
    ];

    public function motorisations(){
        return $this->hasMany(Motorisation::class);
    }
}
