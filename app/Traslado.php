<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Traslado extends Model
{
    public $timestamps = false;
    protected $table='traslado';
    protected $primarykey = 'id_traslado';

    protected $fillable = [
        'id_traslado', 'id_empleado_realiza','id_empresa_realiza', 'fecha_traslado', 'motivo_traslado','empleado_recibe','surcursal_recibe','estado_traslado'
    ];
}
