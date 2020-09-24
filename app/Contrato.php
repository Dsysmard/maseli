<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = [
        'empleado',
        'empresa',
        'departamento',
        'pago_externo',
        'supervisor',
        'supervisor_asignado',
        'puesto',
        'turno',
        'horario',
        'sueldo',
        'bono',
        'observaciones',
        'estatus',
    ];
}
