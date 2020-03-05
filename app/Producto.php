<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //Asignacion dde campos en asignacion masiva
    protected $fillable = ['codigo', 'modelo', 'nombre', 'existencia', 'foto', 'id_tipo', 'id_proveedor'];
}
