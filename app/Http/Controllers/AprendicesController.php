<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aprendices;
class AprendicesController extends Controller
{
    public function index()
    {
        $Aprendices= aprendices::join('universitarios', 'aprendices.id_aprendiz','=','universitarios.id_universitario')
        ->select('nombres', 'apellidos', 'pasion','universitarios.nombres','universitarios.apellidos','universitarios.email')
        ->orderBy('universitarios.nombres', 'asc')
        ->get();
        return[
            'aprendiz'=>$Aprendices
        ];
    }
    public function store(Request $request)
    
    {
        $Aprendices = new aprendices();
        $Aprendices->nombres= $request->nombres;
        $Aprendices->apellidos= $request->apellidos;
        $Aprendices->pasion= $request->pasion;
        $Aprendices->preUniversitario= $request->preUniversitario;
        $Aprendices->email= $request->email;
        $Aprendices->sexo= $request->sexo;
        $Aprendices->direccion= $request->direccion;
        $Aprendices->nro_aprendiz= $request->nro_aprendiz;
        $Aprendices->apr_universidad= $request->apr_universidad;

        $Aprendices->save();
    }

    public function update(Request $request)
    {
        $Aprendices = aprendices::findOrFail($request->id_aprendiz);
        $Aprendices->nombres= $request->nombres;
        $Aprendices->apellidos= $request->apellidos;
        $Aprendices->pasion= $request->pasion;
        $Aprendices->preUniversitario= $request->preUniversitario;
        $Aprendices->email= $request->email;
        $Aprendices->sexo= $request->sexo;
        $Aprendices->direccion= $request->direccion;
        $Aprendices->nro_aprendiz= $request->nro_aprendiz;
        $Aprendices->apr_universidad= $request->apr_universidad;

        $Aprendices->save();
    }

    public function destroy(Request $request)
    {
        $Aprendices = aprendices::findOrFail($request->id_aprendiz);
        
        $Aprendices->delete();
    }
}
