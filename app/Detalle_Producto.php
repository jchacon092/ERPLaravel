<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Detalle_Producto extends Model
{
    public $timestamps = false;
    protected $table='detalle_producto';
    protected $primarykey = 'id_producto_detalle';

    protected $fillable = [
        'id_producto_detalle', 'id_presentacion_producto','existencia_maxima', 'existencia_minima','existencia','fecha_vencimiento','estado_detalle'
    ];
}
