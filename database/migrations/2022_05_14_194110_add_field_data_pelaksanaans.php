<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldDataPelaksanaans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_pelaksanaans', function (Blueprint $table) {
            $table->string('f_mc_1')->nullable();
            $table->string('f_rambu_k3')->nullable();
            $table->string('f_kelengkapan_direksi')->nullable();
            $table->string('f_laporan_harian')->nullable();
            $table->string('f_lb')->nullable();
            $table->string('f_request_pelaksanaan')->nullable();
            $table->string('f_quality_control')->nullable();
            $table->string('f_foto_dokumentasi')->nullable();
            $table->string('f_hasil_lab')->nullable();
            $table->string('f_as_built')->nullable();
            $table->string('f_mc_2')->nullable();
            $table->string('f_vidio_dokumentasi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_pelaksanaans', function (Blueprint $table) {
            //
        });
    }
}
