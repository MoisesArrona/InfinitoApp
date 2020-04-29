<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novedad extends Model
{
    //Asignacion dde campos en asignacion masiva
    protected $fillable = ['titulo', 'cuerpo', 'foto'];
    //nombre de la tabla en la base de datos
    protected $table = "novedades";

    //Relaciones
    public function usuario()
    {
        return $this->belongsTo('App\User', 'id_usuario');
    }
}
