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

Route::resource('products', 'API\Products');
Route::resource('stocks', 'API\Stocks');

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/productos',function(){
  return view('productsTable');
});
