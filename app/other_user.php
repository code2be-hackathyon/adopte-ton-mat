<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Particulier extends Model
{
    protected $fillable = [
        'id','nom','prenom','mail','adresseVille','adresseRue','numRue','cp'
    ];

    protected $hidden = [
        'login','mdp'
    ];
}
