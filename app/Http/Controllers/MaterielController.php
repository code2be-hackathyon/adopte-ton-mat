<?php

namespace App\Http\Controllers;

use App\Association;
use App\Category;
use App\Material;
use App\Sub_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MaterielController extends Controller
{
    public static function details(Request $request)
    {
        $materiels = Material::all();
        return view('materiel.details',['materiels'=>$materiels]);

    }
    public static function add()
    {
        $matos = Material::all();
        return view('materiel.add',['materiels'=>$matos]);
    }

    public function getThisBySubCategoryId(Request $request)
    {
        $subCategoryId = $request['subCategory'];
        $materiels = Material::all()->where('sub_category_id','=',$subCategoryId);

        return view('materiel.details',['materiels'=>$materiels]);
    }
}
