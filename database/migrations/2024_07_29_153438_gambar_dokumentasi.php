<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGambarDokumentasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gambar_dokumentasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('program_kerja_id');
            $table->string('path');
            $table->foreign('program_kerja_id')->references('id')->on('program_kerja')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gambar_dokumentasi');
    }
}
