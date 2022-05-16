<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldDataLelangs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_lelangs', function (Blueprint $table) {
            $table->string('surat_penetapan_ppk')->nullable();
            $table->string('surat_penetapan_ppk1')->nullable();
            $table->string('sk_pokja1')->nullable();
            $table->string('f_KAK')->nullable();
            $table->string('f_surat_penetapan_ppk')->nullable();
            $table->string('f_dok_Perencanaan')->nullable();
            $table->string('f_dok_persiapan')->nullable();
            $table->string('f_rup_siprup')->nullable();
            $table->string('f_sk_pokja')->nullable();
            $table->string('f_HPS')->nullable();
            $table->string('f_baph')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_lelangs', function (Blueprint $table) {
            //
        });
    }
}
