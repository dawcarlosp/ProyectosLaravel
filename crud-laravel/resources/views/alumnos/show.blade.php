@extends('layout/template')

@section('title', 'Show | Escuela')

@section('content')
<div class="rouende-5 text-center border p-5 rounded-5">
<h1>Detalle del alumno: {{$alumno->id}}</h1>
<p><strong>Matricula:</strong> {{ $alumno->matricula }}</p>
<p><strong>Nombre:</strong> {{ $alumno->nombre }}</p>
<p><strong>Fecha de nacimiento:</strong> {{ $alumno->fecha_nacimiento }}</p>
<p><strong>Telefono:</strong> {{ $alumno->telefono }}</p>
<p><strong>Email:</strong> {{ $alumno->email }}</p>
</div>
<a href="{{url('alumnos')}}" class="btn btn-secondary mt-5">Regresar</a>
@endsection