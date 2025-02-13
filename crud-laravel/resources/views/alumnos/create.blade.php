@extends('layout/template')

@section('title', 'Insertar | Escuela')

@section('content')

<main>
    <div class="container">
        <h2>Registrar alumno</h2>
        <form action="{{url('alumnos')}}" method="post">
            @csrf
            <div class="mb-3 row">
                <label for="matricula" class="form-label">Matrícula</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="matricula" id="matricula" value="{{old('matricula')}}"
                        </div>
                        @error('matricula')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 row">
                    <label for="nombre" class="form-label">Nombre completo</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombr')}}">
                    </div>
                    @error('nombre')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class=" mb-3 row">
                    <label for="fecha" class="form-label">Fecha de nacimiento</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" name="fecha" id="fecha" value="{{old('date')}}">
                    </div>
                    @error('fecha')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 row">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="telefono" id="telefono" value="{{old('telefono')}}">
                    </div>
                    @error('telefono')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class=" mb-3 row">
                    <label for="email" class="form-label">Email</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="email" id="email" value="{{old('email')}}">
                    </div>
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <a href="{{url('alumnos')}}" class="btn btn-secondary">Regresar</a>
            <button class="btn btn-success">Guardar</button>
        </form>
    </div>
</main>

@endsection