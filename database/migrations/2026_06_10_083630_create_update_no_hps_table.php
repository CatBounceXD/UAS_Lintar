<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('update_no_hps', function (Blueprint $table) {
            $table->id();
            $table->string('npm')->unique();
            $table->string('nama_mahasiswa');
            $table->string('no_hp');
            $table->boolean('is_aktif_2021')->default(0); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('update_no_hps');
    }
};