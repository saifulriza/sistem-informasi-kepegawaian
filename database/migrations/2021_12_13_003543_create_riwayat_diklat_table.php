<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatDiklatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_diklat', function (Blueprint $table) {
            $table->increments('id_diklat');
            $table->UnsignedInteger('id_peg');
            $table->UnsignedInteger('kode_diklat');
            $table->string('nama_diklat')->nullable();
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->string('no_sertifikat')->nullable();
            $table->string('thn_sertifikat')->nullable();
            $table->string('penyelenggara')->nullable();

            $table->foreign('id_peg')->references('id_peg')->on('pegawai')
                ->onDelete('cascade');
            $table->foreign('kode_diklat')->references('kode_diklat')->on('tm_diklat')
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
        Schema::dropIfExists('riwayat_diklat');
    }
}
