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
use App\Http\Controllers\perpustakaan\QuesionerController;
Route::get('/buku', [KatalogBukuController::class, 'index']);
Route::get('/skripsi', [KatalogSkripsiController::class, 'index']);
Route::view('/status-anggota', 'Perpustakaan.status-anggota')->name('status.anggota');
Route::get('/quesioner', [QuesionerController::class, 'index'])->name('quesioner.index');
Route::get('/quesioner/create', [QuesionerController::class, 'create'])->name('quesioner.create');
Route::post('/quesioner/store', [QuesionerController::class, 'store'])->name('quesioner.store');

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
Route::delete('/isi-skpi/hapus', [IsiSkpiController::class, 'destroy']);

// Cuti Online
use App\Http\Controllers\cuti_online\AjuanCutiController;
Route::get('/ajuan-cuti', [AjuanCutiController::class, 'index']); 

// Layanan Mahasiswa
use App\Http\Controllers\layanan_mahasiswa\SuratKeteranganController;
use App\Http\Controllers\layanan_mahasiswa\SuratPermohonanController;
Route::get('/surat-keterangan', [SuratKeteranganController::class, 'index']);
Route::get('/surat-permohonan', [SuratPermohonanController::class, 'index']);
Route::prefix('layanan-mahasiswa')->group(function () {
    Route::post('/store', [SuratKeteranganController::class, 'store'])->name('layanan.store');
});

// Uang Kuliah
use App\Http\Controllers\UangKuliah\DispensasiBppController;
use App\Http\Controllers\UangKuliah\DispensasiSksController;
use App\Http\Controllers\UangKuliah\SkemaPembayaranController;
use App\Http\Controllers\UangKuliah\TagihanPembayaranController;
Route::get('/dispensasi-bpp', [DispensasiBppController::class, 'index']);
Route::get('/dispensasi-sks', [DispensasiSksController::class, 'index']);
Route::get('/uang-kuliah', [SkemaPembayaranController::class, 'index']);
Route::get('/tagihan-pembayaran', [TagihanPembayaranController::class, 'index'])->name('tagihan.pembayaran');
Route::get('/skema-pembayaran', [SkemaPembayaranController::class, 'index']);
Route::post('/skema-pembayaran/pilih', [SkemaPembayaranController::class, 'store'])->name('skema.pilih');
Route::get('/skema-pembayaran', [SkemaPembayaranController::class, 'index']);
Route::post('/skema-pembayaran/store', [SkemaPembayaranController::class, 'store'])->name('skema.store');



// MBKM
use App\Http\Controllers\MBKM\LaporanMbkmController;
Route::get('/mbkm', [LaporanMbkmController::class, 'index']); 