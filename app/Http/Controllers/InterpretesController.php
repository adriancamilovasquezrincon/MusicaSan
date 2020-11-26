<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\interpretes;
class InterpretesController extends Controller
{
    public function index()
    {
        $interpretes= interpretes::join('profesores', 'interpretes.id_interprete','=','profesores.id_profesor', 'estudiantes', 'interpretes.id_interprete', '=', 'estudiantes.id_estudiante')
        ->select('nombres', 'apellidos', 'instrumento','profesores.nombres','profesores.apellidos','profesores.cargo')
        ->select('nombres', 'edad', 'ocupacion','estudiantes.nombres','estudiantes.apellidos','estudiantes.talento')
        ->orderBy('profesores.nombres', 'asc')
        ->orderBy('estudiantes.nombres', 'asc')
        ->get();
        return[
            'interprete'=>$interpretes
        ];
    }
    public function store(Request $request)
    
    {
        $interpretes = new interpretes();
        $interpretes->nombres= $request->nombres;
        $interpretes->apellidos= $request->apellidos;
        $interpretes->instrumento= $request->instrumento;
        $interpretes->edad= $request->edad;
        $interpretes->ocupacion= $request->ocupacion;
        $interpretes->email= $request->email;
        $interpretes->int_profesor= $request->int_profesor;
        $interpretes->int_estudiante= $request->int_estudiante;

        $interpretes->save();
    }

    public function update(Request $request)
    {
        $interpretes = interpretes::findOrFail($request->id_interprete);
        $interpretes->nombres= $request->nombres;
        $interpretes->apellidos= $request->apellidos;
        $interpretes->instrumento= $request->instrumento;
        $interpretes->edad= $request->edad;
        $interpretes->ocupacion= $request->ocupacion;
        $interpretes->email= $request->email;
        $interpretes->int_profesor= $request->int_profesor;
        $interpretes->int_estudiante= $request->int_estudiante;

        $interpretes->save();
    }

    public function destroy(Request $request)
    {
        $interpretes = interpretes::findOrFail($request->id_interprete);
        
        $interpretes->delete();
    }
}
