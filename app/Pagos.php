<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    public $timestamps = false;
    protected $table='pagos';
    protected $primarykey = 'id_pagos';

    protected $fillable = [
        'id_pagos', 'id_cuenta_por_pagar','id_saldo'
    ];
}
