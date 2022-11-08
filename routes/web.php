<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'home']);

Route::get('/menu2', [HomeController::class, 'menu2']);

Route::get('/menu3', [HomeController::class, 'menu3']);


