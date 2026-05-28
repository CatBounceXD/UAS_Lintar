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
        Schema::create('surat_keterangans', function (Blueprint $table) {
            $table->id();
            $table->string('no');
            $table->string('tanggal');
            $table->string('no_surat');
            $table->string('jenis_surat_keterangan');
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
        Schema::dropIfExists('surat_keterangans');
    }
};
