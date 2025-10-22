<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::apiResource('author', AuthorController::class)->only(['index', 'show']);
Route::apiResource('genre', GenreController::class)->only(['index', 'show']);
Route::get('/book', [BookController::class, 'index']);

Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::post('author', [AuthorController::class, 'store']);
    Route::put('author/{author}', [AuthorController::class, 'update']);
    Route::delete('author/{author}', [AuthorController::class, 'destroy']);

    Route::post('genre', [GenreController::class, 'store']);
    Route::put('genre/{genre}', [GenreController::class, 'update']);
    Route::delete('genre/{genre}', [GenreController::class, 'destroy']);
});