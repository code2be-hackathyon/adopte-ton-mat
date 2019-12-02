<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sub_category extends Model
{
    protected $fillable = [
        'libelle', 'categorie_id', 'id'
    ];

    public function Category(){
        return $this->belongsTo(Category::class);
    }
}
