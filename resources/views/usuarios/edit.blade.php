@extends('/layouts/master')
@section('title', 'Editar usuario')
@section('content')
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input required type="text" name="nombre" class="form-control" id="nombre" value="{{ $usuario->nombre }}">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input required type="text" name="apellidos" class="form-control" id="apellidos" value="{{ $usuario->apellidos }}">
        </div>
        <div class="form-group">
            <label for="correo">Correo:</label>
            <input required type="email" name="correo" class="form-control" id="correo" value="{{ $usuario->correo }}">
        </div>
        <button type="submit" >Actualizar</button>
    </form>
@stop