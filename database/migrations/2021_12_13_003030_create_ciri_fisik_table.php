<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiriFisikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciri_fisik', function (Blueprint $table) {
            $table->increments('id_fisik');
            $table->integer('tinggi_bada');
            $table->integer('berat_badan');
            $table->string('rambut')->nullable();
            $table->string('bentuk_muka')->nullable();
            $table->string('warna_kulit')->nullable();
            $table->string('ciri_khusus')->nullable();
            $table->string('cacat_tubuh')->nullable();
            $table->UnsignedInteger('id_peg');

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
        Schema::dropIfExists('ciri_fisik');
    }
}
