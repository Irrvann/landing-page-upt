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
        Schema::create('sosmed_models', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sosmed', 50);
            $table->string('link_sosmed', 255);
            $table->string('foto_sosmed', 255);
            $table->string('status', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sosmed_models');
    }
};
