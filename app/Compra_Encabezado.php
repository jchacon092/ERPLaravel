<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Compra_Encabezado extends Model
{
    public $timestamps = false;
    protected $table='compra_encabezado';
    protected $primarykey = 'id_encabezado_compra';

    protected $fillable = [
        'id_encabezado_compra', 'id_proveedor', 'id_empleado_compra','documento_compra','empleado_recibe','fecha_compra','total_encabezado','tipo_pago','contado_encabezado','estado_encabezado'
    ];
}
