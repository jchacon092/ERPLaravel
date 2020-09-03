<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Cierre_Caja extends Model
{
    public $timestamps = false;
    protected $table='cierre_caja';
    protected $primarykey = 'id_cierre';

    protected $fillable = [
       'id_cierre', 'id_caja','id_empleado', 'cierre_anterior', 'monto_actual', 'monto_retirado', 'monto_sobrante', 'fecha_cierre', 'observaciones_cierre', 'estado_cierre'
    ];
}
