<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'id','libelle'
    ];

    protected $table = 'CATEGORIE';

    public function sousCategories(){
        return $this->hasMany(SousCategorie::class);
    }
}
