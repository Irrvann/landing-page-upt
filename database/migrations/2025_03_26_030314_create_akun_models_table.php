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
        Schema::create('akun_models', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 11);
            $table->string('nama', 200);
            $table->string('no_hp', 13);
            $table->string('password', 255);
            $table->enum('status', ['aktif', 'tidak aktif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akun_models');
    }
};
