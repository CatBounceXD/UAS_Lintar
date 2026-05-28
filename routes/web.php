<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BahanAjarController;
use App\Http\Controllers\RpsController;
use App\Http\Controllers\SuratKeteranganController;
use App\Http\Controllers\SuratPermohonanController;
use App\Http\Controllers\AjuanCutiController;

Route::get('/bahan-ajar', [BahanAjarController::class, 'index']);
Route::get('/rps', [RpsController::class, 'index']);
Route::get('/ajuan-cuti', [AjuanCutiController::class, 'index']); 
Route::get('/surat-keterangan', [SuratKeteranganController::class, 'index']);
Route::get('/surat-permohonan', [SuratPermohonanController::class, 'index']);
