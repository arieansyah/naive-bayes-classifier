<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataTraining extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datatrinings', function (Blueprint $table){
            $table->increments('id');
            $table->enum('pelayanan_pegawai',['1','2','3']);
            $table->enum('ketanggapan_pegawai',['1','2','3']);
            $table->enum('kesopanan_pegawai',['1','2','3']);
            $table->enum('ketepatan_pelayanan',['1','2','3']);
            $table->enum('fasilitas',['1','2','3']);
            $table->enum('keamanan_kantor',['1','2','3']);
            $table->enum('tingkat_kepuasan',['1','2','3','4']);
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
      Schema::dropIfExists('datatrinings');
    }
}
