<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sub_category extends Model
{
    protected $fillable = [
        'libelle', 'categorie_id', 'id'
    ];

<<<<<<< HEAD:app/Sub_category.php
    public function Category(){
        return $this->belongsTo(Category::class);
    }
=======

>>>>>>> 9d6acba43a3b061e8cb1240ec8da11fdc1ada7ba:app/SousCategorie.php
}
