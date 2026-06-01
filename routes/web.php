<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KatalogBukuController;
use App\Http\Controllers\KatalogSkripsiController;
use App\Http\Controllers\BahanAjarController;
use App\Http\Controllers\RpsController;
use App\Http\Controllers\SuratKeteranganController;
use App\Http\Controllers\SuratPermohonanController;
use App\Http\Controllers\AjuanCutiController;
use App\Http\Controllers\lengkapDataController;
use App\Http\Controllers\BiodataMhsController;
use App\Http\Controllers\LaporanMbkmController;
use App\Http\Controllers\DispensasiBppController;
use App\Http\Controllers\DispensasiSksController;
use App\Http\Controllers\SkemaPembayaranController;
use App\Http\Controllers\TagihanPembayaranController;

Route::get('/bahan-ajar', [BahanAjarController::class, 'index']);
Route::get('/rps', [RpsController::class, 'index']);
Route::get('/ajuan-cuti', [AjuanCutiController::class, 'index']); 
Route::get('/surat-keterangan', [SuratKeteranganController::class, 'index']);
Route::get('/surat-permohonan', [SuratPermohonanController::class, 'index']);
Route::get('/lengkapData', [lengkapDataController::class, 'index']);
Route::get('/biodata', [BiodataMhsController::class, 'index']);
Route::get('/buku', [KatalogBukuController::class, 'index']);
Route::get('/skripsi', [KatalogSkripsiController::class, 'index']);
Route::get('/laporan-mbkm', [LaporanMbkmController::class, 'index']);
Route::get('/dispensasi-bpp', [DispensasiBppController::class, 'index']);
Route::get('/dispensasi-sks', [DispensasiSksController::class, 'index']);
Route::get('/uang-kuliah', [SkemaPembayaranController::class, 'index']);
Route::get('/tagihan-pembayaran', [TagihanPembayaranController::class, 'index']);

