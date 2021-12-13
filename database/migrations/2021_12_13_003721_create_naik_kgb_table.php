<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaikKgbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naik_kgb', function (Blueprint $table) {
            $table->increments('id_naikkgb');
            $table->UnsignedInteger('id_peg');
            $table->string('no_sklama')->nullable();
            $table->date('tgl_sklama')->nullable();
            $table->string('pejabat_sklama')->nullable();
            $table->date('tmt_lama');
            $table->string('no_sk')->nullable();
            $table->date('tgl_sk')->nullable();
            $table->string('pejabat_sk')->nullable();
            $table->double('gapok_lama');
            $table->integer('mk_lama');
            $table->UnsignedInteger('kode_gapok');
            $table->date('tmt_baru');
            $table->date('naik_selanjutnya');
            $table->enum('ket', ['Belum diproses', 'Proses', 'Disetujui', 'Ditolak'])->nullable();

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
        Schema::dropIfExists('naik_kgb');
    }
}
