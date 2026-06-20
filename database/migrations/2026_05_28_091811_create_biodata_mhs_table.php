<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('biodata_mhs', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete();
            
            $table->string('npm')->unique();
            $table->string('nama_mahasiswa');
            $table->string('email')->unique();
            $table->integer('is_aktif_2021')->default(1); // 1 = Aktif

            $table->string('no_rekening')->nullable();
            $table->string('tempat_tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->text('alamat');
            $table->string('telepon')->nullable();
            $table->string('handphone')->nullable();
            
            // DATA SEKOLAH
            $table->string('asal_sekolah');
            $table->string('no_ijazah');
            $table->string('tgl_ijazah');
            
            // DATA ORANG TUA
            $table->string('nama_orang_tua');
            $table->text('alamat_orang_tua');
            $table->string('telepon_orang_tua')->nullable();
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('biodata_mhs');
    }
};