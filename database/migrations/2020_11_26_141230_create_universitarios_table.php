<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversitariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universitarios', function (Blueprint $table) {
            $table->bigIncrements('id_universitario');
            $table->string('nombres',45);
            $table->string('apellidos',45);
            $table->integer('edad');
            $table->string('sexo',9);
            $table->string('email',45)->unique();
            $table->string('direccion',45);
            $table->string('estudio_enseñar',25);
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
        Schema::dropIfExists('universitarios');
    }
}
