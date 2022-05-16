<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldDataPembayarans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_pembayarans', function (Blueprint $table) {
            $table->string('f_jaminan_uang')->nullable();
            $table->string('f_uang_muka')->nullable();
            $table->string('f_termyn')->nullable();
            $table->string('jaminan_pemeliharaan1')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_pembayarans', function (Blueprint $table) {
            //
        });
    }
}
