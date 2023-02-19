@extends('/layouts/master')
@section('title', 'Lista de usuarios')
@section('content')
    <table class="u-full-width">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Apellidos</th>
                <th class="hide-mobile">Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuarios)
                <tr>
                    <td>{{ $usuarios->id }}</td>
                    <td><a title="Ver"  href="{{ route('usuarios.show', $usuarios->id) }}" class="btn btn-info">{{ $usuarios->nombre }} {{ $usuarios->apellidos }}</a></td>
                    <td class="hide-mobile">{{ $usuarios->correo }}</td>
                    <td>
                        
                        <form action="{{ route('usuarios.destroy', $usuarios->id) }}" method="POST" class="d-inline">
                            <a title="Ver" class="button" href="{{ route('usuarios.show', $usuarios->id) }}" class="btn btn-info">◉</a>
                            <a title="Editar" class="button" href="{{ route('usuarios.edit', $usuarios->id) }}" >✎</a>
                            @csrf
                            @method('DELETE')
                            <button title="Borrar" onclick="if (!confirm('Confirme Borrar')) event.preventDefault()" class="button" type="submit" class="btn btn-danger">✖</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('usuarios.create') }}" class="u-pull-right">Agregar usuario</a>
@stop

