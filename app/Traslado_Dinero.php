<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Traslado_Dinero extends Model
{
    public $timestamps = false;
    protected $table='traslado_dinero';
    protected $primarykey = 'id_traslado_dinero';

    protected $fillable = [
        'id_traslado_dinero', 'id_caja_traslada', 'id_caja_recibe', 'motivo_traslado', 'cantidad_traslado', 'empleado_traslado', 'empleado_recibe', 'estado_traslado_dinero'
    ];
}
