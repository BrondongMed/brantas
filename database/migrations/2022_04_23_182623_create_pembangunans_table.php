<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembangunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontrak', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket');
            $table->string('sumber_dana');
            $table->string('jenis_kontrak');
            $table->string('nilai_kontrak');
            $table->string('tahun_anggaran');
            $table->unsignedBigInteger('sungai_id');
            $table->foreign('sungai_id')->references('id')->on('sungais')->onDelete('cascade');
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
        Schema::dropIfExists('pembangunans');
    }
}
