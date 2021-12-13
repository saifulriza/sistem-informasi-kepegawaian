<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePensiunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pensiun', function (Blueprint $table) {
            $table->increments('id_pensiun');
            $table->string('nama');
            $table->string('no_surat_usul')->nullable();
            $table->date('tgl_surat_usul')->nullable();
            $table->string('no_sk')->nullable();
            $table->date('tgl_sk')->nullable();
            $table->string('pejabat_sk')->nullable();
            $table->enum('jenis_pensiun', ['Pensiun Usia', 'Pensiun Janda', 'Pensiun Duda', 'Pensiun Dini']);
            $table->text('alasan')->nullable();
            $table->date('tgl_pensiun');
            $table->date('tmt_pensiun');
            $table->enum('ket', ['Belum diproses', 'Proses', 'Disetujui', 'Ditolak'])->nullable();
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
        Schema::dropIfExists('pensiun');
    }
}
