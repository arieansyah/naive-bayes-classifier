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
            $table->enum('cuaca',['1','2','3']);
            $table->enum('temperatur',['1','2','3']);
            $table->enum('kelembapan',['1','2']);
            $table->enum('angin',['1','2']);
            $table->enum('bermain',['1','2']);
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
