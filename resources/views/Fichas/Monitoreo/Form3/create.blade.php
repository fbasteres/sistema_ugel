@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Ficha 3 - 1 </title>
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
        <span class="badge rounded-pill sp-atendido">Ficha 3 - 1</span>
        <form action="{{route ('form3.store')}}" method="POST">
            @csrf
            <div class="d-flex align-items-end justify-content-between pb-4">
                <h5 class="fw-semibold">Ficha de monitoreo planificación curricular - Inicial</h5>
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
                    <button class="nav-link" id="form-2" data-bs-toggle="tab" data-bs-target="#form2-tab-pane" type="button" role="tab" aria-controls="form2" aria-selected="false">Verificación de la planificación anual</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="form-3" data-bs-toggle="tab" data-bs-target="#form3-tab-pane" type="button" role="tab" aria-controls="form3" aria-selected="false">Verificación de la unidad didáctica </button>
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
                                    <option value="">Selecione una opción</option>
                                    @foreach ($iedu as $ied)
                                    <option value="{{ $ied ['id'] }}">{{ $ied ['name'] }} | {{ $ied ['nivel_edu'] }}</option>
                                    @endforeach  
                                </select>
                            </div>
                            <div class="col-2 car-form pt-4">
                                <label for="name" class="form-label">Caracteristica</label>
                                <select class="form-select" name="carac_id" id="caract">
                                    @foreach ($caract as $cara)
                                    <option value="{{ $cara ['id'] }}">{{ $cara ['name'] }}</option>
                                    @endforeach  
                                </select>
                            </div>
                            <div class="col-4 car-form pt-4">
                                <label for="" class="form-label">Nombre del aula</label>
                                <input type="text" class="form-control" name="au_name">
                            </div>
                            <div class="col-2 car-form pt-4">
                                <label for="name" class="form-label">Ciclo</label>
                                <select class="form-select" name="ciclo_id" id="ciclo">
                                    @foreach ($ciclo as $cic)
                                    <option value="{{ $cic ['id'] }}">{{ $cic ['name'] }}</option>
                                    @endforeach 
                                </select>
                            </div>
                            <div class="col-2 car-form pt-4">
                                <label for="name" class="form-label">Edad de los niños</label>
                                <select class="form-select" name="edadn_id" id="edadn">
                                    @foreach ($edadn as $en)
                                    <option value="{{ $en ['id'] }}">{{ $en ['name'] }}</option>
                                    @endforeach 
                                </select>
                            </div>
                            <div class="col-2 car-form py-4 ">
                                <label for="name" class="form-label">Turno</label>
                                <select class="form-select" name="turno_id" id="turno">
                                    @foreach ($turno as $tur)
                                    <option value="{{ $tur ['id'] }}">{{ $tur ['name'] }}</option>
                                    @endforeach 
                                </select>
                            </div>
                            <hr class="hr">
                            <div class="col-2 car-form pt-4">
                                <label for="email" class="form-label d-flex">Fecha</p></label>
                                <input type="date" class="form-control" name="fecha">
                            </div>
                            <div class="col-2 car-form pt-4">
                                <label for="number" class="form-label">Visita N°</label>
                                <input type="number" class="form-control" name="nroVisita">
                            </div>
                            <div class="col-3 car-form pt-4">
                                <label for="" class="form-label">Hora de inicio</label>
                                <input type="time" class="form-control" name="hrInicio">
                            </div>
                            <div class="col-3 car-form pt-4">
                                <label for="" class="form-label">Hora de finalización</label>
                                <input type="time" class="form-control" name="hrFin">
                            </div>
                            <p></p>
                            <div class="col-4 car-form pt-4">
                                <label for="" class="form-label">Nombres</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="col-4 car-form pt-4">
                                <label for="" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" name="last_name">
                            </div>
                            <div class="col-2 car-form pt-4">
                                <label for="number" class="form-label">DNI</label>
                                <input type="number" class="form-control" id="validationTextarea" name="nro_dni">
                            </div>
                            <div class="col-2 car-form py-4">
                                <label for="name" class="form-label">Profesional</label>
                                <select class="form-select" name="tipoPro_id" id="tipopro">
                                    @foreach ($tipopro as $tpro)
                                    <option value="{{ $tpro ['id'] }}">{{ $tpro ['name'] }}</option>
                                    @endforeach 
                                </select>
                            </div>
                            
                        </div>
                    </div>
                    <div class="tab-pane fade" id="form2-tab-pane" role="tabpanel" aria-labelledby="form2-tab" tabindex="0">
                        <div class="col-12 pt-4">
                            <p class="text-muted">Selecione una opción, si se cumple o no se cumple en cada item</p>
                        </div>
                        {{--Planificación anual textarea-1--}}
                        <h5 class="pt-4">Descripción de la matriz</h5>
                        <hr class="m-0">
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">1.- La proyección tentativa estima el 
                                desarrollo de las competencias a lo largo del año.</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vpa_pre1" value="1" >
                                <label class="form-check-label" for="vpa_pre1">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vpa_pre1" value="0">
                                <label class="form-check-label" for="vpa_pre1">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vpa_coment_pre1"></textarea>
                            </div>
                        
                        {{--Planificación anual textarea-2--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">2.- Prioriza el desarrollo de las competencias teniendo en cuenta las necesidades, 
                                complejidad y naturaleza de las competencias.</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vpa_pre2" value="1" >
                                <label class="form-check-label" for="vpa_pre2">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vpa_pre2" value="0">
                                <label class="form-check-label" for="vpa_pre2">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pb-3">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vpa_coment_pre2"></textarea>
                            </div>
        
                        {{--Planificación anual textarea-3--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">3.- Identifica los momentos que organizan la jornada diaria.
                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vpa_pre3" value="1" >
                                <label class="form-check-label" for="vpa_pre3">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vpa_pre3" value="0">
                                <label class="form-check-label" for="vpa_pre3">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vpa_coment_pre3"></textarea>
                        </div>
        
                        {{--Planificación anual textarea-4--}}
                        <h5 class="pt-5">Caracterización del contexto</h5>
                        <hr class="m-0">
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">4.- Contiene información resumida de la caracterización del contexto: potencialidades y oportunidades: social, 
                                turismo, ambiental, productiva, política, económica, cultural, religiosa entre otros.
                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vpa_pre4" value="1" >
                                <label class="form-check-label" for="vpa_pre4">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vpa_pre4" value="0">
                                <label class="form-check-label" for="vpa_pre4">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vpa_coment_pre4"></textarea>
                        </div>
        
                        {{--Planificación anual textarea-5--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">5.- Contiene información resumida de la caracterización del contexto problemáticas o demandas: social, turismo, 
                                ambiental, productiva, política, económica, cultural, religiosa, tecnología, entre otros                       
                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vpa_pre5" value="1" >
                                <label class="form-check-label" for="vpa_pre5">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vpa_pre5" value="0">
                                <label class="form-check-label" for="vpa_pre5">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vpa_coment_pre5"></textarea>
                        </div>
        
                        {{--Planificación anual textarea-6--}}
                        <h5 class="pt-5">Caracterización del estudiante</h5>
                        <hr class="m-0">
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">6.- Describe el nivel en que se encuentran en
                                relación con las competencias del CNEB a partir de la evaluación diagnóstica (aprendizaje real del estudiante)                    
                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vpa_pre6" value="1" >
                                <label class="form-check-label" for="vpa_pre6">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vpa_pre6" value="0">
                                <label class="form-check-label" for="vpa_pre6">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vpa_coment_pre6"></textarea>
                        </div>
        
                        {{--Planificación anual textarea-7--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">7.- Considera los aprendizajes que se espera que 
                                logren los estudiantes (propósitos de aprendizaje).                    
                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vpa_pre7" value="1" >
                                <label class="form-check-label" for="vpa_pre7">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vpa_pre7" value="0">
                                <label class="form-check-label" for="vpa_pre7">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vpa_coment_pre7"></textarea>
                        </div>
                        {{--Planificación anual textarea-8--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">8.- Describe las condiciones socioemociales, culturales y expectativas de los estudiantes.                       
                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vpa_pre8" value="1" >
                                <label class="form-check-label" for="vpa_pre8">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vpa_pre8" value="0">
                                <label class="form-check-label" for="vpa_pre8">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vpa_coment_pre8"></textarea>
                        </div>
                        {{--Planificación anual textarea-9--}}
                        <h5 class="pt-5">Evaluación</h5>
                        <hr class="m-0">
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">9.- Organiza la evaluación a través de instrumentos para el registro de información (ficha de seguimiento del 
                                desarrollo y aprendizaje, cuaderno de campo, anecdotarios, etc.).                                              
                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vpa_pre9" value="1" >
                                <label class="form-check-label" for="vpa_pre9">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vpa_pre9" value="0">
                                <label class="form-check-label" for="vpa_pre9">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vpa_coment_pre9"></textarea>
                        </div>
                        {{--Planificación anual textarea-10--}}
                        <h5 class="pt-5">Orientaciones pedagógicas</h5>
                        <hr class="m-0">
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">10.- La planificación considera las acciones a realizar 
                                durante el proceso de planificación a largo plazo.                     
                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vpa_pre10" value="1" >
                                <label class="form-check-label" for="vpa_pre10">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vpa_pre10" value="0">
                                <label class="form-check-label" for="vpa_pre10">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vpa_coment_pre10"></textarea>
                        </div>
            
                    </div>
                    <div class="tab-pane fade" id="form3-tab-pane" role="tabpanel" aria-labelledby="form3-tab" tabindex="0">
                        <div class="col-12 pt-4">
                            <p class="text-muted">Selecione una opción, si se cumple o no se cumple en cada item</p>
                        </div>
                        {{--Planificación anual textarea-1--}}
                        <h5 class="pt-4">Elemento 1: Situación</h5>
                        <hr class="m-0">
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">1.- La situación planteada identifica la necesidad, interés o problema relevante y describe 
                                contextos cercanos a la realidad permitiéndole al estudiante asumir un rol protagónico. </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vud_pre1" value="1" >
                                <label class="form-check-label" for="vud_pre1">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vud_pre1" value="0">
                                <label class="form-check-label" for="vud_pre1">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pt-2 pb-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vud_coment_pre1"></textarea>
                            </div>
                        
                        {{--Planificación anual textarea-2--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">2.- Las preguntas o enunciado del reto 
                                movilizan la(s) competencia(s) que deben desarrollar los estudiantes.
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vud_pre2" value="1" >
                                <label class="form-check-label" for="vud_pre2">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vud_pre2" value="0">
                                <label class="form-check-label" for="vud_pre2">
                                    No
                                </label>
                            </div>
                        </div>
                            <div class="car-form pb-5">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vud_coment_pre2"></textarea>
                            </div>
        
                        {{--Planificación anual textarea-3--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">3.- El reto exige actuaciones desafiantes y alcanzables 
                                en relación a las necesidades de aprendizaje.                       
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vud_pre3" value="1" >
                                <label class="form-check-label" for="vud_pre3">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vud_pre3" value="0">
                                <label class="form-check-label" for="vud_pre3">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vud_coment_pre3"></textarea>
                        </div>
                        {{--Planificación anual textarea-4--}}
                        <h5 class="pt-4">Elemento 2: Propósito de aprendizaje </h5>
                        <hr class="m-0">
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">4.- Los propósitos de aprendizaje que se plantea se 
                                relaciona con las necesidades de aprendizaje de los estudiantes.
                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vud_pre4" value="1" >
                                <label class="form-check-label" for="vud_pre4">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vud_pre4" value="0">
                                <label class="form-check-label" for="vud_pre4">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vud_coment_pre4"></textarea>
                        </div>
                        {{--Planificación anual textarea-5--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">5.- El propósito de aprendizaje se relaciona con 
                                los enfoques transversales (valores y actitudes).                                        
                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vud_pre5" value="1" >
                                <label class="form-check-label" for="vud_pre5">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vud_pre5" value="0">
                                <label class="form-check-label" for="vud_pre5">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vud_coment_pre5"></textarea>
                        </div>
                        {{--Planificación anual textarea-6--}}
                        <h5 class="pt-5">Elemento 3: Evaluación</h5>
                        <hr>
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">6.- Plantea criterios claramente definidos (lenguaje simple y de fácil comprensión) en 
                                relación con los propósitos y la situación permitiendo que los estudiantes demuestren lo aprendido.                 
                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vud_pre6" value="1" >
                                <label class="form-check-label" for="vud_pre6">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vud_pre6" value="0">
                                <label class="form-check-label" for="vud_pre6">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vud_coment_pre6"></textarea>
                        </div>
                        {{--Planificación anual textarea-7--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">7.- Propone evidencias que dan cuenta del desarrollo de la(s) competencia(s) 
                                a través de actuaciones o producciones.                      
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vud_pre7" value="1" >
                                <label class="form-check-label" for="vud_pre7">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vud_pre7" value="0">
                                <label class="form-check-label" for="vud_pre7">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vud_coment_pre7"></textarea>
                        </div>
                        {{--Planificación anual textarea-8--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">8.- Se prevé instrumentos de evaluación que permiten registrar y analizar las evidencias.                 
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vud_pre8" value="1" >
                                <label class="form-check-label" for="vud_pre8">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vud_pre8" value="0">
                                <label class="form-check-label" for="vud_pre8">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vud_coment_pre8"></textarea>
                        </div>
                        {{--Planificación anual textarea-9--}}
                        <h5 class="pt-5">Elemento 4: Secuencia de actividades</h5>
                        <hr>
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">9.- Presentan orden lógico, didáctico y coherente para alcanzar los propósitos de aprendizaje planteados.                                     
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vud_pre9" value="1" >
                                <label class="form-check-label" for="vud_pre9">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vud_pre9" value="0">
                                <label class="form-check-label" for="vud_pre9">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vud_coment_pre9"></textarea>
                        </div>
                        {{--Planificación anual textarea-10--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">10.- Considera el título y una breve descripción de lo que se espera alcanzar en su desarrollo.                             
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vud_pre10" value="1" >
                                <label class="form-check-label" for="vud_pre10">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vud_pre10" value="0">
                                <label class="form-check-label" for="vud_pre10">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vud_coment_pre10"></textarea>
                        </div>
                        {{--Planificación anual textarea-11--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">11.- En las actividades, considera el diálogo de saberes intercultural e 
                                intergeneracional y la participación de la familia y comunidad.
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vud_pre11" value="1" >
                                <label class="form-check-label" for="vud_pre11">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vud_pre11" value="0">
                                <label class="form-check-label" for="vud_pre11">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vud_coment_pre11"></textarea>
                        </div>
                        {{--Planificación anual textarea-12--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">12.- La secuencia de actividades está orientada a resolver el 
                                reto/desafío planteado en la situación.                  
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vud_pre12" value="1" >
                                <label class="form-check-label" for="vud_pre12">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vud_pre12" value="0">
                                <label class="form-check-label" for="vud_pre12">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vud_coment_pre12"></textarea>
                        </div>
                        {{--Planificación anual textarea-13--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">13.- Considera estrategias de metacognición y 
                                reflexión a partir de sus errores y/o aciertos.                 
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vud_pre13" value="1" >
                                <label class="form-check-label" for="vud_pre13">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vud_pre13" value="0">
                                <label class="form-check-label" for="vud_pre13">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vud_coment_pre13"></textarea>
                        </div>
                        {{--Planificación anual textarea-14--}}
                        <h5 class="pt-4">Elemento 5: Recursos y materiales educativos</h5>
                        <hr class="m-0">
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">14.- Considera el uso de recursos y materiales educativos 
                                (Minedu) que ayudarán al desarrollo de la(s) competencia(s).
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vud_pre14" value="1" >
                                <label class="form-check-label" for="vud_pre14">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="vud_pre14" value="0">
                                <label class="form-check-label" for="vud_pre14">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vud_coment_pre14"></textarea>
                        </div>
                        {{--Planificación anual textarea-15--}}
                        <div class="col-12 car-form pt-4 d-flex">
                            <label for="password" class="form-label">15.- Considera el uso de diversos espacios y recursos 
                                tecnológicos con sentido pedagógico.
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check text-end">
                                <input class="form-check-input" type="radio" name="vud_pre15" value="1" >
                                <label class="form-check-label" for="vud_pre15">
                                    Si
                                </label>
                            </div>
                            &nbsp;&nbsp;
                                                    <div class="form-check">
                                <input class="form-check-input" type="radio" name="vud_pre15" value="0">
                                <label class="form-check-label" for="vud_pre15">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="vud_coment_pre15"></textarea>
                        </div>
                    </div>
        
                </div>
            </div>
        </form> 
    </div>
    
    
    
</div>

<script src="{{asset('frontend/js/select2.js')}}"></script>


@endsection