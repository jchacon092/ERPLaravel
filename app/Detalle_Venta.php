<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Detalle_Venta extends Model
{
    public $timestamps = false;
    protected $table='detalle_venta';
    protected $primarykey = 'id_detalle';

    protected $fillable = [
        'id_detalle', 'id_encabezado_venta','id_producto_detalle','cantidad_detalle','estado_detalle'
    ]; 
}
