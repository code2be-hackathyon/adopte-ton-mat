<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Category;
use App\Sub_category;
use Illuminate\Http\Request;

class SousCategorieController extends Controller
{
    public function getThisByCategoryId($categoryId)
    {
        $sub_categories = Sub_category::all()->where('category_id','=',$categoryId);

        return view('categorie.details',['sub_categories'=>$sub_categories]);
    }

}
