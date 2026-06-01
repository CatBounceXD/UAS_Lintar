<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up():void {
        Schema::create('laporan_mbkms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('status_mbkm');
            $table->string('keterangan');
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('laporan_mbkms');
    }
};