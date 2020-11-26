<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\universitarios;
class UniversitariosController extends Controller
{
    public function index()
    {
        $Universitarios = universitarios::orderBy('nombres','asc')
        ->where('edad','>=','22')
        ->get();
        return [
            'universidad'=> $Universitarios
        ];
    }

    public function store(Request $request)
    {
       $Universitarios = new universitarios();
       $Universitarios->nombres= $request->nombres;
       $Universitarios->apellidos= $request->apellidos;
       $Universitarios->edad= $request->edad;
       $Universitarios->sexo= $request->sexo;
       $Universitarios->email= $request->email;
       $Universitarios->direccion= $request->direccion;
       $Universitarios->estudio_enseñar= $request->estudio_enseñar;

       $Universitarios->save();
    }
    public function update(Request $request)
    {
        $Universitarios = universitarios::findOrFail($request->id_universitario);
        $Universitarios->nombres= $request->nombres;
        $Universitarios->apellidos= $request->apellidos;
        $Universitarios->edad= $request->edad;
        $Universitarios->sexo= $request->sexo;
        $Universitarios->email= $request->email;
        $Universitarios->direccion= $request->direccion;
        $Universitarios->estudio_enseñar= $request->estudio_enseñar;
 
        $Universitarios->save();
    }

    public function destroy(Request $request)
    {
        $Universitarios = universitarios::findOrFail($request->id_universitario);
        
        $Universitarios->delete();
    }
}
