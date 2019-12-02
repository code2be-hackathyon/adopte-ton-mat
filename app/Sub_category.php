<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
    protected $fillable = [
        'id','label', 'category_id'
    ];


    public function Category(){
        return $this->belongsTo(Category::class);
    }

}
