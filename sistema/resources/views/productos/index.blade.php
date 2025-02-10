@extends('layout/template')

@section('title', 'Productos')

@section('content')
<h1 class="text-center">Lista de productos</h1>
<table class="table table-dark table-striped table-bordered table-hover table-sm table-responsive">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CÓDIGO</th>
            <th scope="col">DESCRIPCIÓN</th>
            <th scope="col">PRECIO</th>
            <th scope="col">STOCK</th>
            <th scope="col" class="text-center">EDITAR</th>
            <th scope="col" class="text-center">ELIMINAR</th>
        </tr>
    </thead>
    <tbody>
        @foreach($lista AS $item)
        <tr>
            <th scope="row">
                <a href="{{ url('/productos/'.$item->id)}}" class="text-light text-decoration-none">
                <i class="bi bi-eye-fill fs-5"></i>
                {{ $item->id}}
                </a>
            </th>
            <td>{{ $item->codigo}}</td>
            <td>{{ $item->descripcion}}</td>
            <td>{{ $item->precio}}</td>
            <td>{{ $item->existencia}}</td>
            <td class="text-center">
                <a href="{{ url('/productos/'.$item->id.'/edit') }}"><i class="bi bi-pencil-square text-light fs-5"></i></a>
            </td>
            <td class="text-center">
                <form action="{{ url('/productos/'.$item->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="botonDelete" ><i class="bi bi-trash2-fill fs-5"></i></button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
<a class="btn btn-light" href="productos/create" value="button" id="boton">Crear nuevo producto</a>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    document.addEventListener("keypress", function (ev) {
     if(ev.key === "Enter"){
        document.getElementById("boton").click();
     }
    });
  });
</script>
@endsection