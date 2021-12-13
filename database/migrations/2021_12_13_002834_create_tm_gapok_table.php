<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmGapokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_gapok', function (Blueprint $table) {
            $table->increments('kode_gapok');
            $table->integer('masa_kerja');
            $table->string('PP')->nullable();
            $table->string('kode_gol');
            $table->double('gapok');
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
        Schema::dropIfExists('tm_gapok');
    }
}
