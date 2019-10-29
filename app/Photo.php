<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
    use SoftDeletes;
    protected $fillable = ['url'];
    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
