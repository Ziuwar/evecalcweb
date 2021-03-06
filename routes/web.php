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
    return view('home');
});

Route::get('/evelpapp', 'EvelpappController@index');
Route::get('/minerals', 'MineralsController@index');
Route::get('/pitiertwo','PiTierTwoController@index');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::post('contact/submit', 'MessagesController@submit');

Route::get('/google1dfc9aa4919ecec9.html', function (){
    return File::get(public_path() . '/google/google1dfc9aa4919ecec9.html');
});
