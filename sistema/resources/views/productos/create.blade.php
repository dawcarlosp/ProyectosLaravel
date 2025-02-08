@extends('layout/template')

@section('title', 'Crear Producto')

@section('content')
<form action="{{ url('/productos') }}" method="post">
    @csrf
    <legend class="text-center font-weight-bold">Crear Producto</legend>
    <div class="mb-2 text-center">
        <label for="descripcion" class="form-label">Descripción:</label>
        <input type="text" id="descripcion" class="form-control" name="descripcion">
    </div>
    <div class="mb-2 text-center">
        <label for="descripcion" class="form-label">Precio:</label>
        <input type="number" id="precio" class="form-control" step="0.1" name="precio">
    </div>
    <div class="mb-2 text-center">
        <label for="existencia" class="form-label">Existencias:</label>
        <input type="number" id="existencia" class="form-control" name="existencia" step="1">
    </div>
    <div class="text-center">
    <input type="submit" value="Crear" class="btn btn-light font-weight-bold">
    </div>   
</form>
<a class="btn btn-light font-weight-bold" href="{{url('/productos')}}">Volver a inicio</a>
@endsection