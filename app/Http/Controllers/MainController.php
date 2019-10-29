<?php

namespace App\Http\Controllers;

use App\About;
use App\Food;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $about = About::all()->first();
        $foods = Food::with(['photos'])->get();
        return view('website.main',compact('about','foods'));
    }

    public function panel()
    {
        return view('cms.index');
    }
}
