<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIstriSuamiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('istri_suami', function (Blueprint $table) {
            $table->increments('id_istrisuami');
            $table->UnsignedInteger('id_peg');
            $table->string('nama_istri_suami');
            $table->string('t_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->enum('jns_kelamin', ['L', 'P']);
            $table->UnsignedInteger('kode_pdd')->nullable();
            $table->enum('sts_tunjangan', ['Ya', 'Tidak']);
            $table->date('tgl_menikah');
            $table->string('ket')->nullable();

            $table->foreign('id_peg')->references('id_peg')->on('pegawai')
                ->onDelete('cascade');
            $table->foreign('kode_pdd')->references('kode_pdd')->on('tm_pendidikan')
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
        Schema::dropIfExists('istri_suami');
    }
}
