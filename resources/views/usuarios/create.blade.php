@extends('/layouts/master')
@section('title', 'Agregar usuario')
@section('content')
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input required type="text" name="nombre" class="form-control" id="nombre">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input required type="text" name="apellidos" class="form-control" id="apellidos">
        </div>
        <div class="form-group">
            <label for="correo">Correo:</label>
            <input required type="email" name="correo" class="form-control" id="correo">
        </div>
        <button type="submit">Agregar</button>
    </form>
@stop