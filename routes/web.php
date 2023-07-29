<?php

use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::setLocale())->middleware(['localeSessionRedirect', 'localizationRedirect'])->group(function () {


    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('catalogs', [HomeController::class, 'catalogs'])->name('catalogs');

    Route::group(['as' => 'website.'], function () {

        Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
            Route::get('/', 'ProductController@index')->name('index');
            Route::get('create', 'ProductController@create')->name('create');
            Route::post('store', 'ProductController@store')->name('store');
            Route::get('destroy/{id}', 'ProductController@destroy')->name('destroy');
            Route::get('edit/{id}', 'ProductController@edit')->name('edit');
            Route::post('update/{id}', 'ProductController@update')->name('update');
            Route::get('show/{product}', 'ProductController@show')->name('show');
            Route::get('show_gallery/{product}', 'ProductController@showGallery')->name('show_gallery');
            Route::get('search', 'ProductController@search')->name('search');
        });

        Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
            Route::get('about', 'AppInfoController@about')->name('about');
            Route::get('create', 'AppInfoController@create')->name('create');
            Route::post('store', 'AppInfoController@store')->name('store');
            Route::get('destroy/{id}', 'AppInfoController@destroy')->name('destroy');
            Route::get('edit/{id}', 'AppInfoController@edit')->name('edit');
            Route::post('update/{id}', 'AppInfoController@update')->name('update');
            Route::get('show/{product}', 'AppInfoController@show')->name('show');
        });

        Route::group(['prefix' => 'work_experience', 'as' => 'work_experience.'], function () {
            Route::get('/', 'WorkExperienceController@index')->name('index');
            Route::get('create', 'WorkExperienceController@create')->name('create');
            Route::post('store', 'WorkExperienceController@store')->name('store');
            Route::get('destroy/{id}', 'WorkExperienceController@destroy')->name('destroy');
            Route::get('edit/{id}', 'WorkExperienceController@edit')->name('edit');
            Route::post('update/{id}', 'WorkExperienceController@update')->name('update');
            Route::get('show/{product}', 'WorkExperienceController@show')->name('show');
        });

        Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
            Route::get('/', 'ContactUsController@index')->name('index');
            Route::get('create', 'ContactUsController@create')->name('create');
            Route::post('store', 'ContactUsController@store')->name('store');
            Route::get('destroy/{id}', 'ContactUsController@destroy')->name('destroy');
            Route::get('edit/{id}', 'ContactUsController@edit')->name('edit');
            Route::post('update/{id}', 'ContactUsController@update')->name('update');
            Route::get('show/{product}', 'ContactUsController@show')->name('show');
        });

        Route::group(['prefix' => 'gallery', 'as' => 'gallery.'], function () {
            Route::get('/', 'GalleryController@index')->name('index');
            Route::get('create', 'GalleryController@create')->name('create');
            Route::post('store', 'GalleryController@store')->name('store');
            Route::get('destroy/{id}', 'GalleryController@destroy')->name('destroy');
            Route::get('edit/{id}', 'GalleryController@edit')->name('edit');
            Route::post('update/{id}', 'GalleryController@update')->name('update');
            Route::get('show/{product}', 'GalleryController@show')->name('show');
        });

        Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
            Route::get('/', 'BlogController@index')->name('index');
            Route::get('/{blog}', 'BlogController@show')->name('show');
            Route::get('create', 'BlogController@create')->name('create');
            Route::post('store', 'BlogController@store')->name('store');
            Route::get('destroy/{id}', 'BlogController@destroy')->name('destroy');
            Route::get('edit/{id}', 'BlogController@edit')->name('edit');
            Route::post('update/{id}', 'BlogController@update')->name('update');
        });


    });
});
