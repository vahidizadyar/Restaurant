<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\About
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\About whereUpdatedAt($value)
 */
	class About extends \Eloquent {}
}

namespace App{
/**
 * App\Activity
 *
 * @property int $id
 * @property int $user_id
 * @property int $food_id
 * @property int $type
 * @property string|null $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Food $food
 * @property-read \App\User $user
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Activity newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Activity onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Activity query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Activity whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Activity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Activity whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Activity whereFoodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Activity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Activity whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Activity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Activity whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Activity withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Activity withoutTrashed()
 */
	class Activity extends \Eloquent {}
}

namespace App{
/**
 * App\Category
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $photo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Food[] $foods
 * @property-read int|null $foods_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Category onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Category withoutTrashed()
 */
	class Category extends \Eloquent {}
}

namespace App{
/**
 * App\Food
 *
 * @property int $id
 * @property string|null $title
 * @property string $slug
 * @property string|null $content
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Category[] $category
 * @property-read int|null $category_count
 * @property-read mixed $likes
 * @property-read mixed $rank
 * @property-read mixed $seen
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Menu[] $menus
 * @property-read int|null $menus_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Photo[] $photos
 * @property-read int|null $photos_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Rating[] $ratings
 * @property-read int|null $ratings_count
 * @property-read \App\Type $type
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Food newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Food newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Food onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Food query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Food whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Food whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Food whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Food whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Food wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Food whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Food whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Food whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Food withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Food withoutTrashed()
 */
	class Food extends \Eloquent {}
}

namespace App{
/**
 * App\Gallery
 *
 * @property int $id
 * @property string|null $url
 * @property string $photo
 * @property string|null $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Gallery onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Gallery whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Gallery withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Gallery withoutTrashed()
 */
	class Gallery extends \Eloquent {}
}

namespace App{
/**
 * App\Menu
 *
 * @property int $id
 * @property string|null $title
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Food[] $foods
 * @property-read int|null $foods_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Menu newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Menu onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Menu query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Menu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Menu whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Menu whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Menu whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Menu whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Menu withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Menu withoutTrashed()
 */
	class Menu extends \Eloquent {}
}

namespace App{
/**
 * App\Photo
 *
 * @property int $id
 * @property int $food_id
 * @property string|null $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Food $food
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Photo onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo whereFoodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Photo withoutTrashed()
 */
	class Photo extends \Eloquent {}
}

namespace App{
/**
 * App\Rating
 *
 * @property int $id
 * @property int $user_id
 * @property int $food_id
 * @property float $rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Food $food
 * @property-read \App\User $user
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Rating onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereFoodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Rating withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Rating withoutTrashed()
 */
	class Rating extends \Eloquent {}
}

namespace App{
/**
 * App\Type
 *
 * @property int $id
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Food[] $foods
 * @property-read int|null $foods_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Type newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Type newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Type onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Type query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Type whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Type whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Type whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Type whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Type whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Type withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Type withoutTrashed()
 */
	class Type extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property int $role
 * @property int $ban
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Activity[] $Activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Rating[] $ratings
 * @property-read int|null $ratings_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereBan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\User withoutTrashed()
 */
	class User extends \Eloquent {}
}

