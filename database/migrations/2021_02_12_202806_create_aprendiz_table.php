<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprendizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendiz', function (Blueprint $table) {
            $table->id();
            $table->string( 'Nombre',75);
            $table->string( 'Apellido',75);
            $table->string( 'Tip_documento',75);
            $table->string( 'Documento',75);

            $table->string( 'Correo',75);
            $table->date  ( 'Fecha_nac');
            $table->string( 'Genero',75);

            $table->bigInteger('ficha_id')->unsigned();
            $table->foreign   ('ficha_id')->references('id')->on('ficha');
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
        Schema::dropIfExists('aprendiz');
    }
}
