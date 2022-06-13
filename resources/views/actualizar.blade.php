@extends('layout/plantilla')
@section('tituloPagina','Actualizar registro')
@section('contenido')
<div class="card">
    <div class="card-header">
        Actualizar Registro
    </div>  
    <div class="card-body">
        <p class="card-text">
            <form action="{{route('personas.update', $personas -> id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control mt-2 mb-2" value="{{$personas -> nombre}}" name="nombre" required>
                    </div>
                    <div class="col">
                        <label for="">Apellido Paterno</label>
                        <input type="text" class="form-control mt-2 mb-2" value="{{$personas -> paterno}}" name="paterno" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Apellido Materno</label>
                        <input type="text" class="form-control mt-2 mb-2" value="{{$personas -> materno}}" name="materno" required>
                    </div>
                    <div class="col">
                        <label for="">Fecha de Nacimiento</label>
                        <input type="text" class="form-control mt-2 mb-2" value="{{$personas -> fecha_nacimiento}}" name="fechaNac" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <button type="submit" class="btn btn-outline-dark"><i class="fa-solid fa-user-pen"></i></button>
                        <a href="{{route("personas.index")}}" class="btn btn-outline-warning"><i class="fa-solid fa-arrow-rotate-left"></i></a>
                    </div>
                </div>
            </form>
        </p>
    </div>
</div>
@endsection
