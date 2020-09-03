<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Saldo_Por_Pagar extends Model
{
    public $timestamps = false;
    protected $table='saldo_por_pagar';
    protected $primarykey = 'id_saldo';

    protected $fillable = [
        'id_saldo', 'abono_pagar','fecha_abono','estado_abono_pagar'
    ];
}
