<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

// default (boleh tetap ada)
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// ================== TAMBAHAN ==================

// REGISTER
Route::post('/register', [AuthController::class, 'register']);

// LOGIN
Route::post('/login', [AuthController::class, 'login']);

// GET USER (butuh token)
Route::middleware('auth:sanctum')->get('/me', [AuthController::class, 'me']);