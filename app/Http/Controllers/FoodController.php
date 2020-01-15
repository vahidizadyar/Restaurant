<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Category;
use App\Food;
use App\Photo;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::paginate(10);
        return view('cms.foods.index', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('cms.foods.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('files')) {
            $food = new Food($request->all());
            $slug = str_replace(' ', '-', $request->title);
            $number = 1;
            while (Food::withTrashed()->whereSlug($slug)->exists()) {
                $slug .= '-' . $number;
            }
            $food->slug = $slug;
            $food->save();
            $food->category()->attach($request->category);

            for ($i = 0; $i < count($request->file('files')); $i++) {
                $imageName = time(). $i . '.' . $request->file('files')[$i]->getClientOriginalExtension();
                $request->file('files')[$i]->move(public_path('/images/foods'), $imageName);
                $photo = new Photo(['url'=>$imageName]);
                $food->photos()->save($photo);
            }
            return back()->withStatus('Food successfully created.');
        }
        return back()->withStyle('danger')->withStatus('Food not created.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Food $food
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $food = Food::whereSlug($slug)->firstOrFail();
        $comments = $food->activities()->with(['user'])->where('type', 1)->get();
        return view('website.foodDetail', compact('food', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Food $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        $categories = collect(Category::all());
        return view('cms.foods.edit',compact('categories','food'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Food $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        $food->update($request->all());
        $food->category()->sync($request->category);
        if ($request->hasFile('files')){
            for ($i = 0; $i < count($request->file('files')); $i++) {
                $imageName = time(). $i . '.' . $request->file('files')[$i]->getClientOriginalExtension();
                $request->file('files')[$i]->move(public_path('/images/foods'), $imageName);
                $photo = new Photo(['url'=>$imageName]);
                $food->photos()->save($photo);
            }
        }
        return redirect()->route('foods.index')->withStatus('Food successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Food $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        $food->delete();
        return back()->withStatus('Food successfully deleted.');
    }
}
