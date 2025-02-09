@extends('layout/template')

@section('title', 'Editar producto '.$producto->id)

@section('content')
<form action="{{ url('/productos/'.$producto->id) }}" method="post" class="mb-3 bg-black p-5 rounded-5 border border-light">
    @method("put")
    @csrf
    <legend class="text-center font-weight-bold">Editar Producto: {{$producto->id}}</legend>
    <div class="mb-2 text-center">
        <label for="descripcion" class="form-label">Descripción:</label>
        <input type="text" id="descripcion" class="form-control" name="descripcion" value="{{ $producto->descripcion}} ">
    </div>
    <div class="mb-2 text-center">
        <label for="descripcion" class="form-label">Precio:</label>
        <input type="number" id="precio" class="form-control" step="0.1" name="precio"  value="{{trim($producto->precio)}}">
    </div>
    <div class="mb-2 text-center">
        <label for="existencia" class="form-label">Existencias:</label>
        <input type="number" id="existencia" class="form-control" name="existencia" step="1"  value="{{trim($producto->existencia)}}">
    </div>
    <div class="text-center">
    <input type="submit" value="Actualizar" class="btn btn-light font-weight-bold btn-edit">
    </div>   
</form>
<a class="btn btn-light font-weight-bold" href="{{url('/productos')}}">Volver a inicio</a>
@endsection