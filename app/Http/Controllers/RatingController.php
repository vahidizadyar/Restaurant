<?php

namespace App\Http\Controllers;

use App\Food;
use App\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rating = Rating::where('user_id', auth()->id())->where('food_id', $request->food_id);
        if (!$rating->exists()) {
            $rating = new Rating();
            $rating->user_id = auth()->id();
            $rating->food_id = $request->food_id;
            $rating->rate = $request->rate;
            $rating->save();
        } else {
            $rating->update(['rate' => $request->rate]);
        }
        $food = Food::find($request->food_id);
        return response()->json(['rank' => $food->rank]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Rating $userRating
     * @return \Illuminate\Http\Response
     */
    public function show(Rating $userRating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Rating $userRating
     * @return \Illuminate\Http\Response
     */
    public function edit(Rating $userRating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Rating $userRating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rating $userRating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Rating $userRating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rating $userRating)
    {
        //
    }
}
