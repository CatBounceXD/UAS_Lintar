<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']); 

// Akademik
use App\Http\Controllers\Akademik\HistoriNilaiController;
use App\Http\Controllers\Akademik\KsmController;
use App\Http\Controllers\Akademik\KehadiranController;
use App\Http\Controllers\Akademik\KhsController;
use App\Http\Controllers\Akademik\UtsController;
use App\Http\Controllers\Akademik\TranskripController;
use App\Http\Controllers\Akademik\KalenderController;
use \App\Http\Controllers\Akademik\StatusKuliahController;
Route::get('/histori-nilai', [HistoriNilaiController::class, 'index']);
Route::get('/ksm', [KsmController::class, 'index']);
Route::get('/kehadiran', [KehadiranController::class, 'index']);
Route::get('/khs', [KhsController::class, 'index']);
Route::get('/uts', [UtsController::class, 'index']);
Route::get('/transkrip', [TranskripController::class, 'index']);
Route::get('/kalender-akademik', [KalenderController::class, 'index']);
Route::get('/status-kuliah', [StatusKuliahController::class, 'index']);

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
Route::get('/lengkapdata', [lengkapDataController::class, 'index']);
Route::get('/biodata', [BiodataMhsController::class, 'index']);

// Cuti Online
use App\Http\Controllers\cuti_online\AjuanCutiController;
Route::get('/ajuan-cuti', [AjuanCutiController::class, 'index']); 

// Layanan Mahasiswa
use App\Http\Controllers\layanan_mahasiswa\SuratKeteranganController;
use App\Http\Controllers\layanan_mahasiswa\SuratPermohonanController;
Route::get('/surat-keterangan', [SuratKeteranganController::class, 'index']);
Route::get('/surat-permohonan', [SuratPermohonanController::class, 'index']);

use App\Http\Controllers\SuratKeterangan\PengajuanController;
    Route::prefix('layanan-mahasiswa')->group(function () {
    Route::get('/', [PengajuanController::class, 'index'])->name('layanan.index');
    Route::post('/store', [PengajuanController::class, 'store'])->name('layanan.store');
    Route::get('/{pengajuan}', [PengajuanController::class, 'show'])->name('layanan.show');
});

// Uang Kuliah
use App\Http\Controllers\UangKuliah\DispensasiBppController;
use App\Http\Controllers\UangKuliah\DispensasiSksController;
use App\Http\Controllers\UangKuliah\SkemaPembayaranController;
use App\Http\Controllers\UangKuliah\TagihanPembayaranController;
Route::get('/dispensasi-bpp', [DispensasiBppController::class, 'index']);
Route::get('/dispensasi-sks', [DispensasiSksController::class, 'index']);
Route::get('/skema-pembayaran', [SkemaPembayaranController::class, 'index']);
Route::get('/uang-kuliah', [SkemaPembayaranController::class, 'index']);
Route::get('/tagihan-pembayaran', [TagihanPembayaranController::class, 'index']);

// MBKM
use App\Http\Controllers\MBKM\LaporanMbkmController;
Route::get('/mbkm', [LaporanMbkmController::class, 'index']); 