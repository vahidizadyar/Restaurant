<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $fillable = ['title'];
    public function foods()
    {
        return $this->belongsToMany(Food::class,'categories_foods');
    }
}
