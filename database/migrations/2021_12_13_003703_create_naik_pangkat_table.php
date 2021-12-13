<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaikPangkatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naik_pangkat', function (Blueprint $table) {
            $table->increments('id_naikpangkat');
            $table->UnsignedInteger('id_peg');
            $table->string('no_surat_usul')->nullable();
            $table->date('tgl_surat_usul')->nullable();
            $table->string('no_sk')->nullable();
            $table->date('tgl_sk')->nullable();
            $table->string('pejabat_sk')->nullable();
            $table->integer('mk_tahun');
            $table->integer('mk_bulan');
            $table->UnsignedInteger('kode_gol');
            $table->date('tmt_baru');
            $table->double('gapok_baru');
            $table->string('gapok_terbilang')->nullable();
            $table->date('naik_selanjutnya');
            $table->enum('ket', ['Belum diproses', 'Proses', 'Disetujui', 'Ditolak'])->nullable();

            $table->foreign('id_peg')->references('id_peg')->on('pegawai')
                ->onDelete('cascade');
            $table->foreign('kode_gol')->references('kode_gol')->on('tm_golongan')
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
        Schema::dropIfExists('naik_pangkat');
    }
}
