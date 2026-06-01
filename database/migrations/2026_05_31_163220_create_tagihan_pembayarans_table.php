<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tagihan_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_akademik'); // Contoh: 2025 GENAP, 2025 GANJIL
            $table->string('jenis');          // Contoh: BPP (Full Payment), SKS (Full Payment)
            $table->string('no_va');
            $table->string('tgl_batas_bayar');
            $table->string('jumlah_tagihan');
            $table->text('rincian');
            $table->string('bayar_bank');
            $table->string('bayar_tanggal');
            $table->string('bayar_nominal');
            $table->string('status');         // Contoh: LUNAS
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tagihan_pembayarans');
    }
};