<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'adminka-arm-page', 'namespace' => 'Admin'], function() {

    Route::get('/register', 'AuthController@registerForm');
    Route::post('/register', 'AuthController@register')->name('admin.register');
    Route::get('/login', 'AuthController@loginForm');
    Route::post('/login', 'AuthController@login')->name('admin.login');
    Route::get('/logout', 'AuthController@logout');

    Route::group(['middleware' => ['admin']], function() {
        Route::get('/', 'DashboardController@index')->name('admin.index');
    });
});

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function() {
    Route::get('/', 'HomeController@index');
    Route::get('/accessories', 'GalleryController@accessories');
    Route::get('/accessories/{slug}', 'GalleryController@accessoriesList');
    Route::get('/our-works', 'CategoryController@ourWorks');
    Route::get('/our-works/{slug}', 'CategoryController@ourWorksList');

    Route::get('/contacts', function () {
        return view('pages.contacts');
    });
    Route::get('/about-us', function () {
        return view('pages.about_us');
    });
});


