<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Food;
use Illuminate\Http\Request;

class ActivityController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->ban) {
            switch ($request->type) {
                case (1):
                    $activity = new Activity();
                    $activity->user_id = auth()->id();
                    $activity->food_id = $request->food_id;
                    $activity->type = $request->type;
                    $activity->content = $request->message;
                    $activity->save();
                    break;
//            case (2):
//                $activity = Activity::where('user_id',auth()->id())
//                    ->where('food_id',$request->food_id)
//                    ->where('type',$request->type);
//                if ($activity->exists()){
//                    $activity->delete();
//                }else{
//                    $activity = new Activity();
//                    $activity->user_id = auth()->id();
//                    $activity->food_id = $request->food_id;
//                    $activity->type = $request->type;
//                    $activity->save();
//                }
//                break;
                default:
                    break;
            }
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activity  $userActivity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $userActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $userActivity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $userActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $userActivity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $userActivity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity  $userActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $userActivity)
    {
        //
    }

    public function storeComment(Request $request,Food $food)
    {
        $activity  = new Activity();
        $activity->content = $request->get('content');
        $activity->user_id = auth()->id();
        $activity->type = 1;
        $food->activities()->save($activity);
        return back();
    }
}
