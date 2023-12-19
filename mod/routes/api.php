<?php

use App\Http\Controllers\SmartphoneCategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!`
|
*/

Route::prefix("v1")->group(function() {
    Route::apiResource("smartphone-category", SmartphoneCategoryController::class);
});


Route::post('/login', [AuthController::class, 'login']);

// Grup rute yang memerlukan otentikasi
Route::middleware('auth:sanctum')->group(function () {
    // Tambahkan rute API yang memerlukan otentikasi di sini
});