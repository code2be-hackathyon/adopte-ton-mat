<?php

namespace App\Http\Controllers;

use App\Association;
use App\Categorie;
use App\Category;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categorie.details',['categories'=>$categories]);
    }



}
