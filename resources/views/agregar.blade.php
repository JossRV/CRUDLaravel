@extends('layout/plantilla')
@section('tituloPagina','Crear nuevo registro')
@section('contenido')
<div class="card">
    <div class="card-header">
        Nuevo Registro
    </div>  
    <div class="card-body">
        <p class="card-text">
            <form action="{{route('personas.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control mt-2 mb-2" name="nombre" placeholder="NOMBRE" required>
                    </div>
                    <div class="col">
                        <label for="">Apellido Paterno</label>
                        <input type="text" class="form-control mt-2 mb-2" name="paterno" placeholder="APELLIDO PATERNO" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Apellido Materno</label>
                        <input type="text" class="form-control mt-2 mb-2" name="materno" placeholder="APELLIDO MATERNO" required>
                    </div>
                    <div class="col">
                        <label for="">Fecha de Nacimiento</label>
                        <input type="date" class="form-control mt-2 mb-2" name="fechaNac" placeholder="FECHA DE NACIMIENTO" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <button type="submit" class="btn btn-outline-dark"><i class="fa-solid fa-user-plus"></i></button>
                        <a href="{{route("personas.index")}}" class="btn btn-outline-warning"><i class="fa-solid fa-arrow-rotate-left"></i></a>
                    </div>
                </div>
            </form>
        </p>
    </div>
</div>
@endsection
