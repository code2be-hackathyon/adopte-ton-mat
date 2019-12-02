<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeplacementController extends Controller
{
    public function index()
    {
        return view('Categorie/deplacement');
    }
}
