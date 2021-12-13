<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatGapokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_gapok', function (Blueprint $table) {
            $table->increments('id_gapok');
            $table->UnsignedInteger('id_peg');
            $table->string('no_sk')->nullable();
            $table->date('tgl_sk')->nullable();
            $table->string('pejabat_sk')->nullable();
            $table->UnsignedInteger('kode_gapok');
            $table->date('tmt');
            $table->date('naik_selanjutnya');
            $table->string('ket')->nullable();

            $table->foreign('id_peg')->references('id_peg')->on('pegawai')
                ->onDelete('cascade');
            $table->foreign('kode_gapok')->references('kode_gapok')->on('tm_gapok')
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
        Schema::dropIfExists('riwayat_gapok');
    }
}
