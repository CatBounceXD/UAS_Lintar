<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KatalogBukuController;

Route::get('/buku', [KatalogBukuController::class, 'index']);