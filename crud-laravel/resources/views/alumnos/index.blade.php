@extends('layout/template')

@section('title', 'Alumnos')

@section('content')

<h1 class="text-center">Listado de alumnos</h1>
<form action="{{url('/alumnos/fechaNacimiento')}}" method="post" >
    @csrf
    <label for="fecha" class="label-form ">
        Año de nacimiento:
    </label>
    <input type="date" id="fecha" name="fecha" class="form-control mb-3">
    <button type="submit" class="btn btn-light">Mostrar los alumnos de esta fecha</button>
    <a href="{{ url('/alumnos') }}" class="btn btn-light">Mostrar todos</a>
</form>
<table class="table table-dark table-striped table-bordered table-hover table-sm table-responsive">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Matricula</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha de nacimiento</th>
            <th scope="col">Telefono</th>
            <th scope="col">Email</th>
            <th scope="col" class="text-center">EDITAR</th>
            <th scope="col" class="text-center">ELIMINAR</th>
            @if (session('mensajeUpdate'))
            <th scope="col"></th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach($lista AS $item)
        <tr>
            <th scope="row">
                <a href="{{ route('alumnos.show', $item->id) }}" class="text-light text-decoration-none">
                    <i class="bi bi-eye-fill fs-5"></i>
                    {{ $item->id}}
                </a>
            </th>
            <td>{{ $item->matricula}}</td>
            <td>{{ $item->nombre}}</td>
            <td>{{ $item->fecha_nacimiento}}</td>
            <td>{{ $item->telefono}}</td>
            <td>{{ $item->email}}</td>
            <td class="text-center">
                <a href="{{ url('/alumnos/'.$item->id.'/edit') }}"><i class="bi bi-pencil-square text-light fs-5"></i></a>
            </td>
            <td class="text-center">
                <form action="{{ url('/alumnos/'.$item->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="botonDelete"><i class="bi bi-trash2-fill fs-5"></i></button>
                </form>
            </td>
            @if (session('mensajeUpdate'))
            <td>
                @if(session('idUpdate') == $item->id)
                <div class="alert alert-success">
                    {{ session('mensajeUpdate') }}
                </div>
                @endif
            </td>
            @endif
        </tr>
        @endforeach
        @if ($lista -> isEmpty())
        <div class="alert alert-info">Nada que mostrar</div>
        @endif
    </tbody>
</table>
@if(session('mensajeDestroy'))
<div class="alert alert-danger">
    {{ session('mensajeDestroy') }}
</div>
@endif
@if(session('mensajeStore'))
<div class="alert alert-info">
    {{ session('mensajeStore') }}
</div>
@endif
<a class="btn btn-light" href="alumnos/create" value="button">Dar de alta nuevo Alumno</a>
@endsection

<script src="{{ asset('js/index.js') }}" defer></script>