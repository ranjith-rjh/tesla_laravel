<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieOption extends Model
{
    use HasFactory;

    protected $fillable =[
        'libelle'
    ];

    public function choix_options(){
        return $this->belongsToMany(ChoixOption::class);
    }

    public function photos(){
        return $this->belongsTo(Photo::class);
    }
}
