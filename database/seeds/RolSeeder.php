<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new Rol();
        $rol->nombre = "Administrador";
        $rol->descripcion = "Usuario encargado de atender Tareas Reporte y Almacén";
        $rol->save();

        $rol = new Rol();
        $rol->nombre = "Personal";
        $rol->descripcion = "Usuario encargado de atender Tareas Reporte y Almacén";
        $rol->save();

        $rol = new Rol();
        $rol->nombre = "Cliente";
        $rol->descripcion = "Usuario encargado de atender Tareas Reporte y Almacén";
        $rol->save();
    }
}
