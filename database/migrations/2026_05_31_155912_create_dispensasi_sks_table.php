<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('dispensasi_skss', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            
            $table->string('tahun_akademik');
            $table->string('status_pengajuan')->default('TIDAK DAPAT MENGAJUKAN');
            $table->date('tanggal_pengajuan')->nullable(); 
            $table->text('alasan_pengajuan')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('dispensasi_skss');
    }
};