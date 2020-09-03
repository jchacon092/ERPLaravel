<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Caja extends Model
{
    public $timestamps = false;
    protected $table='caja';
    protected $primarykey = 'id_caja';

    protected $fillable = [
        'id_caja', 'nombre_caja', 'numero_caja', 'descripcion_caja','estado_caja'
    ];
    //
}
