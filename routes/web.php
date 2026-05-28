<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogBukuController;
use App\Http\Controllers\KatalogSkripsiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku', [KatalogBukuController::class, 'index']);
Route::get('/skripsi', [KatalogSkripsiController::class, 'index']);