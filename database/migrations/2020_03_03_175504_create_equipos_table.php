<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('equipo', 50);
            $table->string('contacto', 50);
            $table->string('modelo', 50);
            $table->string('nombre', 50);
            $table->string('so', 50);
            $table->string('procesador', 50);
            $table->string('ram', 50);
            $table->string('dominio', 50);
            $table->string('ipv4');
            $table->string('puerto', 50);
            $table->string('usuario', 50);
            $table->string('contraseña', 50);
            /*$table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users');*/
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
        Schema::dropIfExists('equipos');
    }
}
