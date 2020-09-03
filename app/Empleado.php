<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public $timestamps = false;
    protected $table='empleado';
    protected $primarykey = 'id_empleado';

    protected $fillable = [
        'id_empleado', 'id_empresa','nombre_empleado','apellido_empleado','direccion_empleado','telefono_empleado','celular_empleado','email_empleado','edad','dpi','fecha_contrato','estado_empleado'
    ];
}
