<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maladie extends Model
{
    protected  $fillable = [
        'id','libelle','descriptif'
    ];
}
