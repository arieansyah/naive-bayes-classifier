<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTastingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_tastings', function (Blueprint $table) {
            $table->increments('id_testing');
            $table->float('pelayanan_pegawai');
            $table->float('ketanggapan_pegawai');
            $table->float('kesopanan_pegawai');
            $table->float('ketepatan_pelayanan');
            $table->float('fasilitas');
            $table->float('keamanan_kantor');

            $table->float('presentasePuas');
            $table->float('presentaseSangatPuas');
            $table->float('presentaseSangatTidakPuas');
            $table->float('presentaseTidakPuas');
            $table->string('hasil');

            $table->float('ppelayanan_pegawaiPuas');
            $table->float('pketanggapan_pegawaiPuas');
            $table->float('pkesopanan_pegawaiPuas');
            $table->float('pketepatan_pelayananPuas');
            $table->float('pfasilitasPuas');
            $table->float('pkeamanan_kantorPuas');

            $table->float('ppelayanan_pegawaiSangatPuas');
            $table->float('pketanggapan_pegawaiSangatPuas');
            $table->float('pkesopanan_pegawaiSangatPuas');
            $table->float('pketepatan_pelayananSangatPuas');
            $table->float('pfasilitasSangatPuas');
            $table->float('pkeamanan_kantorSangatPuas');

            $table->float('ppelayanan_pegawaiSangatTidakPuas');
            $table->float('pketanggapan_pegawaiSangatTidakPuas');
            $table->float('pkesopanan_pegawaiSangatTidakPuas');
            $table->float('pketepatan_pelayananSangatTidakPuas');
            $table->float('pfasilitasSangatTidakPuas');
            $table->float('pkeamanan_kantorSangatTidakPuas');

            $table->float('ppelayanan_pegawaiTidakPuas');
            $table->float('pketanggapan_pegawaiTidakPuas');
            $table->float('pkesopanan_pegawaiTidakPuas');
            $table->float('pketepatan_pelayananTidakPuas');
            $table->float('pfasilitasTidakPuas');
            $table->float('pkeamanan_kantorTidakPuas');
            
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
        Schema::dropIfExists('data_tastings');
    }
}
