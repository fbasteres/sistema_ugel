<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Http\Requests\Form1Request;
use App\Models\Form\Form1;
use App\Models\Departamentos;
use App\Models\Provincias;
use App\Models\Distritos;
use App\Models\Ugel;
use App\Models\Caracteristica;
use App\Models\Grado;
use App\Models\Seccion;
use App\Models\Turno;
use App\Models\TipoPro;
use App\Models\CodInst;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class Form1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        return view('Fichas.Monitoreo.Form1.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamentos = Departamentos::all();
        $provincias = Provincias::all();
        $distritos = Distritos::all();
        $ugel = Ugel::all();
        $caract = Caracteristica::all();
        $grado = Grado::all();
        $seccion = Seccion::all();
        $turno = Turno::all();
        $tipopro = TipoPro::all();
        $codinst = CodInst::with('Iedu')->get();

        return view('Fichas.Monitoreo.Form1.create',[
            'departamentos' => $departamentos,
            'provincias' => $provincias,
            'distritos' => $distritos,
            'ugel' => $ugel,
            'caract' => $caract,
            'grado' => $grado,
            'seccion' => $seccion,
            'turno' => $turno,
            'tipopro' => $tipopro,
            'codinst' => $codinst,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Form1Request $request)
    {
        $forms1 = new Form1;
        /*datos generales */
        $forms1->region_id = $request->region_id;
        $forms1->provincia_id = $request->provincia_id;
        $forms1->distrito_id = $request->distrito_id;
        $forms1->ugel_id = $request->ugel_id;
        $forms1->cod_id = $request->cod_id;
        $forms1->carac_id = $request->carac_id;
        $forms1->grado_id = $request->grado_id;
        $forms1->seccion_id = $request->seccion_id;
        $forms1->turno_id = $request->turno_id;
        $forms1->fecha = $request->fecha;
        $forms1->nroVisita = $request->nroVisita;
        $forms1->hrInicio = $request->hrInicio;
        $forms1->hrFin = $request->hrFin;
        $forms1->name = $request->name;
        $forms1->last_name = $request->last_name;
        $forms1->nro_dni = $request->nro_dni;
        $forms1->tipoPro_id = $request->tipoPro_id;
        /* Verificacion de la planificación anual */
        $forms1->vpa_pre1 = $request->vpa_pre1;
        $forms1->vpa_coment_pre1 = $request->vpa_coment_pre1;
        $forms1->vpa_pre2 = $request->vpa_pre2;
        $forms1->vpa_coment_pre2 = $request->vpa_coment_pre2;
        $forms1->vpa_pre3 = $request->vpa_pre3;
        $forms1->vpa_coment_pre3 = $request->vpa_coment_pre3;
        $forms1->vpa_pre4 = $request->vpa_pre4;
        $forms1->vpa_coment_pre4 = $request->vpa_coment_pre4;
        $forms1->vpa_pre5 = $request->vpa_pre5;
        $forms1->vpa_coment_pre5 = $request->vpa_coment_pre5;
        $forms1->vpa_pre6 = $request->vpa_pre6;
        $forms1->vpa_coment_pre6 = $request->vpa_coment_pre6;
        $forms1->vpa_pre7 = $request->vpa_pre7;
        $forms1->vpa_coment_pre7 = $request->vpa_coment_pre7;
        $forms1->vpa_pre8 = $request->vpa_pre8;
        $forms1->vpa_coment_pre8 = $request->vpa_coment_pre8;
        $forms1->vpa_pre9 = $request->vpa_pre9;
        $forms1->vpa_coment_pre9 = $request->vpa_coment_pre9;
        $forms1->vpa_pre1 = $request->vpa_pre10;
        $forms1->vpa_coment_pre10 = $request->vpa_coment_pre10;
        $forms1->vpa_pre11 = $request->vpa_pre11;
        $forms1->vpa_coment_pre11 = $request->vpa_coment_pre11;
        $forms1->vpa_pre12 = $request->vpa_pre12;
        $forms1->vpa_coment_pre12 = $request->vpa_coment_pre12;
        $forms1->vpa_pre13 = $request->vpa_pre13;
        $forms1->vpa_coment_pre13 = $request->vpa_coment_pre13;
        $forms1->vpa_pre14 = $request->vpa_pre14;
        $forms1->vpa_coment_pre14 = $request->vpa_coment_pre14;
        $forms1->vpa_pre15 = $request->vpa_pre15;
        $forms1->vpa_coment_pre15 = $request->vpa_coment_pre15;
        /*Verificacion 2*/
        $forms1->vud_pre1 = $request->vud_pre1;
        $forms1->vud_coment_pre1 = $request->vud_coment_pre1;
        $forms1->vud_pre2 = $request->vud_pre2;
        $forms1->vud_coment_pre2 = $request->vud_coment_pre2;
        $forms1->vud_pre3 = $request->vud_pre3;
        $forms1->vud_coment_pre3 = $request->vud_coment_pre3;
        $forms1->vud_pre4 = $request->vud_pre4;
        $forms1->vud_coment_pre4 = $request->vud_coment_pre4;
        $forms1->vud_pre5 = $request->vud_pre5;
        $forms1->vud_coment_pre5 = $request->vud_coment_pre5;
        $forms1->vud_pre6 = $request->vud_pre6;
        $forms1->vud_coment_pre6 = $request->vud_coment_pre6;
        $forms1->vud_pre7 = $request->vud_pre7;
        $forms1->vud_coment_pre7 = $request->vud_coment_pre7;
        $forms1->vud_pre8 = $request->vud_pre8;
        $forms1->vud_coment_pre8 = $request->vud_coment_pre8;
        $forms1->vud_pre9 = $request->vud_pre9;
        $forms1->vud_coment_pre9 = $request->vud_coment_pre9;
        $forms1->vud_pre1 = $request->vud_pre10;
        $forms1->vud_coment_pre10 = $request->vud_coment_pre10;
        $forms1->vud_pre11 = $request->vud_pre11;
        $forms1->vud_coment_pre11 = $request->vud_coment_pre11;
        $forms1->vud_pre12 = $request->vud_pre12;
        $forms1->vud_coment_pre12 = $request->vud_coment_pre12;
        $forms1->vud_pre13 = $request->vud_pre13;
        $forms1->vud_coment_pre13 = $request->vud_coment_pre13;
        $forms1->vud_pre14 = $request->vud_pre14;
        $forms1->vud_coment_pre14 = $request->vud_coment_pre14;
        $forms1->vud_pre15 = $request->vud_pre15;
        $forms1->vud_coment_pre15 = $request->vud_coment_pre15;

        $forms1->save();
        
        return view('Fichas.Monitoreo.Form1.index')->with('success','Procesado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Form1 $form1)
    {
        return view('Fichas.Monitoreo.Form1.show', compact('form1'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form1 $form1)
    {
        return view('Fichas.Monitoreo.Form1.edit', compact('form1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Form1Request $request, string $id)
    {
        $form1 = Form1::update($request->validated());
        return redirect()->route('form1.index')->with('success','Enviado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $form1->delete();
        return redirect()->route('form1.index')->with('success','Enviado Correctamente');
    }
}
