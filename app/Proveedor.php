<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //nombre de la tabla en la base de datos
    protected $table = 'proveedores';
    //Asignacion dde campos en asignacion masiva
    protected $fillable = ['empresa', 'usuario', 'telefono', 'correo', 'web', 'domicilio'];
}
