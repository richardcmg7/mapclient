<?php


use Illuminate\Support\Facades\DB;


Route::get('/', function () {
	 
     return view('welcome');
});

Auth::routes();

Route::get('/maptable', 'ClientController@index');
Route::get('/map', 'MapController@index');
Route::get('/update','UpdateController@update');

Route::get('/home', 'MapController@data');

