<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\socios;
class SociosController extends Controller
{
    public function index()
    {
        $socios = socios::all();
        return [
            'socios'=> $socios
        ];
    }

    public function store(Request $request)
    {
       $socios = new socios();
       $socios->nombres = $request->nombres;
       $socios->apellidos = $request->apellidos;
       $socios->telefono = $request->telefono;
       $socios->direccion = $request->direccion;
       $socios->edad = $request->edad;
       $socios->email = $request->email;
       $socios->sexo = $request->sexo;
       $socios->contrato = $request->contrato;
       $socios->save();
    }
    public function update(Request $request)
    {
        $Socios = socios::findOrFail($request->id_socio);
        $Socios->nombres= $request->nombres;
        $Socios->apellidos= $request->apellidos;
        $Socios->telefono= $request->telefono;
        $Socios->direccion= $request->direccion;
        $Socios->edad= $request->edad;
        $Socios->email= $request->email;
        $Socios->sexo= $request->sexo;
        $Socios->contrato= $request->contrato;
 
        $Socios->save();
    }


    public function destroy(Request $request)
    {
        $Socios = socios::findOrFail($request->id_socio);
        $Socios->delete();
    }
}
