<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmPpkenaikangajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_ppkenaikangaji', function (Blueprint $table) {
            $table->increments('kode_ppgaji');
            $table->string('no_ppgj');
            $table->date('tgl_berlaku');
            $table->string('pejabat')->nullable();
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
        Schema::dropIfExists('tm_ppkenaikangaji');
    }
}
