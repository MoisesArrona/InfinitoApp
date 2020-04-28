<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TareaDetalle extends Model
{
    //Relaciones
    public function usuario()
    {
        return $this->belongsTo('App\User', 'id_usuario');
    }

    public function tareas()
    {
        return $this->belongsTo('App\Tarea', 'id_tarea');
    }
}
