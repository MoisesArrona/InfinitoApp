<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    //Asignacion dde campos en asignacion masiva
    protected $fillable = ['nombre', 'descripcion', 'foto', 'remoto', 'remoto_id', 'remoto_pass', 'estatus', 'id_usuario'];

    //Relaciones
    public function cliente()
    {
        return $this->belongsTo('App\User', 'id_usuario');
    }
}
