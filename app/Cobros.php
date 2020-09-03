<?php

namespace caladium;

use Illuminate\Database\Eloquent\Model;

class Cobros extends Model
{
    public $timestamps = false;
    protected $table='cobros';
    protected $primarykey = 'id_cobros';

    protected $fillable = [
        'id_cobros', 'id_cuenta_cobrar','id_saldo'
    ];
}
