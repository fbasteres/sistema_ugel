<?php

namespace App\Http\Controllers\Alm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Alm1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $formulario1 = Form1::where('user_id', Auth::id())-> with('iedu')->get();
        //$formulario1 = Form1::with('iedu')->get();
        return view('Fichas.Monitoreo.Form1.index', compact ('formulario1'));
    }

    public function reporte()
    {
        $formulario1 = Form1::with('iedu')->get();
        return view('Fichas.Monitoreo.Form1.index', compact ('formulario1'));
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
        $iedu = Iedu::all();

        return view('Fichas.Almacen.Alm1.create',[
            'departamentos' => $departamentos,
            'provincias' => $provincias,
            'distritos' => $distritos,
            'ugel' => $ugel,
            'caract' => $caract, 
            'grado' => $grado,
            'seccion' => $seccion,
            'turno' => $turno,
            'tipopro' => $tipopro,
            'iedu' => $iedu,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Form1Request $request)
    {
        
        $form1 = new Form1;
        /*datos generales*/
        $form1->user_id = Auth::id();
        $id = IdGenerator::generate(['table'=>'form1','field' => 'cod_form', 'length' => 10, 'prefix' => 'UGF1-']);
        $form1->cod_form = $id;
        $form1->region_id = $request->region_id;
        $form1->provincia_id = $request->provincia_id;
        $form1->distrito_id = $request->distrito_id;
        $form1->ugel_id = $request->ugel_id;
        $form1->iedu_id = $request->iedu_id;
        $form1->carac_id = $request->carac_id;
        $form1->grado_id = $request->grado_id;
        $form1->seccion_id = $request->seccion_id;
        $form1->turno_id = $request->turno_id;
        $form1->fecha = $request->fecha;
        $form1->nroVisita = $request->nroVisita;
        $form1->hrInicio = $request->hrInicio;
        $form1->hrFin = $request->hrFin;
        $form1->name = $request->name;
        $form1->last_name = $request->last_name;
        $form1->nro_dni = $request->nro_dni;
        $form1->tipoPro_id = $request->tipoPro_id;
        /* Verificacion de la planificación anual*/
        $form1->vpa_pre1 = $request->vpa_pre1;
        $form1->vpa_coment_pre1 = $request->vpa_coment_pre1;
        $form1->vpa_pre2 = $request->vpa_pre2;
        $form1->vpa_coment_pre2 = $request->vpa_coment_pre2;
        $form1->vpa_pre3 = $request->vpa_pre3;
        $form1->vpa_coment_pre3 = $request->vpa_coment_pre3;
        $form1->vpa_pre4 = $request->vpa_pre4;
        $form1->vpa_coment_pre4 = $request->vpa_coment_pre4;
        $form1->vpa_pre5 = $request->vpa_pre5;
        $form1->vpa_coment_pre5 = $request->vpa_coment_pre5;
        $form1->vpa_pre6 = $request->vpa_pre6;
        $form1->vpa_coment_pre6 = $request->vpa_coment_pre6;
        $form1->vpa_pre7 = $request->vpa_pre7;
        $form1->vpa_coment_pre7 = $request->vpa_coment_pre7;
        $form1->vpa_pre8 = $request->vpa_pre8;
        $form1->vpa_coment_pre8 = $request->vpa_coment_pre8;
        $form1->vpa_pre9 = $request->vpa_pre9;
        $form1->vpa_coment_pre9 = $request->vpa_coment_pre9;
        $form1->vpa_pre10 = $request->vpa_pre10;
        $form1->vpa_coment_pre10 = $request->vpa_coment_pre10;
        $form1->vpa_pre11 = $request->vpa_pre11;
        $form1->vpa_coment_pre11 = $request->vpa_coment_pre11;
        $form1->vpa_pre12 = $request->vpa_pre12;
        $form1->vpa_coment_pre12 = $request->vpa_coment_pre12;
        $form1->vpa_pre13 = $request->vpa_pre13;
        $form1->vpa_coment_pre13 = $request->vpa_coment_pre13;
        $form1->vpa_pre14 = $request->vpa_pre14;
        $form1->vpa_coment_pre14 = $request->vpa_coment_pre14;
        $form1->vpa_pre15 = $request->vpa_pre15;
        $form1->vpa_coment_pre15 = $request->vpa_coment_pre15;
        /*Verificacion 2*/
        $form1->vud_pre1 = $request->vud_pre1;
        $form1->vud_coment_pre1 = $request->vud_coment_pre1;
        $form1->vud_pre2 = $request->vud_pre2;
        $form1->vud_coment_pre2 = $request->vud_coment_pre2;
        $form1->vud_pre3 = $request->vud_pre3;
        $form1->vud_coment_pre3 = $request->vud_coment_pre3;
        $form1->vud_pre4 = $request->vud_pre4;
        $form1->vud_coment_pre4 = $request->vud_coment_pre4;
        $form1->vud_pre5 = $request->vud_pre5;
        $form1->vud_coment_pre5 = $request->vud_coment_pre5;
        $form1->vud_pre6 = $request->vud_pre6;
        $form1->vud_coment_pre6 = $request->vud_coment_pre6;
        $form1->vud_pre7 = $request->vud_pre7;
        $form1->vud_coment_pre7 = $request->vud_coment_pre7;
        $form1->vud_pre8 = $request->vud_pre8;
        $form1->vud_coment_pre8 = $request->vud_coment_pre8;
        $form1->vud_pre9 = $request->vud_pre9;
        $form1->vud_coment_pre9 = $request->vud_coment_pre9;
        $form1->vud_pre10 = $request->vud_pre10;
        $form1->vud_coment_pre10 = $request->vud_coment_pre10;
        $form1->vud_pre11 = $request->vud_pre11;
        $form1->vud_coment_pre11 = $request->vud_coment_pre11;
        $form1->vud_pre12 = $request->vud_pre12;
        $form1->vud_coment_pre12 = $request->vud_coment_pre12;
        $form1->vud_pre13 = $request->vud_pre13;
        $form1->vud_coment_pre13 = $request->vud_coment_pre13;
        $form1->vud_pre14 = $request->vud_pre14;
        $form1->vud_coment_pre14 = $request->vud_coment_pre14;
        $form1->vud_pre15 = $request->vud_pre15;
        $form1->vud_coment_pre15 = $request->vud_coment_pre15;

        $form1->rsta_1 = $request->vpa_pre1 + $request->vpa_pre2 + $request->vpa_pre3 + $request->vpa_pre4
        + $request->vpa_pre5 + $request->vpa_pre6 + $request->vpa_pre7 + $request->vpa_pre8 + $request->vpa_pre9
        + $request->vpa_pre10 + $request->vpa_pre11 + $request->vpa_pre12 + $request->vpa_pre13 + $request->vpa_pre14
        + $request->vpa_pre15;

        $form1->rsta_2 = $request->vud_pre1 + $request->vud_pre2 + $request->vud_pre3 + $request->vud_pre4
        + $request->vud_pre5 + $request->vud_pre6 + $request->vud_pre7 + $request->vud_pre8 + $request->vud_pre9
        + $request->vud_pre10 + $request->vud_pre11 + $request->vud_pre12 + $request->vud_pre13 + $request->vud_pre14
        + $request->vud_pre15;
        
        $form1->save();
        
        return redirect()->route('form1.edit', $form1-> id)->with('success','Procesado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Form1 $form1)
    {
        $educa = Iedu::all();
        return view('Fichas.Monitoreo.Form1.show', compact('form1','educa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form1 $form1)
    {
        return view('Fichas.Monitoreo.Form1.resp', compact('form1') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $form1 = Form1::find($id);
        $form1->obs = $request->input('obs');
        $form1->recomend = $request->input('recomend');
        $form1->cmejora = $request->input('cmejora');
        $form1->update();

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
