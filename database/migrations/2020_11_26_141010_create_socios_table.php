<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->bigIncrements('id_socio');
            $table->string('nombres',45);
            $table->string('apellidos',45);
            $table->string('telefono',20);
            $table->string('direccion',60);
            $table->integer('edad');
            $table->string('email',45)->unique();
            $table->string('sexo',9);
            $table->integer('contrato');
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
        Schema::dropIfExists('socios');
    }
}
