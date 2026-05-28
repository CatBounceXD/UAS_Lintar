<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BahanAjarController;
use App\Http\Controllers\RpsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bahan-ajar', [BahanAjarController::class, 'index']);
Route::get('/rps', [RpsController::class, 'index']);