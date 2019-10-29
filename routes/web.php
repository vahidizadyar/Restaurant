<?php
Route::get('/', 'MainController@index')->name('main');
Route::get('/food/{slug}', 'FoodController@show')->name('foodDetail');
Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('logout','UserController@manual_logout');
    Route::middleware(['checkAdmin'])->group(function () {
        Route::prefix('panel')->group(function () {
            // views
            Route::get('/', 'MainController@panel')->name('panel');
            Route::get('food/index', 'FoodController@index')->name('foods.index');
            Route::get('food/create', 'FoodController@create')->name('foods.create');
            Route::get('food/{food}/edit', 'FoodController@edit')->name('foods.edit');
            Route::get('category/index', 'CategoryController@indexCms')->name('category.index');
            Route::get('category/{category}/edit', 'CategoryController@edit')->name('category.edit');
            Route::get('gallery/index', 'GalleryController@indexCms')->name('gallery.index');
            Route::get('gallery/create', 'GalleryController@create')->name('gallery.create');
            Route::get('user/index', 'UserController@index')->name('user.index');
            // posts
            Route::post('food/store', 'FoodController@store')->name('foods.store');
            Route::post('food/{food}/update', 'FoodController@update')->name('foods.update');
            Route::post('food/{food}/delete', 'FoodController@destroy')->name('foods.delete');
            Route::post('photo/{photo}/delete', 'PhotoController@destroy')->name('photo.delete');
            Route::post('category/store', 'CategoryController@store')->name('category.store');
            Route::post('category/{category}/update', 'CategoryController@update')->name('category.update');
            Route::post('category/{category}/delete', 'CategoryController@destroy')->name('category.delete');
            Route::post('gallery/{gallery}/delete', 'GalleryController@destroy')->name('gallery.delete');
            Route::post('gallery/store', 'GalleryController@store')->name('gallery.store');
            Route::get('user/{user}/edit', 'UserController@edit')->name('user.edit');
            Route::post('user/{user}/ban', 'UserController@ban')->name('user.ban');
        });
    });
    Route::post('/food/{food}/comment/store', 'ActivityController@storeComment')->name('addComment');
    Route::post('/rate/store', 'RatingController@store')->name('addRate');
});
