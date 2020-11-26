<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterpretesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interpretes', function (Blueprint $table) {
            $table->bigIncrements('id_interprete');
            $table->string('nombres',45);
            $table->string('apellidos',45);
            $table->string('instrumento',15);
            $table->integer('edad');
            $table->string('ocupacion',15);
            $table->string('email',45)->unique();
            $table->unsignedBigInteger('int_profesor');
            $table->unsignedBigInteger('int_estudiante');
            $table->foreign('int_profesor')->references('id_profesor')->on('profesores');
            $table->foreign('int_estudiante')->references('id_estudiante')->on('estudiantes');
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
        Schema::dropIfExists('interpretes');
    }
}
