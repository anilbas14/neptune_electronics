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

Route::get('/', function () {
//  $sql = "select * from products";
//  $item = DB::select($sql);
 
//  die($item[0]->name);
  return view('home');
    
 //   return view('welcome');
});
