<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id_estudiante');
            $table->string('nombres',45);
            $table->string('apellidos',45);
            $table->string('direccion',45);
            $table->integer('edad');
            $table->string('email',45)->unique();
            $table->string('sexo',9);
            $table->string('talento',20);
            $table->unsignedBigInteger('est_maestro');
            $table->foreign('est_maestro')->references('id_maestro')->on('maestros');
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
        Schema::dropIfExists('estudiantes');
    }
}
