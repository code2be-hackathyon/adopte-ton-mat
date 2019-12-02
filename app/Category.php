<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id','label'
    ];

    public function sub_categories(){
        return $this->hasMany(sub_category::class);
    }
}
