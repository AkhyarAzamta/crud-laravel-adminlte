<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mahasiswa_id');
            $table->unsignedBigInteger('dosen_id');
            $table->timestamps();

            $table->foreign('mahasiswa_id')
                  ->references('id')->on('mahasiswa')
                  ->onDelete('cascade');

            $table->foreign('dosen_id')
                  ->references('id')->on('dosen')
                  ->onDelete('cascade');

            $table->unique(['mahasiswa_id', 'dosen_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosen_mahasiswa');
    }
}
