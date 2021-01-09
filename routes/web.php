<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdController;

// Homepages - - >
Route::get('/', [HomeController::class, 'index']);
Route::get('/index', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/me', [HomeController::class, 'me']);

Route::get('/signin', [HomeController::class, 'signin']);
Route::post('/signin_proc', [HomeController::class, 'signin_proc']);
Route::get('/signup', [HomeController::class, 'signup']);
Route::post('/signup_proc', [HomeController::class, 'signup_proc']);
Route::get('/signout', [HomeController::class, 'signout']);
// < - -



//Ad Pages - - >
Route::get('/ads/list', [AdController::class, 'index']);
Route::get('/ads', [AdController::class, 'index']);
Route::get('/ads/create', [AdController::class, 'create_form']);
Route::post('/ads/save', [AdController::class, 'save']);
Route::get('/ads/me-ads', [AdController::class, 'meads']);
Route::get('/ads/{ad}', [AdController::class, 'view']);
Route::get('/ads/update/{ad}', [AdController::class, 'update_form']);
Route::post('/ads/update/{ad}', [AdController::class, 'update']);
Route::get('/ads/delete/{ad}', [AdController::class, 'delete']);
// < - -
