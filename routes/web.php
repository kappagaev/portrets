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

Route::get('/', function () {
    return view('welcome');
});


Route::get('random/portret', 'PortretController@getRandPortret');

Route::get('writer/add', 'WriterController@add');

Route::post('writer/store', 'WriterController@store');


Route::get('portret/add', 'PortretController@add');

Route::post('portret/store', 'PortretController@store');