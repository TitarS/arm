<?php
use App\Menu;
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
        Route::resource('/products', 'ProductController');
        Route::get('/products/delete-image/{productID}/{imageID}', 'ProductController@deleteImage')->name('products.delete-image');
        Route::resource('/galleries', 'GalleryController');
        Route::resource('/categories', 'CategoryController');
    });
});

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function() {
    Route::get('/', 'HomeController@index')->name('home');
 /*   Route::get('/accessories', 'GalleryController@accessories')->name('accessories.index');;
    Route::get('/accessories/{slug}', 'GalleryController@accessoriesList')->name('accessories.show');*/
   Route::get('/accessories', 'CategoryController@accessories')->name('accessories.index');;
   Route::get('/accessories/{slug}', 'CategoryController@accessoriesList')->name('accessories.show');

    Route::get('/our-works', 'CategoryController@ourWorks')->name('our-works.index');
    Route::get('/our-works/{slug}', 'CategoryController@ourWorksList')->name('our-works.show');
    Route::get('/product/{slug}', 'ProductController@show')->name('product.show');

    Route::get('/contacts', function () {
        $currentMenu = Menu::where('slug', 'contacts')->firstOrFail();
        return view('pages.contacts', compact('currentMenu'));
    })->name('contacts');

    Route::get('/about-us', function () {
        $currentMenu = Menu::where('slug', 'about-us')->firstOrFail();
        return view('pages.about_us', compact('currentMenu'));
    })->name('about');
});

Route::post('/customers-contact', 'CustomersController@contact')->name('customers.contact');
Route::post('/customers-calculate', 'CustomersController@calculate')->name('customers.calculate');
Route::post('/customers-callback', 'CustomersController@callback')->name('customers.callback');
