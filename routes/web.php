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
Route::get('/comics/{comic}', 'ComicsController@show')->name('comics.show');
//salva i dati a db di un comic esistente
Route::match(["PUT", "PATCH"], '/comics/{comic}', 'ComicsController@update')->name('comics.update');
//deleta i dati a db di un comic esistente
Route::delete('/comics/{comic}', 'ComicsController@destroy')->name('comics.destroy');
//mostra il form per modificare un comic
Route::get('/comics/{xcomic}/edit', 'ComicsController@edit')->name('comics.edit');

//Route::resource("/comics", "ComicsController");