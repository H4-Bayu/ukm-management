<?php

// database/migrations/xxxx_xx_xx_create_verification_tokens_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('verification_tokens', function (Blueprint $table) {
            $table->id('id_token');
            $table->unsignedBigInteger('id_user');
            $table->string('token');
            $table->dateTime('expired_at');
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('verification_tokens');
    }
};
