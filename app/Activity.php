<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
    public function getCreatedAtAttribute($value)
    {
        $carbon = Carbon::create($value);
        return (object)['created_at'=>$value,'string'=>$carbon->toDayDateTimeString()];
    }
}
