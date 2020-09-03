<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Presentacion extends Model
{
    public $timestamps = false;
    protected $table='presentacion';
    protected $primarykey = 'id_presentacion';

    protected $fillable = [
        'id_presentacion', 'nombre_presentacion','estado_presentacion'
    ];
}
