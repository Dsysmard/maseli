<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'nombre',
        'calle',
        'num_ext',
        'num_int',
        'colonia',
        'cp',
        'municipio',
        'delegacion',
        'estado',
        'departamentos',
        'contactos',
        'estatus',
    ];
}
