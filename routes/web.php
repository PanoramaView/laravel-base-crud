<?php

use Illuminate\Support\Facades\Route;

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




//Comics

// ci mostrera' tutti gli comics disponibili 
Route::get('/comics', 'ComicsController@index')->name('comics.index');
//Route::post('/comics', 'ComicsController@store')->name('comics.store');
//safe data per create nuovo Comic
Route::post("/comics", "ComicsController@store")->name("comics.store");
//form per creare nuovo Comics
Route::get('/comics/create', 'ComicsController@create')->name('comics.create');
//mostra i dettagli di un comic
Route::get('/comics/{xComics}', 'ComicsController@show')->name('comics.show');

//Route::resource("/comics", "ComicsController");