@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Almacén 1 </title>
<div class="container-fluid px-4 pb-5">
    <div class="py-3">
        <a href="{{ route('inicio') }}" class="href-closed">
            <button class="btn-closed d-flex">
                    <i class="fa-solid fa-arrow-left"></i>&nbsp; &nbsp;
                    <h6>Regresar</h6> 
            </button>        
        </a>
    </div>

    <div class="container">
        @include('layouts.partials.messages')
        <span class="badge rounded-pill sp-atendido">Almacén 1</span>
        <form action="{{route ('alm1.store')}}" method="POST">
            @csrf
            <div class="d-flex align-items-end justify-content-between pb-4">
                <h5 class="fw-semibold">Ficha de supervisión y monitoreo <br> del uso pedagógico  de materiales
                    educativos en la institución educativa.
                </h5>
                <div class="">
                    <button class="xpgbtn_primary" type="submit"><i class="fa-regular fa-paper-plane"></i>&nbsp;&nbsp; Procesar</button>
                </div>
            </div>
            
            <div class="car-inf">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="form-1" data-bs-toggle="tab" data-bs-target="#form1-tab-pane" type="button" role="tab" aria-controls="form1" aria-selected="true">Datos Generales</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="form-2" data-bs-toggle="tab" data-bs-target="#form2-tab-pane" type="button" role="tab" aria-controls="form2" aria-selected="false">Recepción y distribución de materiales educativos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="form-3" data-bs-toggle="tab" data-bs-target="#form3-tab-pane" type="button" role="tab" aria-controls="form3" aria-selected="false">Analisis de las programaciones curriculares anules de la unidad </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="form-4" data-bs-toggle="tab" data-bs-target="#form4-tab-pane" type="button" role="tab" aria-controls="form4" aria-selected="false">Analisis de las sesiones de aprendizaje </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="form1-tab-pane" role="tabpanel" aria-labelledby="form1-tab" tabindex="0">
                        <div class="row pt-5">
                            <div class="col-2 car-form">
                                <label for="name" class="form-label">Región</label>
                                <select class="form-select" name="region_id" id="region" data-placeholder="Selecione una Región" >
                                    @foreach ($departamentos as $departamento)
                                    <option value="{{ $departamento ['id'] }}">{{ $departamento ['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-2 car-form">
                                <label for="name" class="form-label">Provincia</label>
                                <select class="form-select" name="provincia_id" id="provincia" data-placeholder="Selecione una Provincia">
                                    @foreach ($provincias as $provincia)
                                    <option value="{{ $provincia ['id'] }}">{{ $provincia ['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-2 car-form">
                                <label for="name" class="form-label">Distrito</label>
                                <select class="form-select" name="distrito_id" id="distrito">
                                    @foreach ($distritos as $distrito)
                                    <option value="{{ $distrito ['id'] }}">{{ $distrito ['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-2 car-form">
                                <label for="name" class="form-label">UGEL</label>
                                <select class="form-select" name="ugel_id" id="ugel">
                                    @foreach ($ugel as $uge)
                                    <option value="{{ $uge ['id'] }}">{{ $uge ['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-4 car-form">
                                <label for="name" class="form-label">institución educativa</label>
                                <select class="form-select" name="iedu_id" id="educativa">
                                    @foreach ($iedu as $ied)
                                    <option value="{{ $ied ['id'] }}">{{ $ied ['name'] }} | {{ $ied ['nivel_edu'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <p class="m-0 pt-4 pb-2 fw-semibold">Datos del especialista</p>
                            
                            <div class="col-4 car-form">
                                <input type="text" class="form-control" name="es_lastname" placeholder="Apellidos">
                            </div>
                            <div class="col-4 car-form">
                                <input type="text" class="form-control" name="es_name" placeholder="Nombres" >
                            </div>
                            

                            <p class="m-0 pt-4 pb-2 fw-semibold">Datos del director</p>
                            <div class="col-4 car-form">
                                <input type="text" class="form-control" name="dr_lastname" placeholder="Apellidos">
                            </div>
                            <div class="col-4 car-form">
                                <input type="text" class="form-control" name="dr_name" placeholder="Nombres">
                            </div>
                            <div class="col-3 car-form">
                                <input type="number" class="form-control" name="dr_telf" placeholder="Telf. Celular">
                            </div>

                            <p class="m-0 pt-4 pb-2 fw-semibold">Datos del docente</p>
                            <div class="col-4 car-form">
                                <input type="text" class="form-control" name="doc_lastname" placeholder="Apellidos">
                            </div>
                            <div class="col-4 car-form">
                                <input type="text" class="form-control" name="doc_name" placeholder="Nombres">
                            </div>
                            <div class="col-3 car-form">
                                <input type="number" class="form-control" name="doc_telf" placeholder="Telf. Celular">
                            </div>

                            
                            <div class="col-8 car-form pt-5">
                                <label for="name" class="form-label">Número total de estudiantes</label>
                                <div class="row">
                                    <div class="col d-flex align-items-center" >
                                        <label for="name" class="form-label pt-1">Matriculados:</label>
                                        <input type="number" class="form-control ms-2" name="estd_ma">
                                    </div>
                                    <div class="col d-flex align-items-center">
                                        <label for="name" class="form-label pt-1">Asistentes:</label>
                                        <input type="number" class="form-control ms-2" name="estd_as">
                                    </div>
                                    <div class="col d-flex align-items-center">
                                        <label for="name" class="form-label pt-1">Trasladados:</label>
                                        <input type="number" class="form-control ms-2" name="estd_tr">
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 car-form pt-5">
                                <label for="name" class="form-label">Grado</label>
                                <select class="form-select" name="grado_id" id="grado">
                                    @foreach ($grado as $grad)
                                    <option value="{{ $grad ['id'] }}">{{ $grad ['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-1 car-form pt-5">
                                <label for="name" class="form-label">Sección</label>
                                <select class="form-select" name="seccion_id" id="secc">
                                    @foreach ($seccion as $secc)
                                    <option value="{{ $secc ['id'] }}">{{ $secc ['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-2 car-form pt-5">
                                <label for="name" class="form-label">Turno</label>
                                <select class="form-select" name="turno_id" id="turno">
                                    @foreach ($turno as $tur)
                                    <option value="{{ $tur ['id'] }}">{{ $tur ['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <hr class="hr">
                            <div class="col-3 car-form pt-4">
                                <label for="email" class="form-label d-flex">Fecha</p></label>
                                <input type="date" class="form-control" name="fecha">
                            </div>
                            <div class="col-3 car-form pt-4">
                                <label for="" class="form-label">Hora de inicio</label>
                                <input type="time" class="form-control" name="hrInicio">
                            </div>
                            <div class="col-3 car-form py-4">
                                <label for="" class="form-label">Hora de finalización</label>
                                <input type="time" class="form-control" name="hrFin">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="form2-tab-pane" role="tabpanel" aria-labelledby="form2-tab" tabindex="0">

                        {{--Planificación anual textarea-1--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">1.- Ha recibido en el presente año los 
                                cuadernos de trabajo de la dotación 2023</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre1" value="1"  >
                                <label class="form-check-label" for="rmaed_pre1">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre1" value="0" >
                                <label class="form-check-label" for="rmaed_pre1">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre1"></textarea>
                            </div>
                        
                        {{--Planificación anual textarea-2--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">2.- Cuenta con las pecosas de recepción de los 
                                cuadernos de trabajo dotación 2023</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre2" value="1" >
                                <label class="form-check-label" for="rmaed_pre2">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre2" value="0">
                                <label class="form-check-label" for="rmaed_pre2">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre2"></textarea>
                            </div>
                        
                        {{--Planificación anual textarea-3--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">3.- Cuenta con los cuadernos para 4 y 5 
                                años del nivel inicial</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre3" value="1" >
                                <label class="form-check-label" for="rmaed_pre3">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre3" value="0">
                                <label class="form-check-label" for="rmaed_pre3">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre3"></textarea>
                            </div>

                        {{--Planificación anual textarea-4--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">4.- Cuanta con materiales estructurados 
                                (juegos de cubos, juegos didácticos, juegos poliedros) para PRONOEI del ciclo II</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre4" value="1" >
                                <label class="form-check-label" for="rmaed_pre4">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre4" value="0">
                                <label class="form-check-label" for="rmaed_pre4">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre4"></textarea>
                            </div>

                        
                        {{--Planificación anual textarea-5--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">5.- Cuanta con los cuadernos de trabajo y 
                                cuadernillos de fichas para el nivel primaria</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre5" value="1" >
                                <label class="form-check-label" for="rmaed_pre5">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre5" value="0">
                                <label class="form-check-label" for="rmaed_pre5">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre5"></textarea>
                            </div>


                        {{--Planificación anual textarea-6--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">6.- Cuanta con los cuadernos y 
                                fichas del nivel secundario</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre6" value="1" >
                                <label class="form-check-label" for="rmaed_pre6">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre6" value="0">
                                <label class="form-check-label" for="rmaed_pre6">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre6"></textarea>
                            </div>
                        
                        {{--Planificación anual textarea-7--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">7.- Cuanta con los cuadernos de reforzamiento 
                                y manuales del docente para II EE focalizados</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre7" value="1" >
                                <label class="form-check-label" for="rmaed_pre7">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre7" value="0">
                                <label class="form-check-label" for="rmaed_pre7">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre7"></textarea>
                            </div>

                        {{--Planificación anual textarea-8--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">8.- Cuanta con kits de 
                                ingles para las II.EE de secundaria</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre8" value="1" >
                                <label class="form-check-label" for="rmaed_pre8">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre8" value="0">
                                <label class="form-check-label" for="rmaed_pre8">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre8"></textarea>
                            </div>

                        {{--Planificación anual textarea-9--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">9.- Cuanta con kits de máquinas 
                                simples y dinámica de secundaria</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre9" value="1" >
                                <label class="form-check-label" for="rmaed_pre9">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre9" value="0">
                                <label class="form-check-label" for="rmaed_pre9">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre9"></textarea>
                            </div>

                        {{--Planificación anual textarea-10--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">10.- Cuanta con kit cartográfico (mapas) 
                                para II.EE. focalizadas de secundaria</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre10" value="1" >
                                <label class="form-check-label" for="rmaed_pre10">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre10" value="0">
                                <label class="form-check-label" for="rmaed_pre10">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre10"></textarea>
                            </div>

                        {{--Planificación anual textarea-11--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">11.- Cuanta con biblioteca de aula
                                 en los niveles con la cuenta la II.EE.</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre11" value="1" >
                                <label class="form-check-label" for="rmaed_pre11">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre11" value="0">
                                <label class="form-check-label" for="rmaed_pre11">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre11"></textarea>
                            </div>

                        {{--Planificación anual textarea-12--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">12.- Cuanta con otros materiales 
                                educativos de dotaciones de años anteriores</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre12" value="1" >
                                <label class="form-check-label" for="rmaed_pre12">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre12" value="0">
                                <label class="form-check-label" for="rmaed_pre12">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre12"></textarea>
                            </div>

                        {{--Planificación anual textarea-13--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">13.- Ha cumplido con el proceso de bajas de materiales 
                                educativos deteriorados</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre13" value="1" >
                                <label class="form-check-label" for="rmaed_pre13">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre13" value="0">
                                <label class="form-check-label" for="rmaed_pre13">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre13"></textarea>
                            </div>

                        {{--Planificación anual textarea-14--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">14.- Cuanta con equipo estacionario y portátil estructurado y/o no estructurado 
                                (columpio, llantas, cajas, tobogán, puentes con soga u otro) para inicial y PRONOEI</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre14" value="1" >
                                <label class="form-check-label" for="rmaed_pre14">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre14" value="0">
                                <label class="form-check-label" for="rmaed_pre14">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre14"></textarea>
                            </div>

                        {{--Planificación anual textarea-15--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">15.- Cuenta con el registro de entrega de los cuadernos
                                 a los padres de familia. y/o estudiantes.</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre15" value="1" >
                                <label class="form-check-label" for="rmaed_pre15">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre15" value="0">
                                <label class="form-check-label" for="rmaed_pre15">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre15"></textarea>
                            </div>

                        {{--Planificación anual textarea-16--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">16.- Cuanta con el registro de recepción y asignación a 
                                los alumnos de los materiales educativos en el SIAGIE.</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre16" value="1" >
                                <label class="form-check-label" for="rmaed_pre16">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre16" value="0">
                                <label class="form-check-label" for="rmaed_pre16">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre16"></textarea>
                            </div>
                            
                        {{--Planificación anual textarea-17--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">17.- Cuanta con suficiencia de los
                                 materiales educativos dotación 2023</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre17" value="1" >
                                <label class="form-check-label" for="rmaed_pre17">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre17" value="0">
                                <label class="form-check-label" for="rmaed_pre17">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre17"></textarea>
                            </div>

                        {{--Planificación anual textarea-18--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">18.- Cuenta con actas de compromiso de los padres de familia 
                                para devolución de cuadernos</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre18" value="1" >
                                <label class="form-check-label" for="rmaed_pre18">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre18" value="0">
                                <label class="form-check-label" for="rmaed_pre18">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre18"></textarea>
                            </div>

                        {{--Planificación anual textarea-19--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">19.- Cuanta con biblioteca en la institución educativa.</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre19" value="1" >
                                <label class="form-check-label" for="rmaed_pre19">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre19" value="0">
                                <label class="form-check-label" for="rmaed_pre19">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre19"></textarea>
                            </div>

                        {{--Planificación anual textarea-20--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">20.- La biblioteca de la institución educativa cuenta con el cronograma para la visita de los docentes
                                 y estudiantes. garantizando el uso pedagógico de los materiales</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre20" value="1" >
                                <label class="form-check-label" for="rmaed_pre20">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre20" value="0">
                                <label class="form-check-label" for="rmaed_pre20">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre20"></textarea>
                            </div>

                        {{--Planificación anual textarea-21--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">21.- El cien por ciento de los alumnos de su institución cuanta 
                                con los cuadernos de trabajo según nomina y registro de SIAGIE</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="rmaed_pre21" value="1" >
                                <label class="form-check-label" for="rmaed_pre21">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rmaed_pre21" value="0">
                                <label class="form-check-label" for="rmaed_pre21">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="rmaed_coment_pre21"></textarea>
                            </div>                
                    </div>
                    <div class="tab-pane fade" id="form3-tab-pane" role="tabpanel" aria-labelledby="form3-tab" tabindex="0">
                        {{--Planificación anual textarea-1--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">1.- La programación considera el uso de los materiales educativos
                                 distribuidos por el MINEDU de acuerdo al nivel educativo. </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="apr_pre1" value="1" >
                                <label class="form-check-label" for="apr_pre1">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="apr_pre1" value="0">
                                <label class="form-check-label" for="apr_pre1">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="apr_coment_pre1"></textarea>
                            </div>

                        {{--Planificación anual textarea-2--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">2.- Las unidades didácticas se vinculan con las competencias, capacidades, campos temáticos, actividades de otras áreas curriculares o enfoques y 
                                competencias transversales y evidencian el uso pedagógico de materiales educativos distribuidos por MINEDU </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="apr_pre2" value="1" >
                                <label class="form-check-label" for="apr_pre2">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="apr_pre2" value="0">
                                <label class="form-check-label" for="apr_pre2">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="apr_coment_pre2"></textarea>
                            </div>

                        {{--Planificación anual textarea-3--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">3.- La programación evidencia un cronograma para la visita de los docentes y estudiantes 
                                garantizando el uso pedagógico de los materiales de la biblioteca de la institución educativa. </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="apr_pre3" value="1" >
                                <label class="form-check-label" for="apr_pre3">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="apr_pre3" value="0">
                                <label class="form-check-label" for="apr_pre3">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="apr_coment_pre3"></textarea>
                            </div>

                    </div>
                    <div class="tab-pane fade" id="form4-tab-pane" role="tabpanel" aria-labelledby="form4-tab" tabindex="0">
                        {{--Planificación anual textarea-1--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">1.- El docente presenta la sesión donde evidencia el uso de los materiales educativos 
                                (estructurados o no estructurados) en relación al propósito de la sesión. </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="ase_pre1" value="1" >
                                <label class="form-check-label" for="ase_pre1">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ase_pre1" value="0">
                                <label class="form-check-label" for="ase_pre1">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="ase_coment_pre1"></textarea>
                            </div>

                        {{--Planificación anual textarea-2--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">2.- Los materiales de psicomotricidad se encuentran 
                                organizado para el uso fácil de los niños. En PRONOEI </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="ase_pre2" value="1" >
                                <label class="form-check-label" for="ase_pre2">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ase_pre2" value="0">
                                <label class="form-check-label" for="ase_pre2">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="ase_coment_pre2"></textarea>
                            </div>

                        {{--Planificación anual textarea-3--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">3.- Ubica los materiales educativos en ambientes 
                                seguros para su conservación y preservación</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="ase_pre3" value="1" >
                                <label class="form-check-label" for="ase_pre3">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ase_pre3" value="0">
                                <label class="form-check-label" for="ase_pre3">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="ase_coment_pre3"></textarea>
                            </div>

                        {{--Planificación anual textarea-4--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">4.- El docente utiliza materiales y/o recursos de manera oportuna, 
                                que ayudan al desarrollo de las actividades de aprendizaje, propuestas para las sesiones. </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="ase_pre4" value="1" >
                                <label class="form-check-label" for="ase_pre4">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ase_pre4" value="0">
                                <label class="form-check-label" for="ase_pre4">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="ase_coment_pre4"></textarea>
                            </div>

                        {{--Planificación anual textarea-5--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">5.- El docente acompaña y orienta, a los estudiantes, 
                                sobre el uso de los materiales en función del aprendizaje a lograr </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="ase_pre5" value="1" >
                                <label class="form-check-label" for="ase_pre5">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ase_pre5" value="0">
                                <label class="form-check-label" for="ase_pre5">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="ase_coment_pre5"></textarea>
                            </div>

                        {{--Planificación anual textarea-6--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">6.- El docente usa materiales elaborados con participación 
                                de estudiantes y/o pp.ff para el desarrollo de los aprendizajes. </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="ase_pre6" value="1" >
                                <label class="form-check-label" for="ase_pre6">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ase_pre6" value="0">
                                <label class="form-check-label" for="ase_pre6">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Evidencia / No aplica</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="ase_coment_pre6"></textarea>
                            </div>
                    </div>
        
                </div>
            </div>
        </form> 
    </div>
    
    
    
</div>
@include('layouts.components.boton')
<script>
    document.querySelector('.go-top-container').addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>
<script src="{{asset('frontend/js/select2.js')}}"></script>


@endsection