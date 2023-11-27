<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Form2Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Form\Form2;
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
use Haruncpi\LaravelIdGenerator\IdGenerator;

class Form2Controller extends Controller
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
        $formulario2 = Form2::where('user_id', Auth::id())-> with('iedu')->get();
        return view('Fichas.Monitoreo.Form2.index', compact ('formulario2'));
    }
    public function reporte()
    {
        $formulario2 = Form2::with('iedu')->get();
        return view('Fichas.Monitoreo.Form2.reporte', compact ('formulario2'));
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

        return view('Fichas.Monitoreo.Form2.create',[
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
    public function store(Form2Request $request)
    {
        $form2 = new Form2;
        /*datos generales*/
        $form2->user_id = Auth::id();
        $id = IdGenerator::generate(['table'=>'form2','field' => 'cod_form', 'length' => 10, 'prefix' => 'UGF2-']);
        $form2->cod_form = $id;
        $form2->region_id = $request->region_id;
        $form2->provincia_id = $request->provincia_id;
        $form2->distrito_id = $request->distrito_id;
        $form2->ugel_id = $request->ugel_id;
        $form2->iedu_id = $request->iedu_id;
        $form2->carac_id = $request->carac_id;
        $form2->grado_id = $request->grado_id;
        $form2->seccion_id = $request->seccion_id;
        $form2->turno_id = $request->turno_id;
        $form2->fecha = $request->fecha;
        $form2->nroVisita = $request->nroVisita;
        $form2->hrInicio = $request->hrInicio;
        $form2->hrFin = $request->hrFin;
        $form2->name = $request->name;
        $form2->last_name = $request->last_name;
        $form2->nro_dni = $request->nro_dni;
        $form2->tipoPro_id = $request->tipoPro_id;

        /* DOMINIO II Enseñanza para el aprendizaje de los estudiantes */
        $form2->ense_pre1 = $request->ense_pre1;
        $form2->ense_evidencia_pre1 = $request->ense_evidencia_pre1;
        $form2->ense_pre2 = $request->ense_pre2;
        $form2->ense_evidencia_pre2 = $request->ense_evidencia_pre2;
        $form2->ense_pre3 = $request->ense_pre3;
        $form2->ense_evidencia_pre3 = $request->ense_evidencia_pre3;
        $form2->ense_pre4 = $request->ense_pre4;
        $form2->ense_evidencia_pre4 = $request->ense_evidencia_pre4;
        $form2->ense_pre5 = $request->ense_pre5;
        $form2->ense_evidencia_pre5 = $request->ense_evidencia_pre5;
        $form2->ense_pre6 = $request->ense_pre6;
        $form2->ense_evidencia_pre6 = $request->ense_evidencia_pre6;
        $form2->ense_pre7 = $request->ense_pre7;
        $form2->ense_evidencia_pre7 = $request->ense_evidencia_pre7;
        $form2->ense_pre8 = $request->ense_pre8;
        $form2->ense_evidencia_pre8 = $request->ense_evidencia_pre8;
        $form2->ense_pre9 = $request->ense_pre9;
        $form2->ense_evidencia_pre9 = $request->ense_evidencia_pre9;
        $form2->ense_pre10 = $request->ense_pre10;
        $form2->ense_evidencia_pre10 = $request->ense_evidencia_pre10;
        $form2->ense_pre11 = $request->ense_pre11;
        $form2->ense_evidencia_pre11 = $request->ense_evidencia_pre11;
        $form2->ense_pre12 = $request->ense_pre12;
        $form2->ense_evidencia_pre12 = $request->ense_evidencia_pre12;
        $form2->ense_pre13 = $request->ense_pre13;
        $form2->ense_evidencia_pre13 = $request->ense_evidencia_pre13;
        $form2->ense_pre14 = $request->ense_pre14;
        $form2->ense_evidencia_pre14 = $request->ense_evidencia_pre14;
        $form2->ense_pre15 = $request->ense_pre15;
        $form2->ense_evidencia_pre15 = $request->ense_evidencia_pre15;
        
        $form2->ense_resultado = $request->ense_pre1 + $request->ense_pre2 + $request->ense_pre3 +
        $request->ense_pre4 + $request->ense_pre5 + $request->ense_pre6 + $request->ense_pre7 +
        $request->ense_pre8 + $request->ense_pre9 + $request->ense_pre10 + $request->ense_pre11 +
        $request->ense_pre12 + $request->ense_pre13 + $request->ense_pre14 + $request->ense_pre15;
        
        $form2->save();
        
        return redirect()->route('form2.edit', $form2-> id)->with('success','Procesado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form2 $form2)
    {
        return view('Fichas.Monitoreo.Form2.resp', compact('form2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
