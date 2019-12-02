<?php

namespace App\Http\Controllers;

use App\Association;
use App\Categorie;
use Illuminate\Http\Request;

class AssociationController extends Controller
{

    public function index()
    {
        $assocations = Association::all();
        return view('accueil/associations',['associations'=>$assocations]);
    }
}
