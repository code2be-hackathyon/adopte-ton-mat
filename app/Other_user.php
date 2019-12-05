<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Other_user extends Model
{
    protected $fillable = [
        'id','name','forename','user_id'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
