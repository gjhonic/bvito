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

// Homepages - - >
Route::get('/', 'HomeController@index');
Route::get('/index', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
// < - -

//Ad Pages - - >
Route::get('/ads', 'AdController@index');
Route::get('/ad/{ad}', 'AdController@view');
// < - -
