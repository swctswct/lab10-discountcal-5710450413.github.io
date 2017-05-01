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

// Route::get('/', function () {
//     return view('welcome');
// });
//
// Route::get('stations', 'api\stationController@index');
// Route::get('stations/create', 'stationController@create');
// Route::get('stations/{id}', 'stationController@show');


Route::get('/','api\calculateController@index');
Route::post('calculate','api\calculateController@save');
