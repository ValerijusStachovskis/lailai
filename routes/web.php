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

Route::get('/welcome1', 'Welcome1Controller@index');

Route::get('/pirma_midi', function () {
    return view('pirma_midi');
});

Route::get('/pirma_maxi', function () {
    return view('pirma_maxi');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/pirma_midi', 'PirmaMidiController@pirmaMidi');

Route::post('/pirma_maxi', 'PirmaMaxiController@pirmaMaxi');
