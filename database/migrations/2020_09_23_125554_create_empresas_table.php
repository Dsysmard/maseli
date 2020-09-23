<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('calle');
            $table->string('num_ext');
            $table->string('num_int');
            $table->string('colonia');
            $table->string('cp');
            $table->string('municipio'); 
            $table->string('delegacion');
            $table->string('estado');
            $table->string('departamentos');
            $table->string('contactos');
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
        Schema::dropIfExists('empresas');
    }
}
