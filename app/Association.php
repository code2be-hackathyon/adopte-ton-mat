<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Association extends Model
{
    protected $fillable = [
        'id','designation','referent_name','referent_forename','description','user_id'
    ];


    public function user(){
       return  $this->belongsTo(User::class);
    }

    public function materials()
    {
        return $this->hasMany(Material::class);
    }

    public function getUserById(){
        DB::table('users')->find($this->user_id);
    }



}
