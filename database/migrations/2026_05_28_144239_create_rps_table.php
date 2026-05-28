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
    Schema::create('rps', function (Blueprint $table) {
        $table->id();
        $table->string('fakultas');
        $table->string('jurusan');
        $table->string('kode_matkul');
        $table->string('nama_matkul');
        $table->integer('sks');
        $table->string('file_rps')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rps');
    }
};
