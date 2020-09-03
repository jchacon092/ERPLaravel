<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    public $timestamps = false;
    protected $table='asignacion';
    protected $primarykey = 'id_asignacion';

    protected $fillable = [
        'id_asignacion', 'nombre_cadena','propietario_asignacion', 'telefono_asignacion','email_asignacion','estado_asignacion'
    ];
}
