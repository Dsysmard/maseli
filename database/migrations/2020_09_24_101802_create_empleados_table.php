<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->string('fecha_nacimiento');
            $table->string('genero');
            $table->string('curp');
            $table->string('rfc');
            $table->string('nss');
            $table->string('infonavit');
            $table->string('desc_infonavit');
            $table->string('calle');
            $table->string('num_ext');
            $table->string('num_int');
            $table->string('colonia');
            $table->string('cp');
            $table->string('municipio');
            $table->string('delegacion');
            $table->string('estado');
            $table->string('telefono');
            $table->string('email');
            $table->string('banco');
            $table->string('tdd');
            $table->string('fecha_ingreso');
            $table->string('fecha_baja');
            $table->string('motivo_baja');
            $table->string('observaciones');
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
        Schema::dropIfExists('empleados');
    }
}
