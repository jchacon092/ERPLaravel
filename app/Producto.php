<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $timestamps = false;
    protected $table='producto';
    protected $primarykey = 'id_producto';

    protected $fillable = [
        'id_producto', 'id_categoria','id_marca','nombre_producto','foto_producto','descripcion_producto','codigo_barra_producto','estado_producto'
    ];
}
