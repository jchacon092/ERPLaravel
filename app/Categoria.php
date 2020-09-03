<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = false;
    protected $table='categoria';
    protected $primarykey = 'id_categoria';

    protected $fillable = [
        'id_categoria', 'nombre_categoria','estado_categoria'
    ];
}
