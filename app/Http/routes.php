<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('products', 'ProductController');
Route::get('/cart', 'Front@cartget');
Route::post('/cart', 'Front@cartpost');
Route::post('/clear-cart', 'Front@clearcart');
Route::post('/checkout', 'Front@checkout');
Route::post('/remove', 'Front@remove');

Route::get('/', function () {
  return view('home');
});
