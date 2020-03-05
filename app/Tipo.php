<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    //Asignacion dde campos en asignacion masiva
    protected $fillable = ['nombre', 'descripcion'];
}
