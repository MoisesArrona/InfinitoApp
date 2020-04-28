<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //Asignacion dde campos en asignacion masiva
    protected $fillable = ['codigo', 'modelo', 'nombre', 'existencia', 'precio', 'foto', 'id_tipo', 'id_proveedor'];

    //Relaciones
    public function tipos()
    {
        return $this->belongsTo('App\Tipo', 'id_tipo');
    }

    public function proveedores()
    {
        return $this->belongsTo('App\Proveedor', 'id_proveedor');
    }
}
