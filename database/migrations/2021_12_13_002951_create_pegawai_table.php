<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('id_peg');
            $table->string('nip');
            $table->string('nama');
            $table->string('nip_lama')->nullable();
            $table->string('t_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->enum('jns_kelamin', ['L', 'P']);
            $table->unsignedInteger('kode_agama')->nullable();
            $table->enum('sts_marital', ['Menikah', 'Belum menikah'])->nullable();
            $table->unsignedInteger('kode_pdd')->nullable();
            $table->string('nama_sekolah')->nullable();
            $table->string('tahun_sttb')->nullable();
            $table->string('gelar_depan')->nullable();
            $table->string('gelar_belakang')->nullable();
            $table->string('hobi')->nullable();
            $table->enum('sts_pegawai', ['Aktif', 'Tidak aktif']);
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('kode_gol')->nullable();
            $table->date('tmt')->nullable();
            $table->unsignedInteger('kode_jbts')->nullable();
            $table->date('tmt_jab')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('foto');


            $table->foreign('kode_agama')->references('kode_agama')->on('tm_agama')
                ->onDelete('cascade');
            $table->foreign('kode_pdd')->references('kode_pdd')->on('tm_pendidikan')
                ->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')
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
        Schema::dropIfExists('pegawai');
    }
}
