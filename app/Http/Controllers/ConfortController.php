<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfortController extends Controller
{
    public function index()
    {
        return view('Categorie/confort');
    }
}
