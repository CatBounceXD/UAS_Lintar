<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataMhsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', [BiodataMhsController::class, 'index']);
