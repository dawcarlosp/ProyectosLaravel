@extends('layout/template')

@section('title', 'Producto '.$producto->id)

@section('content')
<h1 class="text-center">Producto {{$producto->id}}</h1>
<h2 class="text-center">Codigo: {{$producto->codigo}}</h2>
<h2 class="text-center">Descripcion: {{$producto->descripcion}}</h2>
<h2 class="text-center">Precio: {{$producto->precio}}</h2>
<h2 class="text-center">Existencias: {{$producto->existencia}}</h2>
<img src="https://cdn.worldvectorlogo.com/logos/real-madrid-c-f.svg" alt="" width="200px" height="auto" class="my-3 rounded-5">
<a class="btn btn-light font-weight-bold" href="{{url('/productos')}}">Volver a inicio</a>
@endsection