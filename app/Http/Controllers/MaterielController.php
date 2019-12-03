<?php

namespace App\Http\Controllers;

use App\Association;
use App\Material;
use App\Sub_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MaterielController extends Controller
{
    public static function details(Request $request)
    {
        $selectedCategoryID=$request['category'];
        $materiels = Material::all();
        $materielInSelectedCategory[]=[];
        foreach ($materiels as $materiel){
            $sub_category = DB::table('sub_categories')->find($materiel['sub_category_id'])->get();
            $category = DB::table('categories')->find($sub_category->category_id);
            if( $category->id == $selectedCategoryID){
                $materielInSelectedCategory=[$materiel];}
        }
        return view('materiel.details',['materiels'=>$materielInSelectedCategory,'associations']);





//        $materielsInSelectedCategory[]=[];
//
//        $materiel = Material::find($selectedCategoryID);
//        return view('materiel.details',['materiels'=>$materiels]);

    }
}
