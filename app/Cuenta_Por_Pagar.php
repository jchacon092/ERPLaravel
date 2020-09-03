<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Cuenta_Por_Pagar extends Model
{
    public $timestamps = false;
    protected $table='cuenta_por_pagar';
    protected $primarykey = 'id_cuenta_por_pagar';

    protected $fillable = [
        'id_cuenta_por_pagar', 'id_encabezado_compra','fecha_pago','saldo_inicial', 'saldo_actual','saldo_abonado','saldo_mora','contacto_saldo','estado_saldo'
    ];
}
