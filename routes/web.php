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
Route::get('/faq', 'HomeController@faq');
Route::get('/teste.html', function(){
    return view('teste', ['name' => "AT Company"]);
});

Route::get('/teste2.html', function(){
    return view('teste2');
});
