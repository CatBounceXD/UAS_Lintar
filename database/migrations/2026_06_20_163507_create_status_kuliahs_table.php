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
        Schema::create('status_kuliahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('tahun_akademik');
            $table->string('status')->default('Aktif');
            $table->integer('sks_ambil');
            $table->integer('sks_peroleh')->nullable();
            $table->decimal('ips', 4, 2)->nullable();
            $table->integer('sks_ambil_kumulatif');
            $table->integer('sks_peroleh_kumulatif')->nullable();
            $table->decimal('ipk', 4, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_kuliahs');
    }
};
