<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'id','label','reference','tech_sheet','association_id'
    ];

    public function association(){
        return $this->belongsTo(Association::class);
    }

}
