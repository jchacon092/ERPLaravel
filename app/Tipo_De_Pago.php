<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Tipo_De_Pago extends Model
{
    public $timestamps = false;
    protected $table='tipo_de_pago';
    protected $primarykey = 'id_pago';

    protected $fillable = [
        'id_pago','tipo_pago','estado_pago'
    ];
}
