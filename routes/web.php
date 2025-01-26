<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[UserController::class,'create']);
Route::post('/',[UserController::class,'store']);
Route::get('/login',[UserController::class,'create']);
Route::post('/login',[UserController::class,'store']);
Route::get('/register',[UserController::class,'register']);
Route::post('/register',[UserController::class,'registration']);

