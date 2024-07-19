<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('movies', [MovieController::class, 'index']);
    Route::get('movie/{id}', [MovieController::class, 'show']);
    Route::get('director/{id}', [DirectorController::class, 'show']);
    Route::get('actor/{id}', [ActorController::class, 'show']);
    Route::get('movies/genre/{title}',[MovieController::class, 'getMoviesByGenreTitle']);
    Route::get('movies/rating/{rating}',[MovieController::class, 'getMoviesByRating']);
});
