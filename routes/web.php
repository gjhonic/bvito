<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdController;

// Homepages - - >
Route::get('/', [HomeController::class, 'index']);
Route::get('/index', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
// < - -

//Ad Pages - - >
Route::get('/ads', [AdController::class, 'index']);
Route::get('/ads/create', [AdController::class, 'create_form']);
Route::post('/ads/create', [AdController::class, 'create']);
Route::get('/ad/{ad}', [AdController::class, 'view']);
// < - -
