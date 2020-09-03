<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Presentacion_Producto extends Model
{
    public $timestamps = false;
    protected $table='presentacion_producto';
    protected $primarykey = 'id_presentacion_producto';

    protected $fillable = [
        'id_presentacion_producto', 'id_presentacion','id_producto','id_precios_productos','estado_presentacion_producto'
    ];
}
