<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RebitsTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testBasicExample(): void
    {
        $this->browse(function (Browser $browser) {
            //prueba de creación de usuario
            $browser->visit('/usuarios/create')
            ->type('nombre', 'juan')
            ->type('apellidos', 'perez')
            ->type('correo', 'juan@perez.com')
            ->press('AGREGAR')
            ->assertSee('juan perez');

            //prueba de creación de vehículo
            $browser->visit('/vehiculos/create')
            ->type('anio', 2018)
            ->type('marca', 'toyota')
            ->type('modelo', 'yaris')
            //->select('dueno', "juan perez") //falta seleccionar a juan perez
            ->type('precio', '4000000')
            ->press('AGREGAR')
            ->assertSee('toyota yaris')
            ->clickLink('toyota yaris')
            ->assertSee('Dueño: Sin Dueño');
            //->assertSee('juan perez'); // valta verificar que el dueño sea juan perez

            //Prueba de eliminación de vehículo
            $browser->visit('/vehiculos')
            ->clickLink('toyota yaris')
            ->assertSee('dueños')
            ->click('[title=Borrar]')
            ->acceptDialog()
            ->assertDontSee('toyota yaris');

            //Prueba de eliminación de usuario
            $browser->visit('/usuarios')
            ->clickLink('juan perez')
            ->assertSee('Vehículos:')
            ->click('[title=Borrar]')
            ->acceptDialog()
            ->assertDontSee('juan perez');

        });
    }
}
