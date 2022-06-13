@extends('layout/plantilla')
@section('tituloPagina' , 'Crud con Laravel')
@section('contenido')

<div class="card">
    <div class="card-header">
        Crud con Laravel
    </div>
    <div class="card-body">
        <h5 class="card-title">Listado de Personas en el Sistema</h5>
        <p>
            <a href="{{ route("personas.create")}}" class="btn btn-outline-dark d-flex justify-content-center align-items-center"> 
                <i class="fa-solid fa-user-plus fa-1x m-2"></i>  Agregar Nueva Persona
            </a>
            <div class="row">
                <div class="col">
                    @if ($mensaje = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{$mensaje}}
                        </div>
                    @endif
                </div>
            </div>
        </p>
        <hr>
        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered" style="width: 100%">
                    <thead align="center">
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Nombre</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody align="center">
                        @foreach ($datos as $item)
                        <tr>
                            <td> {{$item -> paterno}} </td>
                            <td> {{$item -> materno}} </td>
                            <td> {{$item -> nombre}} </td>
                            <td> {{$item -> fecha_nacimiento}} </td>
                            <td>
                                <form action="{{route('personas.edit',$item->id)}}" method="GET">
                                    <button class="btn btn-link btn-sm" style="text-decoration: none; color:black">
                                        <i class="fa-solid fa-user-pen"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('personas.show',$item->id)}}" method="GET">
                                    <button class="btn btn-link btn-sm" style="text-decoration: none; color:black">
                                        <i class="fa-solid fa-user-xmark"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
            {{-- <div class="row">
                <div class="col">
                    {{$datos->links()}}
                </div>
            </div> --}}
        </p>
    </div>
</div>

@endsection
