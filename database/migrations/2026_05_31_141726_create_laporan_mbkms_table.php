<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up():void
    {
        Schema::create('laporan_mbkms', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('npm');
            $table->string('prodi');
            $table->string('status_mbkm');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_mbkms');
    }
};
