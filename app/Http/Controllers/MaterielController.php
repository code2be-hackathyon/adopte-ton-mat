<?php

namespace App\Http\Controllers;

use App\Association;
use App\Material;
use App\Materiel;
use Illuminate\Http\Request;


class MaterielController extends Controller
{
    public static function details(Request $request)
    {
        $selectedCategory=$request['categorie'];
        $materiels = Material::find($selectedCategory);
        return view('materiel.details',['materiels'=>$materiels]);

    }

    public static function index(){
        $materials = Material::all();
        return view('materiel.details',['materiels'=>$materials]);
    }
}
