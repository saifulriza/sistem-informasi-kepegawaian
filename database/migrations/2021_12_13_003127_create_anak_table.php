<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anak', function (Blueprint $table) {
            $table->increments('id_anak');
            $table->UnsignedInteger('id_peg');
            $table->string('nama_anak');
            $table->string('t_lahir')->nullable();
            $table->date('tgl_lair')->nullable();
            $table->enum('jns_kelamin', ['L', 'P']);
            $table->UnsignedInteger('kode_pdd');
            $table->string('sts_tunjangan');
            $table->enum('sts_menikah', ['Menikah', 'Belum menikah'])->nullable();
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
        Schema::dropIfExists('anak');
    }
}
