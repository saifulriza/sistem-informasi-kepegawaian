<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatSatuankerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_satuankerja', function (Blueprint $table) {
            $table->increments('id_satuankerja');
            $table->UnsignedInteger('id_peg');
            $table->UnsignedInteger('kode_unitkerja');
            $table->UnsignedInteger('kode_satuanorg');
            $table->string('no_sk')->nullable();
            $table->date('tgl_sk')->nullable();
            $table->string('pejabat_sk')->nullable();
            $table->date('tmt')->nullable();
            $table->string('kota')->nullable();


            $table->foreign('id_peg')->references('id_peg')->on('pegawai')
                ->onDelete('cascade');
            $table->foreign('kode_unitkerja')->references('kode_unitkerja')->on('unit_kerja')
                ->onDelete('cascade');
            $table->foreign('kode_satuanorg')->references('kode_satuanorg')->on('tm_satuanorganisasi')
                ->onDelete('cascade');
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
        Schema::dropIfExists('riwayat_satuankerja');
    }
}
