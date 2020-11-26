<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\socios;
class SociosController extends Controller
{
    public function index()
    {
        $Socios = socios::orderBy('nombres','asc')
        ->where('sexo','=','masculino')
        ->get();
        return [
            'socios'=> $Socios
        ];
    }

    public function store(Request $request)
    {
       $Socios = new socios();
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
