<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
            Schema::create('bahan_ajar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('kode_matkul');
            $table->string('nama_matkul'); 
            $table->string('kelas');
            $table->text('dosen_pengajar');
            $table->string('ruang_waktu');
            $table->string('keterangan'); 
            $table->string('kode_teams')->nullable(); 
            $table->string('file_sap')->nullable();
            $table->string('email_dosen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bahan_ajar');
    }
};
