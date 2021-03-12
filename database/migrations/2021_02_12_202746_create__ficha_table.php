<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha', function (Blueprint $table) {

            $table->id();
            $table->string('Num_Ficha');
            $table->string('Jornada','75');
            $table->string('Estado','75');




            $table->bigInteger('id_Programa')->unsigned();
            $table->foreign('id_Programa')->references('id')->on('_programa_formacion');

            $table->bigInteger('id_instructor')->unsigned();
            $table->foreign('id_instructor')->references('id')->on('instructor');

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
        Schema::dropIfExists('_ficha');
    }
}
