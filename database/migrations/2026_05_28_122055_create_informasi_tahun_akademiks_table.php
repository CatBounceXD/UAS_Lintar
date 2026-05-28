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
        Schema::create('informasi_tahun_akademiks', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_akademik_pengajuan');
            $table->date('tanggal_buka_pengajuan');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_tahun_akademiks');
    }
};
