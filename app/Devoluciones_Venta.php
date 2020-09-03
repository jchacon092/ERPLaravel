<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Devoluciones_Venta extends Model
{
    public $timestamps = false;
    protected $table='devoluciones_venta';
    protected $primarykey = 'id_devoluciones_venta';

    protected $fillable = [
        'id_devoluciones_venta','id_producto_detalle', 'id_empleado', 'id_cliente','motivo_devolucion_venta','cantidad_devolucion_venta','fecha_devolucion_venta','estaado_devolucion_venta'
    ];
}
