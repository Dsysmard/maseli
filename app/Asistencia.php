<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $fillable = [
        'empleado',
        'empresa',
        'turno',
        'fecha',
        'asistencia',
        'falta_justificada',
        'falta_injustificada',
        'observaciones'
    ];
}
