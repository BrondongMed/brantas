<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPenyediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penyedias', function (Blueprint $table) {
            $table->id();
            $table->string('vendor');
            $table->string('wakil_penyedia');
            $table->string('alamat');
            $table->string('koresponden');
            $table->string('npwp');
            $table->string('Bank');
            $table->string('Rekening');
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
        Schema::dropIfExists('data_penyedias');
    }
}
