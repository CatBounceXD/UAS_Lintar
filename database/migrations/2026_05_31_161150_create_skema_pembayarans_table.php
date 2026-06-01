<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('skema_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim');
            $table->string('semester_tahun');
            $table->string('va_full');
            $table->string('nominal_full');
            $table->string('va_termin1');
            $table->string('nominal_termin1');
            $table->string('va_termin2');
            $table->string('nominal_termin2');
            $table->string('total_termin');
            $table->string('skema_dipilih');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('skema_pembayarans');
    }
};