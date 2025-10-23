<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TransactionController;
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

Route::middleware(['role:admin'])->group(function () {
    Route::post('author', [AuthorController::class, 'store']);
    Route::put('author/{author}', [AuthorController::class, 'update']);
    Route::delete('author/{author}', [AuthorController::class, 'destroy']);

    Route::post('genre', [GenreController::class, 'store']);
    Route::put('genre/{genre}', [GenreController::class, 'update']);
    Route::delete('genre/{genre}', [GenreController::class, 'destroy']);
});

// role admin (admin only)
Route::middleware(['auth:api', 'role:admin'])->group(function () {
    Route::get('/transaction', [TransactionController::class, 'index']);
    Route::delete('/transaction/{transaction}', [TransactionController::class, 'destroy']);
});


// customer only
Route::middleware(['auth:api', 'role:customer'])->group(function () {
    Route::post('/transaction', [TransactionController::class, 'store']);
    Route::get('/transaction/{transaction}', [TransactionController::class, 'show']);
    Route::put('/transaction/{transaction}', [TransactionController::class, 'update']);
});