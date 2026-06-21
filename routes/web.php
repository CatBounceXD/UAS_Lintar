<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;

// Akademik
use App\Http\Controllers\Akademik\HistoriNilaiController;
use App\Http\Controllers\Akademik\KsmController;
use App\Http\Controllers\Akademik\KehadiranController;
use App\Http\Controllers\Akademik\KhsController;
use App\Http\Controllers\Akademik\UtsController;
use App\Http\Controllers\Akademik\TranskripController;
use App\Http\Controllers\Akademik\KalenderController;
use App\Http\Controllers\Akademik\StatusKuliahController;

// Perkuliahan
use App\Http\Controllers\Perkuliahan\BahanAjarController;
use App\Http\Controllers\Perkuliahan\RpsController;

// Perpustakaan
use App\Http\Controllers\Perpustakaan\KatalogBukuController;
use App\Http\Controllers\Perpustakaan\KatalogSkripsiController;
use App\Http\Controllers\Perpustakaan\QuesionerController;

// Biodata
use App\Http\Controllers\Biodata\lengkapDataController;
use App\Http\Controllers\Biodata\BiodataMhsController;

// Cuti Online
use App\Http\Controllers\cuti_online\AjuanCutiController;

// Layanan Mahasiswa
use App\Http\Controllers\layanan_mahasiswa\SuratKeteranganController;
use App\Http\Controllers\layanan_mahasiswa\SuratPermohonanController;

// Uang Kuliah
use App\Http\Controllers\UangKuliah\DispensasiBppController;
use App\Http\Controllers\UangKuliah\DispensasiSksController;
use App\Http\Controllers\UangKuliah\SkemaPembayaranController;
use App\Http\Controllers\UangKuliah\TagihanPembayaranController;

// MBKM
use App\Http\Controllers\MBKM\LaporanMbkmController;

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('dashboard'); 

    // Akademik
    Route::get('/histori-nilai', [HistoriNilaiController::class, 'index']);
    Route::get('/ksm', [KsmController::class, 'index']);
    Route::get('/kehadiran', [KehadiranController::class, 'index']);
    Route::get('/khs', [KhsController::class, 'index']);
    Route::get('/uts', [UtsController::class, 'index']);
    Route::get('/transkrip', [TranskripController::class, 'index']);
    Route::get('/kalender-akademik', [KalenderController::class, 'index']);
    Route::get('/status-kuliah', [StatusKuliahController::class, 'index']);

    // Perkuliahan
    Route::get('/bahan-ajar', [BahanAjarController::class, 'index']);
    Route::get('/rps', [RpsController::class, 'index']);

    // Perpustakaan
    Route::get('/buku', [KatalogBukuController::class, 'index']);
    Route::get('/skripsi', [KatalogSkripsiController::class, 'index']);
    Route::view('/status-anggota', 'Perpustakaan.status-anggota')->name('status.anggota');
    Route::get('/quesioner', [QuesionerController::class, 'index'])->name('quesioner.index');
    Route::get('/quesioner/create', [QuesionerController::class, 'create'])->name('quesioner.create');
    Route::post('/quesioner/store', [QuesionerController::class, 'store'])->name('quesioner.store');

    // Biodata
    Route::get('/lengkapdata', [lengkapDataController::class, 'index']);
    Route::get('/biodata', [BiodataMhsController::class, 'index']);

    // Cuti Online
    Route::get('/ajuan-cuti', [AjuanCutiController::class, 'index']); 

    // Layanan Mahasiswa
    Route::get('/surat-keterangan', [SuratKeteranganController::class, 'index']);
    Route::get('/surat-permohonan', [SuratPermohonanController::class, 'index']);
    Route::prefix('layanan-mahasiswa')->group(function () {
        Route::post('/store', [SuratKeteranganController::class, 'store'])->name('layanan.store');
    });

    // Uang Kuliah
    Route::get('/dispensasi-bpp', [DispensasiBppController::class, 'index']);
    Route::get('/dispensasi-sks', [DispensasiSksController::class, 'index']);
    Route::get('/uang-kuliah', [SkemaPembayaranController::class, 'index']);
    Route::get('/tagihan-pembayaran', [TagihanPembayaranController::class, 'index'])->name('tagihan.pembayaran');
    
    Route::get('/skema-pembayaran', [SkemaPembayaranController::class, 'index']);
    Route::post('/skema-pembayaran/pilih', [SkemaPembayaranController::class, 'store'])->name('skema.pilih');
    Route::post('/skema-pembayaran/store', [SkemaPembayaranController::class, 'store'])->name('skema.store');

    // MBKM 
    Route::get('/mbkm', [LaporanMbkmController::class, 'index']); 
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';