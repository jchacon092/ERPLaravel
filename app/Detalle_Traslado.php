<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Detalle_Traslado extends Model
{
    public $timestamps = false;
    protected $table='detalle_traslado';
    protected $primarykey = 'id_detalle_traslado';

    protected $fillable = [
        'id_detalle_traslado','cantidad_traslado','id_traslado','id_producto_detalle','estado_detalle'
    ];
}
