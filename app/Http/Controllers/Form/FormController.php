<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departamentos;
use App\Models\Provincias;
use App\Models\Distritos;

class FormController extends Controller
{
    

    public function create(){
        
        $departamentos = Departamentos::get(['name', 'id']);
        return view('fichas.monitoreo.ficha1-1', compact('departamentos'));
    }

    public function fetchProvincias(Request $request){
        $provincias = Provincias::where('departamento_id', $request->departamentos_id)->get(['name','id']);
        return response()->json($provincias);
    }

    public function fetchDistritos(Request $request){
        $provincias = Distritos::where('provincia_id', $request->provincia_id)->get(['name','id']);
        return response()->json($provincias);
    }



    
}
