<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKunjunganLuarnegeriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kunjungan_luarnegeri', function (Blueprint $table) {
            $table->increments('id_kunjungan');
            $table->UnsignedInteger('id_peg');
            $table->string('negara');
            $table->date('tgl_berangkat');
            $table->date('tgl_pulang');
            $table->string('tujuan')->nullable();
            $table->string('sumber_biaya')->nullable();
            $table->string('ket')->nullable();

            $table->foreign('id_peg')->references('id_peg')->on('pegawai')
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
        Schema::dropIfExists('kunjungan_luarnegeri');
    }
}
