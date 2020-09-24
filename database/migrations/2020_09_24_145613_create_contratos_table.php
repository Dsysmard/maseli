<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('empleado');
            $table->string('empresa');
            $table->string('departamento');
            $table->string('pago_externo');
            $table->string('supervisor');
            $table->string('supervisor_asignado');
            $table->string('puesto');
            $table->string('turno');
            $table->string('horario');
            $table->string('sueldo');
            $table->string('bono');
            $table->string('observaciones');
            $table->string('estatus');
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
        Schema::dropIfExists('contratos');
    }
}
