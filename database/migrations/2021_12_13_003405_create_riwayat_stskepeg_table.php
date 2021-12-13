<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatStskepegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_stskepeg', function (Blueprint $table) {
            $table->increments('id_sts');
            $table->UnsignedInteger('id_peg');
            $table->enum('status', ['CPNS', 'PNS']);
            $table->string('jns_kepeg')->nullable();
            $table->string('sk')->nullable();
            $table->date('tgl_sk')->nullable();
            $table->date('tmt')->nullable();
            $table->UnsignedInteger('kode_gol');
            $table->UnsignedInteger('kode_jbts');

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
        Schema::dropIfExists('riwayat_stskepeg');
    }
}
