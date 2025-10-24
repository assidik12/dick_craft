<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('users',[UserController::class, 'index']);
Route::post('users/register',[UserController::class, 'store']);
Route::post('users/login',[UserController::class, 'login']);

Route::post('/projects', [ProjectController::class, 'store']);
