<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up():void
    {
        Schema::create('informasi_pribadis', function (Blueprint $table) {
            $table->id();
            // Relasi ke User
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            
            // Kolom nama, npm, dan email dihapus karena sudah ada di Users
            $table->string('fakultas_prodi');
            $table->string('alamat');
            $table->string('telepon');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('informasi_pribadis');
    }
};