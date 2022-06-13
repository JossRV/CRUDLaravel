@extends('layout/plantilla')
@section('tituloPagina','Eliminar registro')
@section('contenido')
<div class="card">
    <div class="card-header">
        Eliminar Registro
    </div>  
    <div class="card-body">
        <p class="card-text">
           <div class="alert alert-danger" role="alert">
                <h1 class="display-2">Estas seguro de eliminar este registro ¿?</h1>
                <table class="table table-sm table-hover mt-3">
                    <thead align="center">
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Nombre</th>
                        <th>Fecha de Nacimiento</th>
                    </thead>
                    <tbody align="center">
                        <td>{{$personas -> paterno}}</td>
                        <td>{{$personas -> materno}}</td>
                        <td>{{$personas -> nombre}}</td>
                        <td>{{$personas -> fecha_nacimiento}}</td>
                    </tbody>
                </table>
            </div>
            <hr>
            <form action="{{route('personas.destroy',$personas -> id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline-dark"><i class="fa-solid fa-user-xmark"></i></button>
                <a href="{{route("personas.index")}}" class="btn btn-outline-warning"><i class="fa-solid fa-arrow-rotate-left"></i></a>
            </form>
        </p>
    </div>
</div>
@endsection
