<?php

namespace Tests\Unit;

use App\Models\Usuario;
use App\Models\Vehiculo;
use PHPUnit\Framework\TestCase;

class RebitLabTest1 extends TestCase
{
    /**
     * Test simple donde crea un nuevo usuario, crea un vehiculo y lo asocia al usuario
     *
     * @return void
     */
    public function test_that_true_is_true()
    {
        //Crea un nuevo usuario
        $usuario = new Usuario();
        $usuario->nombre = 'John';
        $usuario->apellidos = 'Doe';
        $usuario->correo = 'john@doe.com';
        $usuario->save();

        //crea un vehiculo
        $vehiculo = new Vehiculo();
        $vehiculo->marca = 'Ford';
        $vehiculo->modelo = 'x';
        $vehiculo->anio = 2021;
        $vehiculo->precio = 3000;
        $vehiculo->dueno_id = 1;
        
        $vehiculo->save();
        

    }
}
