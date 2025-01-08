<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class,'login']);
Route::get('/logount', [AuthController::class, 'logout']);