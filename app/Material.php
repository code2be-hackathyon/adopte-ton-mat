<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Material extends Model
{
    protected $fillable = [
        'id','label','reference','tech_sheet','association_id','sub_category_id'
    ];

    public function association(){
        return $this->belongsTo(Association::class);
    }

    public function sub_category()
    {
        return $this->belongsTo(Sub_category::class);
    }

    public static function sortByCategory($category_id){
        return DB::table('materials')->where('id',
            'in',
            DB::table('sub_categories')->where('category_id','=',$category_id)->get('id'))->toSql();

    }


}
