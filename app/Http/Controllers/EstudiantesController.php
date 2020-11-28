<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudiantes;
class EstudiantesController extends Controller
{
    public function index()
    {
        $Estudiantes= estudiantes::join('maestros', 'estudiantes.id_estudiante','=','maestros.id_maestro')
        ->select('nombres', 'apellidos', 'direccion','maestros.nombres','maestros.apellidos','maestros.edad')
        ->orderBy('maestros.nombres', 'asc')
        ->get();
        return[
            'estudiante'=>$Estudiantes
        ];
    }
    public function store(Request $request)
    
    {
        $Estudiantes = new estudiantes();
        $Estudiantes->nombres= $request->nombres;
        $Estudiantes->apellidos= $request->apellidos;
        $Estudiantes->direccion= $request->direccion;
        $Estudiantes->edad= $request->edad;
        $Estudiantes->email= $request->email;
        $Estudiantes->sexo= $request->sexo;
        $Estudiantes->talento= $request->talento;
        $Estudiantes->est_maestro= $request->est_maestro;

        $Estudiantes->save();
    }

    public function update(Request $request)
    {
        $Estudiantes = estudiantes::findOrFail($request->id_estudiante);
        $Estudiantes->nombres= $request->nombres;
        $Estudiantes->apellidos= $request->apellidos;
        $Estudiantes->direccion= $request->direccion;
        $Estudiantes->edad= $request->edad;
        $Estudiantes->email= $request->email;
        $Estudiantes->sexo= $request->sexo;
        $Estudiantes->talento= $request->talento;
        $Estudiantes->est_maestro= $request->est_maestro;
        $Estudiantes->save();
    }

    public function destroy(Request $request)
    {
        $Estudiantes = estudiantes::findOrFail($request->id_estudiante);
        
        $Estudiantes->delete();
    }
}
