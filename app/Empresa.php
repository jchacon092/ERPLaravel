<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public $timestamps = false;
    protected $table='empresa';
    protected $primarykey = 'id_empresa';

    protected $fillable = [
        'id_empresa', 'id_asignacion','nombre_empresa', 'telefono_empresa','ciudad_empresa','direccion_empresa','central_empresa','estado_empresa'
    ];
}
