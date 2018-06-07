<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pais', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('n_pais');
            $table->string('n_adjunto');
            $table->string('escudo');
            $table->string('capital');
            // $table->integer('id_estadio')->unsigned();
            // $table->foreign('id_estadio')->references('id')->on('estadios');
            $table->integer('jugadores_id')->unsigned();
            $table->foreign('jugadores_id')->references('id')->on('jugadores');
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
        Schema::drop('pais');
    }
}
