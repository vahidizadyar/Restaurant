<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'price', 'content', 'slug','description'];
    protected $appends = ['rank', 'likes', 'seen'];

    public function menus()
    {
        return $this->belongsToMany(Menu::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function category()
    {
        return $this->belongsToMany(Category::class, 'categories_foods');
    }

    public function getRankAttribute()
    {
        $rank = $this->ratings()->avg('rate');
        return (!is_null($rank) ? (floor($rank * 2) / 2) : 5);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function getLikesAttribute()
    {
        return $this->activities()->where('type', 2)->count(['id']);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function getSeenAttribute()
    {
        return $this->activities()->where('type', 1)->count(['id']);
    }


    protected static function boot()
    {
        parent::boot();

        self::deleting(function ($food){
            $food->photos()->delete();
        });


    }
}
