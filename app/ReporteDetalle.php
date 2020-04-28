<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReporteDetalle extends Model
{
    //Relaciones
    public function cliente()
    {
        return $this->belongsTo('App\User', 'id_usuario');
    }

    public function reportes()
    {
        return $this->belongsTo('App\Reporte', 'id_reporte');
    }
}
