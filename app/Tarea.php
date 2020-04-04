<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    //Asignacion dde campos en asignacion masiva
    protected $fillable = ['nombre', 'descripcion', 'estatus', 'id_usuario'];

    //Relaciones
    public function personal()
    {
        return $this->belongsTo('App\User', 'id_usuario');
    }
}
