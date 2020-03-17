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
        $usuario->name = "Moises";
        $usuario->email = "arronamoisesar@outlook.com";
        $usuario->password = Hash::make('12345678');
        $usuario->id_rol = 1;
        $usuario->save();
    }
}
