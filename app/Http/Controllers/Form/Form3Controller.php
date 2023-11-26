<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Form3Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Form\Form3;
use App\Models\Departamentos;
use App\Models\Provincias;
use App\Models\Distritos;
use App\Models\Ugel;
use App\Models\Caracteristica;
use App\Models\Grado;
use App\Models\Seccion;
use App\Models\Turno;
use App\Models\TipoPro;
use App\Models\Iedu;
use App\Models\Ciclo;
use App\Models\Edadn;    
use Haruncpi\LaravelIdGenerator\IdGenerator;

class Form3Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $formulario3 = Form3::where('user_id', Auth::id())-> with('iedu')->get();
        //$formulario1 = Form3::with('iedu')->get();
        return view('Fichas.Monitoreo.Form3.index', compact ('formulario3'));
    }

    public function reporte()
    {
        $formulario3 = Form3::with('iedu')->get();
        return view('Fichas.Monitoreo.Form3.reporte', compact ('formulario3'));
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
        $ciclo = Ciclo::all();
        $edadn = Edadn::all();

        return view('Fichas.Monitoreo.Form3.create',[
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
            'ciclo' => $ciclo,
            'edadn' => $edadn,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Form3Request $request)
    {
        
        $form3 = new Form3;
        /*datos generales*/
        $form3->user_id = Auth::id();
        $id = IdGenerator::generate(['table'=>'form3','field' => 'cod_form', 'length' => 10, 'prefix' => 'UGF3-']);
        $form3->cod_form = $id;
        $form3->region_id = $request->region_id;
        $form3->provincia_id = $request->provincia_id;
        $form3->distrito_id = $request->distrito_id;
        $form3->ugel_id = $request->ugel_id;
        $form3->iedu_id = $request->iedu_id;
        $form3->carac_id = $request->carac_id;
        $form3->au_name = $request->au_name;
        $form3->ciclo_id = $request->ciclo_id;
        $form3->edadn_id = $request->edadn_id;
        $form3->turno_id = $request->turno_id;
        $form3->fecha = $request->fecha;
        $form3->nroVisita = $request->nroVisita;
        $form3->hrInicio = $request->hrInicio;
        $form3->hrFin = $request->hrFin;
        $form3->name = $request->name;
        $form3->last_name = $request->last_name;
        $form3->nro_dni = $request->nro_dni;
        $form3->tipoPro_id = $request->tipoPro_id;
        /* Verificacion de la planificación anual*/
        $form3->vpa_pre1 = $request->vpa_pre1;
        $form3->vpa_coment_pre1 = $request->vpa_coment_pre1;
        $form3->vpa_pre2 = $request->vpa_pre2;
        $form3->vpa_coment_pre2 = $request->vpa_coment_pre2;
        $form3->vpa_pre3 = $request->vpa_pre3;
        $form3->vpa_coment_pre3 = $request->vpa_coment_pre3;
        $form3->vpa_pre4 = $request->vpa_pre4;
        $form3->vpa_coment_pre4 = $request->vpa_coment_pre4;
        $form3->vpa_pre5 = $request->vpa_pre5;
        $form3->vpa_coment_pre5 = $request->vpa_coment_pre5;
        $form3->vpa_pre6 = $request->vpa_pre6;
        $form3->vpa_coment_pre6 = $request->vpa_coment_pre6;
        $form3->vpa_pre7 = $request->vpa_pre7;
        $form3->vpa_coment_pre7 = $request->vpa_coment_pre7;
        $form3->vpa_pre8 = $request->vpa_pre8;
        $form3->vpa_coment_pre8 = $request->vpa_coment_pre8;
        $form3->vpa_pre9 = $request->vpa_pre9;
        $form3->vpa_coment_pre9 = $request->vpa_coment_pre9;
        $form3->vpa_pre10 = $request->vpa_pre10;
        $form3->vpa_coment_pre10 = $request->vpa_coment_pre10;

        /*Verificacion 2*/
        $form3->vud_pre1 = $request->vud_pre1;
        $form3->vud_coment_pre1 = $request->vud_coment_pre1;
        $form3->vud_pre2 = $request->vud_pre2;
        $form3->vud_coment_pre2 = $request->vud_coment_pre2;
        $form3->vud_pre3 = $request->vud_pre3;
        $form3->vud_coment_pre3 = $request->vud_coment_pre3;
        $form3->vud_pre4 = $request->vud_pre4;
        $form3->vud_coment_pre4 = $request->vud_coment_pre4;
        $form3->vud_pre5 = $request->vud_pre5;
        $form3->vud_coment_pre5 = $request->vud_coment_pre5;
        $form3->vud_pre6 = $request->vud_pre6;
        $form3->vud_coment_pre6 = $request->vud_coment_pre6;
        $form3->vud_pre7 = $request->vud_pre7;
        $form3->vud_coment_pre7 = $request->vud_coment_pre7;
        $form3->vud_pre8 = $request->vud_pre8;
        $form3->vud_coment_pre8 = $request->vud_coment_pre8;
        $form3->vud_pre9 = $request->vud_pre9;
        $form3->vud_coment_pre9 = $request->vud_coment_pre9;
        $form3->vud_pre10 = $request->vud_pre10;
        $form3->vud_coment_pre10 = $request->vud_coment_pre10;
        $form3->vud_pre11 = $request->vud_pre11;
        $form3->vud_coment_pre11 = $request->vud_coment_pre11;
        $form3->vud_pre12 = $request->vud_pre12;
        $form3->vud_coment_pre12 = $request->vud_coment_pre12;
        $form3->vud_pre13 = $request->vud_pre13;
        $form3->vud_coment_pre13 = $request->vud_coment_pre13;
        $form3->vud_pre14 = $request->vud_pre14;
        $form3->vud_coment_pre14 = $request->vud_coment_pre14;
        $form3->vud_pre15 = $request->vud_pre15;
        $form3->vud_coment_pre15 = $request->vud_coment_pre15;

        $form3->rsta_1 = $request->vpa_pre1 + $request->vpa_pre2 + $request->vpa_pre3 + $request->vpa_pre4
        + $request->vpa_pre5 + $request->vpa_pre6 + $request->vpa_pre7 + $request->vpa_pre8 + $request->vpa_pre9
        + $request->vpa_pre10;

        $form3->rsta_2 = $request->vud_pre1 + $request->vud_pre2 + $request->vud_pre3 + $request->vud_pre4
        + $request->vud_pre5 + $request->vud_pre6 + $request->vud_pre7 + $request->vud_pre8 + $request->vud_pre9
        + $request->vud_pre10 + $request->vud_pre11 + $request->vud_pre12 + $request->vud_pre13 + $request->vud_pre14
        + $request->vud_pre15;
        
        $form3->save();
        
        return redirect()->route('form3.edit', $form3-> id)->with('success','Procesado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Form3 $form3)
    {
        $educa = Iedu::all();
        return view('Fichas.Monitoreo.Form3.show', compact('form3','educa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form3 $form3)
    {
        return view('Fichas.Monitoreo.Form3.resp', compact('form3') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $form3 = Form3::find($id);
        $form3->obs = $request->input('obs');
        $form3->recomend = $request->input('recomend');
        $form3->cmejora = $request->input('cmejora');
        $form3->update();

        return redirect()->route('form3.index')->with('success','Enviado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $form1->delete();
        return redirect()->route('form3.index')->with('success','Enviado Correctamente');
    }
}
