<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCantantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cantantes', function (Blueprint $table) {
            $table->bigIncrements('id_cantante');
            $table->string('nombres',45);
            $table->string('apellidos',45);
            $table->integer('telefono');
            $table->string('nombre_artistico',15);
            $table->string('sexo',9);
            $table->string('direccion',45);
            $table->integer('edad');
            $table->unsignedBigInteger('cant_socio');
            $table->foreign('cant_socio')->references('id_socio')->on('socios');
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
        Schema::dropIfExists('cantantes');
    }
}
