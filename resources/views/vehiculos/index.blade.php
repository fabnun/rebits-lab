@extends('/layouts/master')
@section('title', 'Lista de vehículos')
@section('content')
  <table class="u-full-width">
    <thead>
      <tr>
        <th>Id</th>
        <th>Marca Modelo</th>
        <th class='hide-mobile'>Año</th>
        <th class='hide-mobile'>Precio</th>
        <th>Dueño</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($vehiculos as $vehiculo)
      <tr>
        <td>{{ $vehiculo->id }}</td>
        <td><a title="Ver" href="{{ route('vehiculos.show', $vehiculo->id) }}">{{ $vehiculo->marca }} {{ $vehiculo->modelo }}</a></td>
        <td class='hide-mobile'>{{ $vehiculo->anio }}</td>
        <td class='hide-mobile'>{{ $vehiculo->precio }}</td>
        <td>
          @if($vehiculo->dueno)
          <a title="Ver" href="{{ route('usuarios.show', $vehiculo->dueno->id) }}">{{ $vehiculo->dueno->nombre }} {{ $vehiculo->dueno->apellidos }}</a>
          @else
              Sin dueño
          @endif
      </td>
        <td>
          
          <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST">
            <a title="Ver" class="button" href="{{ route('vehiculos.show', $vehiculo->id) }}">◉</a>
            <a title="Editar" class="button" href="{{ route('vehiculos.edit', $vehiculo->id) }}">✎</a>
            @csrf
            @method('DELETE')
            <button title="Borrar" onclick="if (!confirm('Confirme Borrar')) event.preventDefault()" class="button" type="submit">✖</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a class="u-pull-right" href="{{ route('vehiculos.create') }}">Agregar vehículo</a>
@stop