@extends('layout/template')

@section('title', 'Editar producto')

@section('content')
<form action="{{ url('/productos') }}" method="post">
    @method("put")
    @csrf
    <label for="descripcion" class="form-label">Descripción:</label>
    <input type="text" id="descripcion" class="form-input" name="descripcion">
    <label for="descripcion"  class="form-label">Precio:</label>
    <input type="numberr" id="precio" class="form-input" step="0.1" name="precio">
    <label for="existencia"  class="form-label">Existencias:</label>
    <input type="number" id="existencia" class="form-input" name="existencia" step="0.1">
    <input type="submit" value="Crear" class="btn btn-light">
</form>
@endsection