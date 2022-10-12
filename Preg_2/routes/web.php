<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarreraController;

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
Route::get('/Inicio', function () {
    return view('welcome');
})->name('inicio');
Route::get('/Carreras/inf', function () {
    return view('carreras.inf');
})->name('info');
Route::get('Carreras/mat', function () {
    return view('carreras.mat');
})->name('mate');
Route::get('Carreras/fis', function () {
    return view('carreras.fis');
})->name('fisica');
Route::get('Carreras/est', function () {
    return view('carreras.est');
})->name('estadistica');
