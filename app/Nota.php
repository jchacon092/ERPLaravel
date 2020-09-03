<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    public $timestamps = false;
    protected $table='nota';
    protected $primarykey = 'id_nota';

    protected $fillable = [
        'id_nota', 'id_producto_detalle','id_empleado','nombre_nota','motivo_nota','fecha','nota','estado_nota'
    ]; 
}
