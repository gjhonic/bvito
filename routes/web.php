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
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
// < - -

//Ad Pages - - >
Route::get('/ads', 'AdController@index');
Route::get('/ad/{ad}', 'AdController@view');
// < - -

// Route::get('/ads', function () {
//     $ads = App\Ad::get_not_sold();
//     return view('ads', compact('ads'));
// });
//
// Route::get('/ad/{ad}', function ($id) {
//     $ad = App\Ad::find($id);
//     return view('ad', compact('ad'));
// });
