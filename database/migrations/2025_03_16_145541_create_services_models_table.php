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
        Schema::create('services_models', function (Blueprint $table) {
            $table->id();
            $table->string('kode_services', 11);
            $table->string('nama_services', 50);
            $table->string('deskripsi_services', 50);
            $table->string('foto', 50);
            $table->string('status', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_models');
    }
};
