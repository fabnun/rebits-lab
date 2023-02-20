@extends('/layouts/master')
@section('title', 'Editar vehículo')
@section('content')
    <div class="container">
        <form action="{{ route('vehiculos.update', $vehiculo->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="marca">Marca</label>
                <input required type="text" class="form-control" id="marca" name="marca" value="{{ $vehiculo->marca }}">
            </div>
            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input required type="text" class="form-control" id="modelo" name="modelo" value="{{ $vehiculo->modelo }}">
            </div>
            <div class="form-group">
                <label for="year">Año</label>
                <input required min="1900" max="2023" type="number" class="form-control" id="anio" name="anio" value="{{ $vehiculo->anio }}">
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input required min="0" type="number" class="form-control" id="precio" name="precio" value="{{ $vehiculo->precio }}">
            </div>
            <div class="form-group">
                <label for="dueno">Dueño</label>
                <select class="form-control" id="dueno" name="dueno">
                <option value="">- SIN DUEÑO -</option>
                    @foreach($usuarios as $usuario)
                        <option value="{{ $usuario->id }}" {{ $usuario->id === $vehiculo->dueno_id ? 'selected' : '' }}>{{ $usuario->nombre }} {{ $usuario->apellidos }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" >Actualizar</button>
        </form>
    </div>
@stop