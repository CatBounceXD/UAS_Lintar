<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('isi_skpi', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');    // Kolom kategori (Menjawab error di screenshot)
            $table->string('jenis')->default('Mandiri');
            $table->string('kegiatan');
            $table->string('tingkat');
            $table->string('klasifikasi');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->string('file_bukti');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('isi_skpi');
    }
};