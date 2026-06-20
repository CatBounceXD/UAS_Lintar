<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('studi_mahasiswas', function (Blueprint $table) {
            $table->id();
            
            // Relasi ke tabel users
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            
            // Identitas Semester & Matkul
            $table->string('tahun_akademik'); // Contoh: "Genap 2025"
            $table->string('kode_matkul');
            $table->string('nama_matkul');
            $table->integer('sks');
            $table->string('kelas'); // Contoh: "D"
            $table->string('status_matkul')->default('B'); // B = Baru, U = Ulang
            
            // Data Kehadiran
            $table->integer('jumlah_pertemuan')->default(0);
            $table->integer('jumlah_kehadiran')->default(0);
            
            // Data Nilai (Bisa null karena mungkin belum ujian)
            $table->decimal('nilai_uts', 5, 2)->nullable();
            $table->decimal('nilai_angka', 5, 2)->nullable();
            $table->string('nilai_huruf')->nullable();
            $table->decimal('bobot', 4, 2)->nullable();
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('studi_mahasiswas');
    }
};