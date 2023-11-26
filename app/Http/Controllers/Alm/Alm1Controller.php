<?php

namespace App\Http\Controllers\Alm;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\Alm1Request;
use App\Models\Alm\Alm1;
use App\Models\Departamentos;
use App\Models\Provincias;
use App\Models\Distritos;
use App\Models\Ugel;
use App\Models\Iedu;
use App\Models\Grado;
use App\Models\Seccion;
use App\Models\Turno;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class Alm1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        $user->load('roles');
        $foalm1 = Alm1::where('user_id', Auth::id())-> with('iedu')->get();
        return view('Fichas.Almacen.Alm1.index', compact ('foalm1','user'));
    }
    public function reporte(User $user)
    {
        $user->load('roles');
        $foalm1 = Alm1::with('iedu')->get();
        return view('Fichas.Almacen.Alm1.reporte', compact ('foalm1','user'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        $user->load('roles');
        $departamentos = Departamentos::all();
        $provincias = Provincias::all();
        $distritos = Distritos::all();
        $ugel = Ugel::all();
        $iedu = Iedu::all();
        $grado = Grado::all();
        $seccion = Seccion::all();
        $turno = Turno::all();

        return view('Fichas.Almacen.Alm1.create', [
            'departamentos' => $departamentos,
            'provincias' => $provincias,
            'distritos' => $distritos,
            'ugel' => $ugel,
            'iedu' => $iedu,
            'grado' => $grado,
            'seccion' => $seccion,
            'turno' => $turno,
            'user' => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Alm1Request $request)
    {
        
        $alm1 = new Alm1;
        /*datos generales*/
        $alm1->user_id = Auth::id();
        $id = IdGenerator::generate(['table'=>'alm1','field' => 'cod_form', 'length' => 10, 'prefix' => 'UGA1-']);
        $alm1->cod_form = $id;
        $alm1->region_id = $request->region_id;
        $alm1->provincia_id = $request->provincia_id;
        $alm1->distrito_id = $request->distrito_id;
        $alm1->ugel_id = $request->ugel_id;
        $alm1->iedu_id = $request->iedu_id;
        $alm1->es_lastname = $request->es_lastname;
        $alm1->es_name = $request->es_name;
        $alm1->dr_lastname = $request->dr_lastname;
        $alm1->dr_name = $request->dr_name;
        $alm1->dr_telf = $request->dr_telf;
        $alm1->doc_lastname = $request->doc_lastname;
        $alm1->doc_name = $request->doc_name;
        $alm1->doc_telf = $request->doc_telf;
        $alm1->estd_ma = $request->estd_ma;
        $alm1->estd_as = $request->estd_as;
        $alm1->estd_tr = $request->estd_tr;
        $alm1->grado_id = $request->grado_id;
        $alm1->seccion_id = $request->seccion_id;
        $alm1->turno_id = $request->turno_id;
        $alm1->fecha = $request->fecha;
        $alm1->hrInicio = $request->hrInicio;
        $alm1->hrFin = $request->hrFin;
     
        /* Distribucion de materiales */
        $alm1->rmaed_pre1 = $request->rmaed_pre1;
        $alm1->rmaed_coment_pre1 = $request->rmaed_coment_pre1;
        $alm1->rmaed_pre2 = $request->rmaed_pre2;
        $alm1->rmaed_coment_pre2 = $request->rmaed_coment_pre2;
        $alm1->rmaed_pre3 = $request->rmaed_pre3;
        $alm1->rmaed_coment_pre3 = $request->rmaed_coment_pre3;
        $alm1->rmaed_pre4 = $request->rmaed_pre4;
        $alm1->rmaed_coment_pre4 = $request->rmaed_coment_pre4;
        $alm1->rmaed_pre5 = $request->rmaed_pre5;
        $alm1->rmaed_coment_pre5 = $request->rmaed_coment_pre5;
        $alm1->rmaed_pre6 = $request->rmaed_pre6;
        $alm1->rmaed_coment_pre6 = $request->rmaed_coment_pre6;
        $alm1->rmaed_pre7 = $request->rmaed_pre7;
        $alm1->rmaed_coment_pre7 = $request->rmaed_coment_pre7;
        $alm1->rmaed_pre8 = $request->rmaed_pre8;
        $alm1->rmaed_coment_pre8 = $request->rmaed_coment_pre8;
        $alm1->rmaed_pre9 = $request->rmaed_pre9;
        $alm1->rmaed_coment_pre9 = $request->rmaed_coment_pre9;
        $alm1->rmaed_pre10 = $request->rmaed_pre10;
        $alm1->rmaed_coment_pre10 = $request->rmaed_coment_pre10;
        $alm1->rmaed_pre11 = $request->rmaed_pre11;
        $alm1->rmaed_coment_pre11 = $request->rmaed_coment_pre11;
        $alm1->rmaed_pre12 = $request->rmaed_pre12;
        $alm1->rmaed_coment_pre12 = $request->rmaed_coment_pre12;
        $alm1->rmaed_pre13 = $request->rmaed_pre13;
        $alm1->rmaed_coment_pre13 = $request->rmaed_coment_pre13;
        $alm1->rmaed_pre14 = $request->rmaed_pre14;
        $alm1->rmaed_coment_pre14 = $request->rmaed_coment_pre14;
        $alm1->rmaed_pre15 = $request->rmaed_pre15;
        $alm1->rmaed_coment_pre15 = $request->rmaed_coment_pre15;
        $alm1->rmaed_pre16 = $request->rmaed_pre16;
        $alm1->rmaed_coment_pre16 = $request->rmaed_coment_pre16;
        $alm1->rmaed_pre17 = $request->rmaed_pre17;
        $alm1->rmaed_coment_pre17 = $request->rmaed_coment_pre17;
        $alm1->rmaed_pre18 = $request->rmaed_pre18;
        $alm1->rmaed_coment_pre18 = $request->rmaed_coment_pre18;
        $alm1->rmaed_pre19 = $request->rmaed_pre19;
        $alm1->rmaed_coment_pre19 = $request->rmaed_coment_pre19;
        $alm1->rmaed_pre20 = $request->rmaed_pre20;
        $alm1->rmaed_coment_pre20 = $request->rmaed_coment_pre20;
        $alm1->rmaed_pre21 = $request->rmaed_pre21;
        $alm1->rmaed_coment_pre21 = $request->rmaed_coment_pre21;

        /* Analisis de la programaciones curriculares */
        $alm1->apr_pre1 = $request->apr_pre1;
        $alm1->apr_coment_pre1 = $request->apr_coment_pre1;
        $alm1->apr_pre2 = $request->apr_pre2;
        $alm1->apr_coment_pre2 = $request->apr_coment_pre2;
        $alm1->apr_pre3 = $request->apr_pre3;
        $alm1->apr_coment_pre3 = $request->apr_coment_pre3;

        /* Analisis de sesiones de aprendizaje */
        $alm1->ase_pre1 = $request->ase_pre1;
        $alm1->ase_coment_pre1 = $request->ase_coment_pre1;
        $alm1->ase_pre2 = $request->ase_pre2;
        $alm1->ase_coment_pre2 = $request->ase_coment_pre2;
        $alm1->ase_pre3 = $request->ase_pre3;
        $alm1->ase_coment_pre3 = $request->ase_coment_pre3;
        $alm1->ase_pre4 = $request->ase_pre4;
        $alm1->ase_coment_pre4 = $request->ase_coment_pre4;
        $alm1->ase_pre5 = $request->ase_pre5;
        $alm1->ase_coment_pre5 = $request->ase_coment_pre5;
        $alm1->ase_pre6 = $request->ase_pre6;
        $alm1->ase_coment_pre6 = $request->ase_coment_pre6;
    
        $alm1->estd_total = $request->estd_ma + $request->estd_as + $request->estd_tr; 
        
        $alm1->save();
        
        return redirect()->route('alm1.edit', $alm1-> id)->with('success','Procesado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alm1 $alm1, User $user)
    {
        $user->load('roles');
        $educa = Iedu::all();
        return view('Fichas.Almacen.Alm1.show', [
            'alm1' => $alm1,
            'educa' => $educa,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alm1 $alm1, User $user)
    {
        $user->load('roles');
        return view('Fichas.Almacen.Alm1.resp', compact('alm1','user') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $alm1 = Alm1::find($id);
        $alm1->rec_cmejora = $request->input('rec_cmejora');
        $alm1->update();

        return redirect()->route('alm1.index')->with('success','Enviado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alm1->delete();
        return redirect()->route('alm1.index')->with('success','Enviado Correctamente');
    }
}
