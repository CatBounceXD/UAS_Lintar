<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('permohonans', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->enum('bahasa', ['Indonesia', 'Inggris']);
            $table->enum('jenis_permohonan', [
                'Kerja Praktik', 
                'Kunjungan', 
                'Pengajuan Beasiswa', 
                'Pengajuan Proposal', 
                'Survei atau Riset', 
                'Visa'
            ]);
            
            $table->string('nama_instansi');
            $table->text('alamat_instansi');
            $table->string('nim_lain')->nullable();
            $table->string('keterangan_tujuan');
            $table->date('tgl_awal');
            $table->date('tgl_akhir');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('permohonans');
    }
};