<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    protected $fillable = [
        'utilisateur_id','designation','nomReferent','prenomReferent','descriptif','mail','adresseVille','adresseRue','numRue','cp'
    ];

    protected $table = 'ASSOCIATION';
    protected $hidden = [
        'login','mdp'
    ];
}
