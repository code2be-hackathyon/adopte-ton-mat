<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Malady extends Model
{
    protected  $fillable = [
        'id','label','description'
    ];
}
