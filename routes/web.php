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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add', 'AnnoncesController@create')->name('add');
Route::post('/add', 'AnnoncesController@store');


Route::get('/list', 'AnnoncesController@index')->name('list');
Route::get('/see/{id}', 'AnnoncesController@show')->name('show');


Route::get('/edit/{id}', 'AnnoncesController@edit')->name('edit');
Route::put('/update/{id}', 'AnnoncesController@update')->name('update');

Route::get('/delete/{id}', 'AnnoncesController@destroy')->name('destroy');
