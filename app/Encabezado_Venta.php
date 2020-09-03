<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Encabezado_Venta extends Model
{
    public $timestamps = false;
    protected $table='encabezado_venta';
    protected $primarykey = 'id_encabezado_venta';

    protected $fillable = [
        'id_encabezado_venta', 'id_empleado','id_cliente','id_caja','fecha_encabezado_venta','numero_recibo','numero_cotizacion','empresa_venta','telefono_venta','subtotal_venta','descuento_venta','total_venta','cambio_venta','total_venta','cambio_venta','pago_venta','cotizacion','estado_encabezado'
    ];
}
