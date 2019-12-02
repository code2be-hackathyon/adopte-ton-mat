<?php

namespace App\Http\Controllers;

use App\Association;
use App\Materiel;
use Illuminate\Http\Request;


class MaterielController extends Controller
{
    public static function details(Request $request)
    {
        $selectedCategorie=$request['categorie'];
//        $materiels = Materiel::find($selectedCategorie);
//        return view('materiel.details',['materiels'=>$materiels]);
        return view('materiel.details');
    }
}
