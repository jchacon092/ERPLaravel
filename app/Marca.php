<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    public $timestamps = false;
    protected $table='marca';
    protected $primarykey = 'id_marca';

    protected $fillable = [
        'id_marca', 'nombre_marca','estado_marca'
    ];
}
