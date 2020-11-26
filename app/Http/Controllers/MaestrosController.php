<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\maestros;
class MaestrosController extends Controller
{
    public function index()
    {
        $Maestros = maestros::orderBy('nombres','asc')
        ->where('edad','<=','30')
        ->get();
        return [
            'maestro'=> $Maestros
        ];
    }

    public function store(Request $request)
    {
       $Maestros = new maestros();
       $Maestros->nombres= $request->nombres;
       $Maestros->apellidos= $request->apellidos;
       $Maestros->direccion= $request->direccion;
       $Maestros->edad= $request->edad;
       $Maestros->email= $request->email;
       $Maestros->sexo= $request->sexo;
       $Maestros->titulo= $request->titulo;
       $Maestros->especializado= $request->especializado;

       $Maestros->save();
    }
    public function update(Request $request)
    {
        $Maestros = maestros::findOrFail($request->id_maestro);
        $Maestros->nombres= $request->nombres;
        $Maestros->apellidos= $request->apellidos;
        $Maestros->direccion= $request->direccion;
        $Maestros->edad= $request->edad;
        $Maestros->email= $request->email;
        $Maestros->sexo= $request->sexo;
        $Maestros->titulo= $request->titulo;
        $Maestros->especializado= $request->especializado;
 
        $Maestros->save();
    }


    public function destroy(Request $request)
    {
        $Maestros = maestros::findOrFail($request->id_maestro);
        
        $Maestros->delete();
    }
}
