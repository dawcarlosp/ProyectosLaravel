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
            <th scope="row">{{ $item->id}}</th>
            <td>{{ $item->codigo}}</td>
            <td>{{ $item->descripcion}}</td>
            <td>{{ $item->precio}}</td>
            <td>{{ $item->existencia}}</td>
            <td class="text-center">
                <form action="" method="post">
                    @csrf
                    @method('PUT')
                    <button type="submit"><i class="bi bi-pencil-square fs-5"></i></button>
                </form>
            </td>
            <td class="text-center">
                <form action="{{ url('/productos/'.$item->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit"><i class="bi bi-trash2-fill fs-5"></i></button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
<a class="btn btn-light" href="productos/create" value="button">Crear nuevo producto</a>
@endsection