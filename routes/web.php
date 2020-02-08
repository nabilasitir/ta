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

// route blog
Route::get('/cuaca', 'CuacaController@index')->name('cuaca');
Route::get('/cuaca/post', 'CuacaController@post');
Route::get('/cuaca/kurva', 'CuacaController@kurva');
Route::get('/cuaca/riwayat', 'CuacaController@riwayat');

// Route::get('/prediksi_svm','CuacaController@index');

Route::post('/prediksi_svm/store','CuacaController@store');