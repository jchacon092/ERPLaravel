<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Pago_Mixto extends Model
{
    public $timestamps = false;
    protected $table='pago_mixto';
    protected $primarykey = 'id_pago_mixto';

    protected $fillable = [
        'id_pago_mixto','id_encabezado_venta', 'id_pago'
    ];
}
