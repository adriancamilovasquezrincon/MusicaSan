<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAprendicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendices', function (Blueprint $table) {
            $table->bigIncrements('id_aprendiz');
            $table->string('nombres',45);
            $table->string('apellidos',45);
            $table->string('pasion',10);
            $table->string('preUniversitario',15);
            $table->string('email',45)->unique();
            $table->string('sexo',9);
            $table->string('direccion',45);
            $table->integer('nro_aprendiz');
            $table->unsignedBigInteger('apr_universidad');
            $table->foreign('apr_universidad')->references('id_universitario')->on('universitarios');
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
        Schema::dropIfExists('aprendices');
    }
}
