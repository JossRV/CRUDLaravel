<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    
    public function index()
    {
        //pagina de inicio
        // como enviar datos
        // $datos = "Hola soy Joss";
        $datos = personas::all();
        return view('inicio',compact('datos'));
    }
    public function create()
    {
        //el formulario donde nosotros agregamos datos
        return view('agregar');
    }
    public function store(Request $request)
    {
        //sirve para guardar datos en la bd
        $personas = new Personas();
        $personas -> paterno = $request -> post('paterno');
        $personas -> materno = $request -> post('materno');
        $personas -> nombre = $request -> post('nombre');
        $personas -> fecha_nacimiento = $request -> post('fechaNac');
        $personas -> save();

        return redirect() -> route('personas.index') -> with('success',"Agregado con exito");
    }
    public function show($id)
    {
        //obtener solamente un registro de nuestra tabla
        $personas = Personas :: find($id);
        return view('eliminar',compact('personas'));
    }
    public function edit($id)
    {
        //traer los datosque se van a editar y los coloca en un formulario
        $personas = Personas :: find($id);
        return view('actualizar',compact('personas'));
        // echo $id;
    }
    public function update(Request $request, $id)
    {
        //actualizacion de datos de la bd
        $personas = Personas :: find($id);
        $personas -> paterno = $request -> post('paterno');
        $personas -> materno = $request -> post('materno');
        $personas -> nombre = $request -> post('nombre');
        $personas -> fecha_nacimiento = $request -> post('fechaNac');
        $personas -> save();
        
        return redirect() -> route('personas.index') -> with('success',"Actualizado con exito");
        
    }
    public function destroy($id)
    {
        //elimina un registro
        $personas = Personas :: find($id);
        $personas -> delete();
        return redirect() -> route('personas.index') -> with('success',"Eliminado con exito");
    }
}

// $datos = personas :: orderBy('paterno','desc') -> paginate(3);