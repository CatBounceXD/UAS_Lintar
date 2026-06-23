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
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('tahun_akademik');
            $table->string('kode_matkul');
            $table->string('nama_matkul');
            $table->integer('sks');
            $table->string('kelas');
            $table->string('status_matkul')->default('B');
            $table->integer('jumlah_pertemuan')->default(0);
            $table->integer('jumlah_kehadiran')->default(0);
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