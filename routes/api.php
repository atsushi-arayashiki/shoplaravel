<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShopsController;


Route::post('/users', [UsersController::class, 'post']);
Route::post('/like', [LikesController::class, 'post']);
Route::delete('/like',[LikesController::class, 'delete']);
Route::apiResource('/users', UsersController::class);
Route::post('/login', [LoginController::class, 'post']);
Route::get('/shops', [ShopsController::class, 'get']);
Route::get('/shop/{shop_id}', [ShopsController::class, 'getDetail']);
