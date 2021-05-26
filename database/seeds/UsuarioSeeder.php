<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User();
        $usuario->name = "Administrador";
        $usuario->email = "admin@infinito.com";
        $usuario->password = Hash::make('Admin123');
        $usuario->id_rol = 1;
        $usuario->id_empresa = 1;
        $usuario->save();

        $usuario = new User();
        $usuario->name = "Empleado Hernandez";
        $usuario->email = "employee@infinito.com";
        $usuario->password = Hash::make('Employee123');
        $usuario->id_rol = 2;
        $usuario->id_empresa = 1;
        $usuario->save();

        $usuario = new User();
        $usuario->name = "Cliente Villanueva";
        $usuario->email = "client@infinito.com";
        $usuario->password = Hash::make('Client123');
        $usuario->id_rol = 3;
        $usuario->id_empresa = 2;
        $usuario->save();

        $usuario = new User();
        $usuario->name = "Cliente Moreno";
        $usuario->email = "clientenoreno@infinito.com";
        $usuario->password = Hash::make('Client123');
        $usuario->id_rol = 3;
        $usuario->id_empresa = 2;
        $usuario->save();
    }
}
