<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PersonaController;

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

Route::get('/', 'App\Http\Controllers\PersonaController@index');
Route::get('/crear', function(){
    return view('create');
});
Route::post('/guardar', 'App\Http\Controllers\PersonaController@store');
Route::get('/edit/{id}', 'App\Http\Controllers\PersonaController@edit');
Route::get('/eliminar/{id}', 'App\Http\Controllers\PersonaController@destroy');
Route::post('/update/{id}', 'App\Http\Controllers\PersonaController@update');

