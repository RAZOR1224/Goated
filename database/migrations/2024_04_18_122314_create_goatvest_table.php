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
        Schema::create('goatvest', function (Blueprint $table) {
            $table->id();
            $table->string('foto_ktp')->nullable();
            $table->string('pendapatan_bulanan')->nullable();
            $table->string('sumber_penghasilan')->nullable();
            $table->string('kontak_lain')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goatvest');
    }
};
