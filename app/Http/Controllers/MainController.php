<?php

namespace App\Http\Controllers;

use App\About;
use App\Category;
use App\Food;

class MainController extends Controller
{
    public function index()
    {
        $about = About::all()->first();
        $foods = Category::with(['foods' => function ($query) {
            $query->with(['photos'])->latest();
        }])->get();
        return view('website.main', compact('about', 'foods'));
    }

    public function about()
    {
        return view('website.about');
    }

    public function panel()
    {
        return view('cms.index');
    }

    public function catering()
    {
        return view('website.catering');
    }

    public function category($category)
    {
        $category = Category::with(['foods' => function ($query) {
            $query->orderByDesc('id');
        }])->whereId($category)->get()->first();
        return view('website.category', compact('category'));
    }
}
