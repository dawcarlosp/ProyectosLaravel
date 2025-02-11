@extends('layout/template')

@section('title', 'Editar | Escuela')

@section('content')

<main>
    <div class="container">
        <h2>Registrar alumno {{$alumno->nombre}}</h2>
        <form action="{{url('alumnos/'.$alumno->id)}}" method="post">
        @method("put")    
        @csrf
            <div class="mb-3 row">
                <label for="matricula" class="form-label">Matrícula</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="matricula" id="matricula" value="{{$alumno->matricula}}"
                        </div>
                </div>
                <div class="mb-3 row">
                    <label for="nombre" class="form-label">Nombre completo</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{$alumno->nombre}}">
                    </div>
                </div>
                <div class=" mb-3 row">
                    <label for="fecha" class="form-label">Fecha de nacimiento</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" name="fecha" id="fecha" value="{{$alumno->fecha_nacimiento}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="telefono" id="telefono" value="{{$alumno->telefono}}">
                    </div>
                </div>
                <div class=" mb-3 row">
                    <label for="email" class="form-label">Email</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="email" id="email" value="{{$alumno->email}}">
                    </div>
                </div>

            </div>
            <a href="{{url('alumnos')}}" class="btn btn-secondary">Regresar</a>
            <button class="btn btn-success" >Actualizar</button>
        </form>
    </div>
</main>
<a class="btn btn-light font-weight-bold" href="{{url('/alumnos')}}">Volver a inicio</a>
@endsection