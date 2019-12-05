<?php

namespace App\Http\Controllers;

use App\Association;
use App\Category;
use Illuminate\Http\Request;

class AssociationController extends Controller
{

    public function index()
    {
        $associations = Association::all();

        return view('accueil.associations',['associations'=>$associations]);
    }


}
