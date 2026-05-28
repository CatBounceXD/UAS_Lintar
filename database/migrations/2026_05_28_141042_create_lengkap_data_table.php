<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lengkap_datas', function (Blueprint $table) {
            $table->id();
            // Data Utama Mahasiswa
            $table->string('npm')->unique();
            $table->string('nama_mahasiswa');
            $table->string('no_rekening')->nullable();
            $table->string('tempat_tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->text('alamat');
            $table->string('telepon')->nullable();
            $table->string('handphone');
            $table->string('email');
            
            // Data Kelengkapan Sekolah & Ortu
            $table->string('asal_sekolah');
            $table->string('no_ijazah')->nullable(); 
            $table->string('tgl_ijazah')->nullable();
            $table->string('nama_orang_tua')->nullable();
            $table->text('alamat_orang_tua')->nullable();
            $table->string('telepon_orang_tua')->nullable();
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lengkap_datas');
    }
};