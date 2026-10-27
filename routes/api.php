<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProdukController;
use App\Http\Controllers\Api\PesananController;

/*
|--------------------------------------------------------------------------
| API Routes - Rich Gallery
|--------------------------------------------------------------------------
*/

Route::get('/produk', [ProdukController::class, 'index']);
Route::post('/produk', [ProdukController::class, 'store']);

Route::get('/pesanan', [PesananController::class, 'index']);
Route::post('/pesanan', [PesananController::class, 'store']);
