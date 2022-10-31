<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/search', [SearchController::class,'searchImage']);
Route::resource('/', SearchController::class);
// Route::post('/', [SearchController::class, 'home_function']);