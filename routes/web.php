<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lengkapDataController;
use App\Http\Controllers\BiodataMhsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lengkapData', [lengkapDataController::class, 'index']);
Route::get('/biodata', [BiodataMhsController::class, 'index']);