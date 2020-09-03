<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class DevolucionesCompra extends Model
{
    public $timestamps = false;
    protected $table='devolucionescompra';
    protected $primarykey = 'id_devoluciones_compra';

    protected $fillable = [
        'id_devoluciones_compra', 'id_producto_detalle','id_empleado','id_proveedor','motivo_devolucion_compra','cantidad_devolucion_compra','fecha_devolucion_compra', 'estado_devolucion_compra'
    ];
}
