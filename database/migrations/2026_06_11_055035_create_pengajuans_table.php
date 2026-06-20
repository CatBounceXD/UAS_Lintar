<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            
            $table->enum('bahasa', ['Indonesia', 'Inggris']);
            $table->enum('jenis_surat', ['Beasiswa', 'Kantor Orang Tua', 'Kerja Praktek', 'Magang', 'Mahasiswa Aktif', 'Mengurus BPJS', 'Permohonan Passport', 'Permohonan Visa', 'Survei', 'Tugas Akhir']);

            $table->integer('sks');
            $table->decimal('ipk', 3, 2);
            $table->enum('fakultas', ['Teknologi Informasi', 'Ekonomi', 'Hukum', 'Teknik', 'Psikologi']);
            $table->enum('jurusan', ['S1 Teknik Informatika', 'S1 Sistem Informasi', 'S1 Ilmu Komunikasi']);
            $table->date('tanggal_surat');
            $table->boolean('persetujuan')->default(false);
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};