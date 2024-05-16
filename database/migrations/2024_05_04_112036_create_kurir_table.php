<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKurirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kurir', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap'); // Full Name
            $table->string('email')->unique();
            $table->string('nomor_hp'); // Phone Number
            $table->enum('jenis_kelamin', ['L', 'P']); // Gender: 'L' for male, 'P' for female
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kurir');
    }
}