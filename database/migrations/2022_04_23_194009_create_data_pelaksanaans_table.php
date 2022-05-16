<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPelaksanaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pelaksanaans', function (Blueprint $table) {
            $table->id();
            $table->string('mc');
            $table->string('shop_drawing');
            $table->string('k3');
            $table->string('direksi_kit');
            $table->string('laporan_harian');
            $table->string('laporan_bulanan');
            $table->string('request_pekerjaan');
            $table->string('quality_control');
            $table->string('foto_dokumentasi');
            $table->string('hasil_lab');
            $table->string('as_build');
            $table->string('mc_100');
            $table->string('video_dokumentasi');
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
        Schema::dropIfExists('data_pelaksanaans');
    }
}
