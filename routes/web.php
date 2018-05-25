<?php


use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ClientController;


Route::get('/', function () {

     return view('welcome');
});

Auth::routes();

Route::get('/maptable', 'ClientController@index')->name('datos');

Route::get('/client/crear', 'ClientController@create')->name('client.create');
Route::post('/client/crear', 'ClientController@store')->name('client.store');


Route::get('/maptable/{id}/edit', 'ClientController@edit')->name('edit_maptable');
Route::put('/maptable/{id}/update}', 'ClientController@update')->name('client.update');

Route::delete('/maptable/borrar/{id}', 'ClientController@delete')->name('delete_client_path');

Route::get('/borrar/{id}}', 'ClientController@borrar');

Route::get('/map', 'MapController@index');
Route::get('/update','UpdateController@update');


Route::get('/home', 'MapController@data');
