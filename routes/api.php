<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\OngkirController;
use App\Http\Controllers\ResiController;
use App\Http\Controllers\LacakController;
use App\Http\Controllers\RiwayatController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', [\App\Http\Controllers\UserController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout']);
});
Route::get('/paket', [PaketController::class, 'index']);
Route::post('/paket', [PaketController::class, 'store']);
Route::put('/paket/{id_paket}', [PaketController::class, 'update']);
Route::delete('/paket/{id_paket}', [PaketController::class, 'destroy']);
Route::get('/ongkir', [OngkirController::class, 'index']);
Route::post('/ongkir', [OngkirController::class, 'store']);
Route::get('/resi/{no_resi}', [ResiController::class, 'show']);
Route::delete('/resi/{no_resi}', [ResiController::class, 'destroy']);
Route::get('/lacak', [LacakController::class, 'index']);
Route::post('/lacak/{id_paket}', [LacakController::class, 'store']);
Route::get('/riwayat', [RiwayatController::class, 'index']);
Route::post('/riwayat', [RiwayatController::class, 'store']);
Route::delete('/riwayat/{id_riwayat}', [RiwayatController::class, 'destroy']);