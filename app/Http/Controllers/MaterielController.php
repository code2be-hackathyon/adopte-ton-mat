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
        $selectedCategoryID=$request['category'];
        $materiels = Material::all();
        $materielInSelectedCategory[]=[];
        foreach ($materiels as $materiel){
            $sub_category = DB::table('sub_categories')->find($materiel['sub_category_id'])->get();
            //$sub_category = DB::table('sub_categories')->find($materiel['sub_category_id']);
            $association = DB::table('associations')->find($materiel['association_id']);
            $category = DB::table('categories')->find($sub_category->category_id);
            if( $category->id == $selectedCategoryID){
                $materielInSelectedCategory=[$materiel,$association];}
        }
//        var_dump($materielInSelectedCategory[1]->designation);
        foreach ($materielInSelectedCategory as $item){
//            var_dump('-------------------');
//            var_dump($item[1]);

        }
        return view('materiel.details',['materiels'=>$materielInSelectedCategory]);






//        $materielsInSelectedCategory[]=[];
//
//        $materiel = Material::find($selectedCategoryID);
//        return view('materiel.details',['materiels'=>$materiels]);

    }
    public static function add()
    {
        $matos = Material::all();
        return view('materiel.add',['materiels'=>$matos]);
    }
}
