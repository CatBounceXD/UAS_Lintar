<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quesioners', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('frekuensi_kunjungan');
            $table->text('alasan_kunjungan');

            $table->string('frekuensi_akses_web');
            $table->text('alasan_akses_web');

            $table->integer('p1');
            $table->integer('p2'); $table->string('alasan_p2')->nullable();
            $table->integer('p3'); $table->string('alasan_p3')->nullable();
            $table->integer('p4');
            $table->integer('p5'); $table->string('alasan_p5')->nullable();
            $table->integer('p6'); $table->string('alasan_p6')->nullable();
            $table->integer('p7'); $table->string('alasan_p7')->nullable();
            $table->integer('p8'); $table->string('alasan_p8')->nullable();

            $table->integer('i1'); $table->string('alasan_i1')->nullable();
            $table->integer('i2'); $table->string('alasan_i2')->nullable();
            $table->integer('i3');
            $table->integer('i4'); $table->string('alasan_i4')->nullable();
            $table->integer('i5'); $table->string('alasan_i5')->nullable();
            $table->integer('i6');
            $table->integer('i7');
            $table->integer('i8'); $table->string('alasan_i8')->nullable();

        for ($r = 1; $r <= 7; $r++) {
            $table->integer('r' . $r);
        }

            $table->text('saran')->nullable();

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quesioners');
    }
};