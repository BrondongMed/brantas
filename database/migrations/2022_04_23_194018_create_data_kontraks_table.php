<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKontraksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kontraks', function (Blueprint $table) {
            $table->id();
            $table->string('ba_persiapan');
            $table->string('sppbj');
            $table->string('ba_rapat_persiapan');
            $table->string('daftar_personil');
            $table->string('jaminan_pelaksanaan');
            $table->string('no_kontrak');
            $table->string('ba_penyerahan');
            $table->string('spmk');
            $table->string('jadwal_pelaksanaan');
            $table->string('ba_pcm');
            $table->string('rpmk');
            $table->string('rkk');
            $table->string('addendum');
            $table->string('bast_1');
            $table->string('laporan_bmn');
            $table->string('ba_pphp');
            $table->string('bast_2');
            $table->unsignedBigInteger('kontrak_id');
            $table->foreign('kontrak_id')->references('id')->on('kontrak')->onDelete('cascade');
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
        Schema::dropIfExists('data_kontraks');
    }
}
