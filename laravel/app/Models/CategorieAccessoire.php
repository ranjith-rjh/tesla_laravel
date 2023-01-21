<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieAccessoire extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'libelle'
    ];

    public function accessoires()
    {
        return $this->hasMany(Accessoire::class);
    }

    

}
