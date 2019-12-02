<?php

namespace App\Http\Controllers;

use App\Association;
use App\Material;
use App\Sub_category;
use Illuminate\Http\Request;


class MaterielController extends Controller
{
    public static function details(Request $request)
    {
        $selectedCategoryID=$request['category'];
        $materiels = Material::all();

        foreach ($materiels as $materiel){
            if( $materiel['sub_category_id'] == '');
            $materiels[]=[$materiel];
        }
        return view('materiel.details',['materiels'=>$materiels->all()]);





//        $materielsInSelectedCategory[]=[];
//
//        $materiel = Material::find($selectedCategoryID);
//        return view('materiel.details',['materiels'=>$materiels]);

    }
}
