@extends('/layouts/master')
@section('title', 'Ver usuario')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>
                            <form style="float:right;height:0" action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
                                <button title="Borrar" onclick="if (!confirm('Confirme Borrar')) event.preventDefault()" class="button boton" type="submit">✖</button>
                                <a title="Editar" class="button boton" href="{{ route('usuarios.edit', $usuario->id) }}">✎</a>
                                @csrf
                                @method('DELETE')
                            </form>

                            <strong>Nombre: </strong>{{ $usuario->nombre }}</p>
                        <p><strong>Apellidos: </strong>{{ $usuario->apellidos }}</p>
                        <p><strong>Correo electrónico: </strong>{{ $usuario->correo}}</p>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop