<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldDataKontraks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_kontraks', function (Blueprint $table) {
          
            $table->string('SPPBJ1')->nullable();

            $table->string('ba_rapat_persiapan1')->nullable();
           
            $table->string('ba_rapat_persiapan_kontrak1')->nullable();
  
            $table->string('jaminan_pelaksanaan1')->nullable();
 
            $table->string('no_kontrak1')->nullable();
  
            $table->string('ba_penyerahan1')->nullable();
 
            $table->string('bapcm1')->nullable();
           
            $table->string('SPMK1')->nullable();
   
            $table->string('RMPK1')->nullable();
        
            $table->string('rkk1')->nullable();
   
            $table->string('addendum1')->nullable();
  
            $table->string('BAST1')->nullable();
    
            $table->string('ba_pphp1')->nullable();
       
            $table->string('BAST_II1')->nullable();
            $table->string('f_ba_penunjukan')->nullable();
            $table->string('f_SPPBJ')->nullable();
            $table->string('f_ba_rapat_persiapan')->nullable();
            $table->string('f_ba_rapat_persiapan_kontrak')->nullable();
            $table->string('f_daftar_personil')->nullable();
            $table->string('f_jaminan_pelaksanaan')->nullable();
            $table->string('f_no_kontrak')->nullable();
            $table->string('f_ba_penyerahan')->nullable();
            $table->string('f_bapcm')->nullable();
            $table->string('f_jadwal_pelaksanaan')->nullable();
            $table->string('f_SPMK')->nullable();
            $table->string('f_RMPK')->nullable();
            $table->string('f_rkk')->nullable();
            $table->string('f_addendum')->nullable();
            $table->string('f_BAST')->nullable();
            $table->string('f_laporan_bmn')->nullable();
            $table->string('f_ba_pphp')->nullable();
            $table->string('f_BAST_II')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_kontraks', function (Blueprint $table) {
            //
        });
    }
}
