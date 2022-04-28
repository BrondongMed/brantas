<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataLelangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_lelangs', function (Blueprint $table) {
            $table->id();
            $table->string('kak');
            $table->string('spppk');
            $table->string('dok_perencanaan');
            $table->string('rup');
            $table->string('dok_persiapan');
            $table->string('sk_pokja');
            $table->string('hps');
            $table->string('dok_pemilihan');
            $table->string('bahp');
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
        Schema::dropIfExists('data_lelangs');
    }
}
