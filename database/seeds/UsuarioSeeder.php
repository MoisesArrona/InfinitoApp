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
        $usuario->name = "Moises Arrona";
        $usuario->email = "arronamoisesar@outlook.com";
        $usuario->password = Hash::make('12345678');
        $usuario->id_rol = 1;
        $usuario->id_empresa = 1;
        $usuario->save();

        $usuario = new User();
        $usuario->name = "Empleado Hernandez";
        $usuario->email = "arronamoisesarE@outlook.com";
        $usuario->password = Hash::make('12345678');
        $usuario->id_rol = 2;
        $usuario->id_empresa = 1;
        $usuario->save();

        $usuario = new User();
        $usuario->name = "Cliente Villanueva";
        $usuario->email = "arronamoisesar@gmail.com";
        $usuario->password = Hash::make('12345678');
        $usuario->id_rol = 3;
        $usuario->id_empresa = 2;
        $usuario->save();
    }
}
