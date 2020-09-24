<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
        'nombre',
        'ap_paterno',
        'ap_materno',
        'fecha_nacimiento',
        'genero',
        'curp',
        'rfc',
        'nss',
        'infonavit',
        'desc_infonavit',
        'calle',
        'num_ext',
        'num_int',
        'colonia',
        'cp',
        'municipio',
        'delegacion',
        'estado',
        'telefono',
        'email',
        'banco',
        'tdd',
        'fecha_ingreso',
        'fecha_baja',
        'motivo_baja',
        'observaciones',
    ];
}