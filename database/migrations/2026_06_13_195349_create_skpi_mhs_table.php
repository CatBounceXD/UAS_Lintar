<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('skpi_mhs', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('nama_mahasiswa');
            $table->integer('jumlah_kategori'); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('skpi_mhs');
    }
};