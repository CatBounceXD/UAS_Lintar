<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BahanAjarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bahan-ajar', [BahanAjarController::class, 'index']);

use App\Http\Controllers\AjuanCutiController;

// Saat mengetik /ajuan-cuti di browser, aplikasi akan menjalankan fungsi index di controller
Route::get('/ajuan-cuti', [AjuanCutiController::class, 'index']);