<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id','label'
    ];

    protected $table = 'categories';

    public function sousCategories(){
        return $this->hasMany(Sub_category::class);
    }
}
