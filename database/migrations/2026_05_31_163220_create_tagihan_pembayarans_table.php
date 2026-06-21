<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // DI SINI BARU BENAR tagihan_pembayarans
        Schema::create('tagihan_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // Pengikat relasi
            $table->string('tahun_akademik');
            $table->string('jenis');
            $table->string('no_va');
            $table->string('tgl_batas_bayar');
            $table->string('jumlah_tagihan');
            $table->text('rincian');
            $table->string('bayar_bank')->nullable();
            $table->string('bayar_tanggal')->nullable();
            $table->string('bayar_nominal')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('tagihan_pembayarans');
    }
};