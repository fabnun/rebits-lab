<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Vehiculo;
use App\Models\Usuario;
use App\Models\Historico;

class VehiculoController extends Controller
{
    public function index()
    {
        $vehiculos = Vehiculo::all();
        return view('vehiculos.index', ['vehiculos' => $vehiculos->reverse()]);
    }

    public function create()    {
        $usuarios = Usuario::all();
        return view('vehiculos.create', ['usuarios' => $usuarios]);
    }

    public function store(Request $request)    {

        // Crear el vehículo con los datos proporcionados por el usuario
        $vehiculo = new Vehiculo;
        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->anio = $request->anio;
        $vehiculo->precio = $request->precio;
        $vehiculo->dueno_id = $request->dueno;
        $vehiculo->save();

        // Crear un registro en la tabla "historicos" para guardar el historico
        $historico = new Historico;
        $historico->vehiculo_id = $vehiculo->id;
        $historico->usuario_id = $request->dueno;
        $historico->save();

        return redirect()->route('vehiculos.index')->with('success', 'Vehículo creado correctamente');
    }

    public function show($id)    {
        $vehiculo = Vehiculo::findOrFail($id);
        return view('vehiculos.show', ['vehiculo' => $vehiculo]);
    }

    public function edit($id)    {
        $vehiculo = Vehiculo::findOrFail($id);
        $usuarios = Usuario::all();
        return view('vehiculos.edit', ['vehiculo' => $vehiculo, 'usuarios' => $usuarios]);
    }

    public function update(Request $request, $id)    {
        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->anio = $request->anio;
        $vehiculo->precio = $request->precio;
        $vehiculo->dueno_id = $request->dueno;
        $vehiculo->save();
    
        $historico = new Historico();
        $historico->vehiculo_id = $vehiculo->id;
        $historico->usuario_id = $request->dueno;
        $historico->save();
    
        return redirect()->route('vehiculos.index')->with('success', 'Vehículo actualizado correctamente');
    }

    public function destroy($id){
        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->delete();
        return redirect()->route('vehiculos.index')->with('success', 'Vehículo eliminado correctamente');
    }
}
