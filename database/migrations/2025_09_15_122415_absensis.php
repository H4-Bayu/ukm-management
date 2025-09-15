<?php

// database/migrations/xxxx_xx_xx_create_absensis_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('absensis', function (Blueprint $table) {
            $table->id('id_absensi');
            $table->unsignedBigInteger('id_kegiatan');
            $table->unsignedBigInteger('id_anggota');
            $table->enum('status', ['hadir', 'izin', 'alpha'])->default('alpha');
            $table->dateTime('waktu_absen')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('id_kegiatan')->references('id_kegiatan')->on('kegiatans')->onDelete('cascade');
            $table->foreign('id_anggota')->references('id_anggota')->on('anggotas')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('absensis');
    }
};
