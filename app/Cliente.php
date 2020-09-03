<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = false;
    protected $table='cliente';
    protected $primarykey = 'id_cliente';

    protected $fillable = [
        'id_cliente', 'nombre_cliente','apellidos_cliente','direccion_cliente','telefono_cliente','celular_cliente','email_cliente','nit','estado_cliente'
    ];
}
