<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunicationController extends Controller
{
    public function index()
    {
        return view('Categorie/communication');
    }
}
