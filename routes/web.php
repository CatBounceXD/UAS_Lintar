<?php

use Illuminate\Support\Facades\Route;

// Perkuliahan
use App\Http\Controllers\Perkuliahan\BahanAjarController;
use App\Http\Controllers\Perkuliahan\RpsController;
Route::get('/bahan-ajar', [BahanAjarController::class, 'index']);
Route::get('/rps', [RpsController::class, 'index']);

// Perpustakaan
use App\Http\Controllers\Perpustakaan\KatalogBukuController;
use App\Http\Controllers\Perpustakaan\KatalogSkripsiController;
Route::get('/buku', [KatalogBukuController::class, 'index']);
Route::get('/skripsi', [KatalogSkripsiController::class, 'index']);

// Biodata
use App\Http\Controllers\Biodata\lengkapDataController;
use App\Http\Controllers\Biodata\BiodataMhsController;
use App\Http\Controllers\Biodata\UpdateNoHpController;
use App\Http\Controllers\Biodata\UbahPasswordController;
Route::get('/lengkapdata', [lengkapDataController::class, 'index']);
Route::get('/lengkapdata/dashboard', [lengkapDataController::class, 'proses']);
Route::get('/biodata', [BiodataMhsController::class, 'index']);
Route::get('/updatenohp', [UpdateNoHpController::class, 'index']);
Route::get('/ubah-password', [UbahPasswordController::class, 'index']);

//SKPI
use App\Http\Controllers\SKPI\SkpiMhsController;
use App\Http\Controllers\SKPI\IsiSkpiController;
Route::get('/bukti-skpi', [SkpiMhsController::class, 'index']);
Route::get('/isi-skpi', [IsiSkpiController::class, 'index']);
Route::get('/isi-skpi/tambah', [IsiSkpiController::class, 'create']);
Route::post('/isi-skpi/simpan', [IsiSkpiController::class, 'store']);

// Cuti Online
use App\Http\Controllers\cuti_online\AjuanCutiController;
Route::get('/ajuan-cuti', [AjuanCutiController::class, 'index']); 

// Layanan Mahasiswa
use App\Http\Controllers\layanan_mahasiswa\SuratKeteranganController;
use App\Http\Controllers\layanan_mahasiswa\SuratPermohonanController;
Route::get('/surat-keterangan', [SuratKeteranganController::class, 'index']);
Route::get('/surat-permohonan', [SuratPermohonanController::class, 'index']);

// Uang Kuliah
use App\Http\Controllers\UangKuliah\DispensasiBppController;
use App\Http\Controllers\UangKuliah\DispensasiSksController;
use App\Http\Controllers\UangKuliah\SkemaPembayaranController;
use App\Http\Controllers\UangKuliah\TagihanPembayaranController;
Route::get('/dispensasi-bpp', [DispensasiBppController::class, 'index']);
Route::get('/dispensasi-sks', [DispensasiSksController::class, 'index']);
Route::get('/uang-kuliah', [SkemaPembayaranController::class, 'index']);
Route::get('/tagihan-pembayaran', [TagihanPembayaranController::class, 'index']);

// MBKM
use App\Http\Controllers\MBKM\LaporanMbkmController;
Route::get('/mbkm', [LaporanMbkmController::class, 'index']); 