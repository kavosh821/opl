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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home/index', 'HomeController@index')->name('home');
Route::post('/pro/store', 'ProController@store')->name('pro.submit');
Route::get('/pro/pro', 'ProController@pro')->name('pro');
Route::get('/pro/product','CategoryController@product')->name('Category');

   
