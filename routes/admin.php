<?php

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard.home');



Route::group(['prefix'=>'dashboard'],function () {

    Route::group(['prefix' => 'profile', 'as' => 'profile.'],function (){
        Route::get('/', 'ProfileController@index')->name('index');
        Route::get('create', 'ProfileController@create')->name('create');
        Route::post('store', 'ProfileController@store')->name('store');
        Route::get('destroy/{id}', 'ProfileController@destroy')->name('destroy');
        Route::get('edit/{id}', 'ProfileController@edit')->name('edit');
        Route::post('update/{id}', 'ProfileController@update')->name('update');
    });


    Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
        Route::get('/', 'BlogController@index')->name('index');
        Route::get('create', 'BlogController@create')->name('create');
        Route::post('store', 'BlogController@store')->name('store');
        Route::get('destroy/{id}', 'BlogController@destroy')->name('destroy');
        Route::get('edit/{id}', 'BlogController@edit')->name('edit');
        Route::post('update/{id}', 'BlogController@update')->name('update');
    });

    Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
        Route::get('/', 'ProductController@index')->name('index');
        Route::get('create', 'ProductController@create')->name('create');
        Route::post('store', 'ProductController@store')->name('store');
        Route::get('destroy/{id}', 'ProductController@destroy')->name('destroy');
        Route::get('edit/{id}', 'ProductController@edit')->name('edit');
        Route::post('update/{id}', 'ProductController@update')->name('update');
    });

    Route::group(['prefix' => 'gallery', 'as' => 'gallery.'], function () {
        Route::get('/', 'GalleryController@index')->name('index');
        Route::get('create', 'GalleryController@create')->name('create');
        Route::post('store', 'GalleryController@store')->name('store');
        Route::get('destroy/{id}', 'GalleryController@destroy')->name('destroy');
        Route::get('edit/{id}', 'GalleryController@edit')->name('edit');
        Route::post('update/{id}', 'GalleryController@update')->name('update');
    });

 Route::group(['prefix' => 'work_experience', 'as' => 'work_experience.'], function () {
        Route::get('/', 'WorkExperienceController@index')->name('index');
        Route::get('create', 'WorkExperienceController@create')->name('create');
        Route::post('store', 'WorkExperienceController@store')->name('store');
        Route::get('destroy/{id}', 'WorkExperienceController@destroy')->name('destroy');
        Route::get('edit/{id}', 'WorkExperienceController@edit')->name('edit');
        Route::post('update/{id}', 'WorkExperienceController@update')->name('update');
    });


    Route::group(['prefix' => 'appInfo','as'=>'appInfo.'],function (){
        Route::get('index', 'AppInfoController@index')->name('index');
        Route::get('create', 'AppInfoController@create')->name('create');
        Route::post('store', 'AppInfoController@store')->name('store');
        Route::get('destroy/{id}', 'AppInfoController@destroy')->name('destroy');
        Route::get('edit/{id}', 'AppInfoController@edit')->name('edit');
        Route::post('update', 'AppInfoController@update')->name('update');
    });

    Route::view('/pages', 'dashboard.pages.index')->name('pages.index');
    Route::resource('page','PageController');
    Route::get('page/delete/{id}','PageController@delete')->name('page.delete');
    Route::get('/custom-pages/edit/{id}', [PageController::class, 'edit'])->name('custom-pages.edit');
    Route::get('/custom-pages/destroy/{id}', [PageController::class, 'destroy'])->name('custom-pages.destroy');


});
