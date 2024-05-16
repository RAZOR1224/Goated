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
        Schema::create('mitra', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peternakan')->nullable();
            $table->string('alamat_peternakan')->nullable();
            $table->string('kapasitas_kandang')->nullable();
            $table->string('jenis_kambing')->nullable();
            $table->string('foto_ktp')->nullable();
            $table->string('lama_beternak')->nullable();
            $table->string('foto_kandang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mitra');
    }
};