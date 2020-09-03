<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    public $timestamps = false;
    protected $table='proveedor';
    protected $primarykey = 'id_proveedor';

    protected $fillable = [
        'id_proveedor', 'nombre_proveedor', 'direccion_proveedor','telefono_proveedor', 'email_proveedor', 'estado_proveedor'
    ];
}
