
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
// use App\Http\Controllers\UserController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [UserController::class, 'show']);
});

