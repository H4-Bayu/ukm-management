<?php

// database/migrations/xxxx_xx_xx_create_anggotas_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id('id_anggota');
            $table->unsignedBigInteger('id_user')->unique();
            $table->string('npm')->unique();
            $table->string('nama');
            $table->string('prodi');
            $table->string('alamat')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('foto_profil')->nullable();
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('anggotas');
    }
};
