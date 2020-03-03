<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 50);
            $table->string('modelo', 50);
            $table->string('nombre', 50);
            $table->integer('existencia');
            $table->string('foto');
            $table->unsignedBigInteger('id_tipo');
            $table->foreign('id_tipo')->references('id')->on('tipos');
            $table->unsignedBigInteger('id_proveedor');
            $table->foreign('id_proveedor')->references('id')->on('proveedores');
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
        Schema::dropIfExists('productos');
    }
}
