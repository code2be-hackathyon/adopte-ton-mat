<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HygieneController extends Controller
{
    public function index()
    {
        return view('Categorie/hygiene');
    }
}
