<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LikesController;


Route::post('/api/users', [UsersController::class, 'post']);
Route::post('/api/like', [LikesController::class, 'post']);
Route::delete('/api/like',[LikesController::class, 'delete']);
