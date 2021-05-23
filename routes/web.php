<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AreaController;





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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', 'App\Http\Controllers\HomeController@index');



Route::get('/about-us', function () {
    return view('website.about-us');
});

Route::get('/contact-us', function () {
    return view('website.contact-us');
});

Route::get('/store', function () {
    return view('website.store');
});

Route::get('/single', function () {
    return view('website.single');
});

// Route::get('/category', function () {
//     return view('website.category');
// });

Route::post('/nearme', 'App\Http\Controllers\SearchController@near_me')->name('nearme');

//Route::get('/search', 'SearchController@search')->name('search');

Route::post('/searchby', 'App\Http\Controllers\SearchController@searchby')->name('searchby');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/template',function(){
	return view('layouts.master');
});


//Route::get('shops/create', [ShopController::class, 'create']);    

Route::any('/create','CategoryController@getCategoryList'); 

//Route::get('/catshow', ['CategoryController@showCategory']);    


// Route::resource('/shops', ShopController::class);

//Route::get('/nearme','SearchController@near_me'); 
 



Route::resource('products', ProductController::class);

Route::resource('shops', ShopController::class);

Route::resource('promotions', PromotionController::class);





// Route::resource('products', 'ProductsController');