<?php

namespace App\Http\Controllers;

use App\Association;
use App\Materiel;
use Illuminate\Http\Request;

class MaterielController extends Controller
{
    public static function index()
    {
        $materiels = Materiel::all();
        return view('home',['materiels'=>$materiels]);
    }
}
