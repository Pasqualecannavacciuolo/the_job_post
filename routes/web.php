<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Auth
Route::get('/register', [RegisteredUserController::class, 'show']);
Route::post('/register', [RegisteredUserController::class, 'register']);
Route::get('/login', [SessionController::class, 'show']);
Route::post('/login', [SessionController::class, 'login']);
Route::post('/logout', [SessionController::class, 'logout']);
