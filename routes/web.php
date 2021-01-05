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
Route::get('/ads/list', [AdController::class, 'index']);
Route::get('/ads', [AdController::class, 'index']);
Route::get('/ads/create', [AdController::class, 'create_form']);
Route::post('/ads/save', [AdController::class, 'save']);
Route::get('/ads/{ad}', [AdController::class, 'view']);
Route::get('/ads/update/{ad}', [AdController::class, 'update_form']);
Route::post('/ads/update/{ad}', [AdController::class, 'update']);
// < - -
