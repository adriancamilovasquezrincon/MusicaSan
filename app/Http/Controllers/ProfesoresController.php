<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profesores;
class ProfesoresController extends Controller
{
    public function index()
    {
        $Profesores = profesores::orderBy('nombres','desc')
        ->where('sexo','=','femenino')
        ->get();
        return [
            'profesor'=> $Profesores
        ];
    }

    public function store(Request $request)
    {
       $Profesores = new profesores();
       $Profesores->nombres= $request->nombres;
       $Profesores->apellidos= $request->apellidos;
       $Profesores->direccion= $request->direccion;
       $Profesores->telefono= $request->telefono;
       $Profesores->sexo= $request->sexo;
       $Profesores->edad= $request->edad;
       $Profesores->email= $request->email;
       $Profesores->cargo= $request->cargo;

       $Profesores->save();
    }
    public function update(Request $request)
    {
        $Profesores = profesores::findOrFail($request->id_profesor);
        $Profesores->nombres= $request->nombres;
        $Profesores->apellidos= $request->apellidos;
        $Profesores->direccion= $request->direccion;
        $Profesores->telefono= $request->telefono;
        $Profesores->sexo= $request->sexo;
        $Profesores->edad= $request->edad;
        $Profesores->email= $request->email;
        $Profesores->cargo= $request->cargo;
 
 
        $Profesores->save();
    }

    public function destroy(Request $request)
    {
        $Profesores = profesores::findOrFail($request->id_profesor);
        
        $Profesores->delete();
    }
}
