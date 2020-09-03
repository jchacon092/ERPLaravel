<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    protected $table='usuario';
    protected $primarykey = 'id_usuario';

    protected $fillable = [
        'id_usuario', 'id_empleado','pass_usuario', 'estado_empleado'
    ];

}
