<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string('jaminan_um');
            $table->string('uang_muka');
            $table->string('termin');
            $table->string('jaminan_pemeliharaan');
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
        Schema::dropIfExists('data_pembayarans');
    }
}
