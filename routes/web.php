<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BahanAjarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bahan-ajar', [BahanAjarController::class, 'index']);