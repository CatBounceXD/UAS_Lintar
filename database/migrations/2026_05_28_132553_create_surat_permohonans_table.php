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
        Schema::create('surat_permohonans', function (Blueprint $table) {
            $table->id();
            $table->string('no');
            $table->date('tanggal'); // Sesuai request, ini pakai tipe date
            $table->string('no_surat');
            $table->string('jenis_permohonan');
            $table->string('bahasa');
            $table->string('view_pdf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_permohonans');
    }
};
