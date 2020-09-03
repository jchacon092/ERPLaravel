<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Saldo_Por_Cobrar extends Model
{
    public $timestamps = false;
    protected $table='saldo_por_cobrar';
    protected $primarykey = 'id_saldo';

    protected $fillable = [
        'id_saldo','id_empleado', 'abono_cobrar', 'fecha_abono', 'estado_abono_cobrar'
    ];
    //
}
