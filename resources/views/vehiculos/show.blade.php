@extends('/layouts/master')
@section('title', 'Detalle del vehículo')
@section('content')
    <div>
        <p>
        
            <form style="float:right;height:0" action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST">
                <button title="Borrar" onclick="if (!confirm('Confirme Borrar')) event.preventDefault()" class="button boton" type="submit">✖</button>
                <a title="Editar" class="button boton" href="{{ route('vehiculos.edit', $vehiculo->id) }}">✎</a>
                @csrf
                @method('DELETE')
            </form>
            
            <strong>ID:</strong> {{ $vehiculo->id }}</p>
        <p><strong>Marca:</strong> {{ $vehiculo->marca }}</p>
        <p><strong>Modelo:</strong> {{ $vehiculo->modelo }}</p>
        <p><strong>Año:</strong> {{ $vehiculo->anio }}</p>
        <p><strong>Precio:</strong> {{ $vehiculo->precio }}</p>
        @if($vehiculo->dueno)
            <p><strong>Dueño:</strong> {{ $vehiculo->dueno->nombre }} {{ $vehiculo->dueno->apellidos }}</p>
        @else
            <p><strong>Dueño:</strong> Sin Dueño</p>
        @endif
        

        <div style="padding:18px;border:1px solid gray;border-radius:12px;">
            <h5>Historial de dueños</h5>
            <ul>
                @foreach($vehiculo->historicos->reverse() as $dueno)
                    @if($dueno->usuario)
                        
                            <li>{{ date('d-M-Y H:i', strtotime($dueno->created_at))}} / <a title="Ver" href="{{ route('usuarios.show', $dueno->usuario->id) }}">
                            {{ $dueno->usuario->nombre }} {{ $dueno->usuario->apellidos}} {{      $dueno->usuario_id?"(ID:".$dueno->usuario_id.")":""}}</a>
                            </li>
                        
                    @else
                        <li>{{ date('d-M-Y H:i', strtotime($dueno->created_at))}} / Sin Dueño {{      $dueno->usuario_id?"(ID:".$dueno->usuario_id.")":""}}</li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
@stop