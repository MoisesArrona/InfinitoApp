<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $fillable = ['equipo', 'contacto', 'modelo', 'nombre', 'so', 'procesador', 'ram', 'dominio', 'ipv4', 'puerto', 'usuario', 'contraseña', 'id_usuario'];
}
