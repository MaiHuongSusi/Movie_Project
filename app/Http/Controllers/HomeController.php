<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class HomeController extends Controller
{
    function index()
    {
        $listfilm = Film::all()->toArray();
        return view('front.pages.welcome', compact('listfilm'));
    }
}
