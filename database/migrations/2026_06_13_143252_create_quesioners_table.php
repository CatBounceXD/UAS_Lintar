<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quesioners', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('frekuensi_kunjungan');
            $table->text('alasan_kunjungan');

            $table->string('frekuensi_akses_web');
            $table->text('alasan_akses_web');

            $table->tinyInteger('petugas_memahami');
            $table->tinyInteger('petugas_membimbing');
            $table->tinyInteger('fasilitas_memadai');
            $table->tinyInteger('koleksi_lengkap');
            $table->tinyInteger('kenyamanan_ruangan');

            $table->text('saran')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quesioners');
    }
};