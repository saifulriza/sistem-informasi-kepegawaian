<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlamatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alamat', function (Blueprint $table) {
            $table->increments('id_alamat');
            $table->UnsignedInteger('id_peg');
            $table->string('jalan');
            $table->string('kalurahan');
            $table->string('kecamatan');
            $table->string('kabkota');
            $table->string('propinsi');
            $table->string('tlp')->nullable();
            $table->enum('sts_tinggal', ['Ya', 'Tidak']);

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
        Schema::dropIfExists('alamat');
    }
}
