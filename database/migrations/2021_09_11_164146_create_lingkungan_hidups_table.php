<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLingkunganHidupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lingkungan_hidups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sungai_id');
            $table->string('tahun');
            $table->string('file');
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
        Schema::dropIfExists('lingkungan_hidups');
    }
}
