<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cantantes;
class CantantesController extends Controller
{
    public function index()
    {
        $Cantantes= cantantes::join('socios', 'cantantes.id_cantante','=','socios.id_socio')
        ->select('nombres', 'apellidos', 'telefono','socios.nombres','socios.apellidos','socios.telefono')
        ->get();
        return[
            'cantantes'=>$Cantantes
        ];
    }
    public function store(Request $request)
    
    {
        $Cantantes = new cantantes();
        $Cantantes->nombres= $request->nombres;
        $Cantantes->apellidos= $request->apellidos;
        $Cantantes->telefono= $request->telefono;
        $Cantantes->nombre_artistico= $request->nombre_artistico;
        $Cantantes->sexo= $request->sexo;
        $Cantantes->direccion= $request->direccion;
        $Cantantes->edad= $request->edad;
        $Cantantes->cant_socio= $request->cant_socio;

        $Cantantes->save();
    }

    public function update(Request $request)
    {
        $Cantantes = cantantes::findOrFail($request->id_cantante);
        $Cantantes->nombres= $request->nombres;
        $Cantantes->apellidos= $request->apellidos;
        $Cantantes->telefono= $request->telefono;
        $Cantantes->nombre_artistico= $request->nombre_artistico;
        $Cantantes->sexo= $request->sexo;
        $Cantantes->direccion= $request->direccion;
        $Cantantes->edad= $request->edad;
        $Cantantes->cant_socio= $request->cant_socio;
        
        $Cantantes->save();
    }

    public function destroy(Request $request)
    {
        $Cantantes = cantantes::findOrFail($request->id_cantante);
        
        $Cantantes->delete();
    }
}
