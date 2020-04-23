<?php

use Illuminate\Database\Seeder;
use App\Empresa;

class EmpresaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empresa = new Empresa();
        $empresa->nombre = "Infinito Computación";
        $empresa->telefono = "477-236-859-23";
        $empresa->correo = "infico13@msn.com";
        $empresa->web = "www.infinitocomputacion.com";
        $empresa->domicilio = "Paseo de las Alondras Col. San Isidro #456";
        $empresa->save();

        $empresa = new Empresa();
        $empresa->nombre = "Hilco de S.A de C.V";
        $empresa->telefono = "477-852-91-19";
        $empresa->correo = "hilco@msn.com";
        $empresa->web = "www.hilco.com";
        $empresa->domicilio = "Paseo de las Alondras Col. San Isidro #456";
        $empresa->save();
    }
}
