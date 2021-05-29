<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LikesController;


Route::post('/users', [UsersController::class, 'post']);
Route::post('/like', [LikesController::class, 'post']);
Route::delete('/like',[LikesController::class, 'delete']);
Route::apiResource('/users', UsersController::class);

