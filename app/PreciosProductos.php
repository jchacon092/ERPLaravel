<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class PreciosProductos extends Model
{
    public $timestamps = false;
    protected $table='preciosproductos';
    protected $primarykey = 'id_precios_productos';

    protected $fillable = [
        'id_precios_productos', 'precio_presentacion_compra','precio_presentacion_venta','fecha_precio','estado_precio'
    ];
}
