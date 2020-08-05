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
    return view('adminlte.table');
});

// Laravel 1
Route::get('home', 'HomeController@home');
Route::get('register', 'AuthController@registrasi');
Route::post('welcome', 'AuthController@welcome');

// Admin LTE
Route::get('/master', function () {
    return view('adminlte.master');
});
Route::get('/items', function () {
    return view('items.index');
});
Route::get('/data-tables', function () {
    return view('adminlte.datatable');
});

