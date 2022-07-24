<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User','id_usuario');
    }

    public function paquete()
    {
        return $this->belongsTo('App\Paquete','id_paquete');
    }
}
