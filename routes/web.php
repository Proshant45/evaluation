<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Http\Controllers\CategoryController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;




Route::middleware('guest')->group(function(){
    Route::get('/',[ProductController::class,'index']);
    Route::get('/login',[UserController::class,'create'])->name('login');
    Route::post('/login',[UserController::class,'store']);
    Route::get('/register',[UserController::class,'register']);
    Route::post('/register',[UserController::class,'registration']);

});

Route::middleware('auth')->group(function(){
    Route::post('/logout',[UserController::class,'destroy']);
    Route::get('/dashboard',[ProductController::class,'index']);
    Route::get('/product',[ProductController::class,'create']);
    Route::post('/product',[ProductController::class,'store']);
    Route::get('/category',[CategoryController::class,'index']);
    Route::get('/category/{id}',[CategoryController::class,'show']);
    Route::post('/category/{id}/edit',[CategoryController::class,'update']);
    Route::get('/category/create',[CategoryController::class,'create']);
    Route::get('/category/{id}/delete',[CategoryController::class,'destroy']);
    Route::post('/category',[CategoryController::class,'store']);
    Route::get('/product/{slug}/delete',[ProductController::class,'destroy']);
    Route::get('/product/{slug}/edit',[ProductController::class,'edit']);
    Route::post('/product/{slug}/edit',[ProductController::class,'update']);
    
});
Route::get('/product/{slug}',[ProductController::class,'show']);


