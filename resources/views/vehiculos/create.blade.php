@extends('/layouts/master')
@section('title', 'Agregar vehículo')
@section('content')
  <form action="{{ route('vehiculos.store') }}" method="POST">
    @csrf
    <label for="marca">Marca:</label>
    <input type="text" name="marca" id="marca" required>
    <br>
    <label for="modelo">Modelo:</label>
    <input type="text" name="modelo" id="modelo" required>
    <br>
    <label for="anio">Año:</label>
    <input min="1900" max="2023" type="number" name="anio" id="anio" required>
    <br>
    <label for="precio">Precio:</label>
    <input min="0" type="number" name="precio" id="precio" required>
    <br>
    <label for="dueno">Dueño:</label>
    <select name="dueno" id="dueno">
      <option value="">- SIN DUEÑO -</option>
      @foreach ($usuarios as $usuario)
      <option value="{{ $usuario->id }}">{{ $usuario->nombre }} {{ $usuario->apellidos }}</option>
      @endforeach
    </select>
    <br>
    <button type="submit">Agregar vehículo</button>
  </form>
@stop
