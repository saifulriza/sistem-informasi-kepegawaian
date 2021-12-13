<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMertuaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mertua', function (Blueprint $table) {
            $table->increments('id_mertua');
            $table->UnsignedInteger('id_peg');
            $table->string('nama_mertua');
            $table->string('t_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->enum('jns_kelamin', ['L', 'P']);
            $table->string('alamat')->nullable();
            $table->string('pekerjaan')->nullable();
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
        Schema::dropIfExists('mertua');
    }
}
