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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'HomeController@index');

// Route Home
Route::get('/home', 'HomeController@index')->name('home');

// Route Distributor
Route::resource('distrib', 'distribController');
Route::get('/distrib/delete/{id}','distribController@destroy');
Route::get('/distrib', 'distribController@index');

// Route Buku
Route::resource('buku', 'bukuController');
Route::get('/buku/delete/{id}','bukuController@destroy');
Route::get('/buku', 'bukuController@index');

// Route Pasok
Route::resource('pasok', 'pasokController');
Route::get('/pasok/delete/{id}','pasokController@destroy');
Route::get('/pasok', 'pasokController@index');

// Route Penjualan
Route::resource('penjualan', 'penjualanController');
Route::get('/penjualan/delete/{id}','penjualanController@destroy');
Route::get('/penjualan', 'penjualanController@index');

// Route Kasir/User
Route::prefix('user')->group(function () {
    Route::get('/', 'UserController@index')->name('index.user');
    Route::get('/detail/{id}', 'UserController@show')->name('detail.user');
    Route::get('/edit/{id}', 'UserController@edit')->name('edit.user');
    Route::post('/update/{id}', 'UserController@update')->name('update.user');
    Route::get('/delete/{id}', 'UserController@destroy')->name('delete.user');
});

Auth::routes();