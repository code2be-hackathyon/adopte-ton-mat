<?php

namespace App\Http\Controllers;

use App\Association;
use App\Categorie;
use Illuminate\Http\Request;

class AssociationController extends Controller
{

    public function index()
    {
        $associations = Association::all();
        return view('accueil.associations',['associations'=>$associations]);
    }

    public function getListOf()
    {
        $countries = Association::select(['id', 'designation', 'referent_name', 'referent_forename', 'description','user_id']);
        return Datatables::of($countries)->make(true);
    }
}
