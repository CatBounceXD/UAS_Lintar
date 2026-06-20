<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ubah_passwords', function (Blueprint $table) {
            $table->id();
            $table->string('nim'); 
            $table->string('nama_mahasiswa');
            $table->string('email_office');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ubah_passwords');
    }
};