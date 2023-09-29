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
        
       
        return view('Fichas.Monitoreo.Result.ficha1-rst') ;
    }

}
