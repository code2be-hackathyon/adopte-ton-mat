<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    protected $fillable = [
        'libelle','reference','ficheTech','association_id'
    ];

}
