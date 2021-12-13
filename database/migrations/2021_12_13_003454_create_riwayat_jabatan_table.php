<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatJabatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_jabatan', function (Blueprint $table) {
            $table->increments('id_jabatan');
            $table->UnsignedInteger('id_peg');
            $table->string('no_sk')->nullable();
            $table->date('tgl_sk')->nullable();
            $table->string('pejabat_sk')->nullable();
            $table->UnsignedInteger('kode_jbts');
            $table->date('tmt');
            $table->UnsignedInteger('kode_gol');
            $table->string('ket')->nullable();

            $table->foreign('id_peg')->references('id_peg')->on('pegawai')
                ->onDelete('cascade');
            $table->foreign('kode_gol')->references('kode_gol')->on('tm_golongan')
                ->onDelete('cascade');
            $table->foreign('kode_jbts')->references('kode_jbts')->on('tm_jabatanstruktural')
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
        Schema::dropIfExists('riwayat_jabatan');
    }
}
