@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Ficha 2 - 1 </title>
<div class="container-fluid px-4 pb-5">
    <div class="d-flex py-3">
        <div class="">
            <a href="{{ route('inicio') }}" class="href-closed">
                <button class="btn-closed d-flex">
                        <i class="fa-solid fa-arrow-left"></i>&nbsp; &nbsp;
                        <h6>Regresar</h6> 
                </button>        
            </a>
        </div>
    </div>  

    <div class="container">
        @include('layouts.partials.messages')
        <span class="badge rounded-pill sp-atendido">Ficha 2 - 1</span>
        <form action="{{route ('form2.store')}}" method="post">
            @csrf
            <div class="d-flex align-items-end justify-content-between pb-4">
                <h5 class="fw-semibold">Ficha de monitoreo planificación curricular</h5>
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
                    <button class="nav-link" id="form-2" data-bs-toggle="tab" data-bs-target="#form2-tab-pane" type="button" role="tab" aria-controls="form2" aria-selected="false">Dominio II, Enseñanza para el aprendizaje de los estudiantes</button>
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
                            <div class="col-3 car-form pt-4">
                                <label for="name" class="form-label">Caracteristica</label>
                                <select class="form-select" name="carac_id" id="caract">
                                    @foreach ($caract as $cara)
                                    <option value="{{ $cara ['id'] }}">{{ $cara ['name'] }}</option>
                                    @endforeach  
                                </select>
                            </div>
                            <div class="col-2 car-form pt-4">
                                <label for="name" class="form-label">Grado</label>
                                <select class="form-select" name="grado_id" id="grado">
                                    @foreach ($grado as $grad)
                                    <option value="{{ $grad ['id'] }}">{{ $grad ['name'] }}</option>
                                    @endforeach 
                                </select>
                            </div>
                            <div class="col-3 car-form pt-4">
                                <label for="name" class="form-label">Sección</label>
                                <select class="form-select" name="seccion_id" id="secc">
                                    @foreach ($seccion as $secc)
                                    <option value="{{ $secc ['id'] }}">{{ $secc ['name'] }}</option>
                                    @endforeach 
                                </select>
                            </div>
                            <div class="col-3 car-form py-4 ">
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
                            <p><b>Competencia 3:</b> Crea un clima propicio para el aprendizaje, la convivencia democrática y la vivencia de la diversidad en todas sus expresiones con miras a formar ciudadanos críticos e interculturales.</p>
                        </div>
                        <h5 class="">Clima favorable para el aprendizaje</h5>
                        <hr class="m-0">
                        {{--Pregunta 1--}}
                        <div class="col-12 car-form pt-4">
                            <label class="form-label">1.- Promueve asertivamente relaciones interpersonales en el aula, basadas en valores relacionados a los enfoques transversales (D11).
                            </label>
                            <div class="row pt-2">
                                <div class="col-2">
                                    <label for="" class="form-label">Valoración:</label>
                                    <input type="number" class="form-control" name="ense_pre1">
                                </div>
                                <div class="col-10">
                                    <label for="" class="form-label">Evidencia:</label>
                                    <textarea class="form-control" rows="2" name="ense_evidencia_pre1"></textarea>
                                </div>
                            </div>                            
                        </div>
                        {{--Pregunta 2--}}
                        <div class="col-12 car-form pt-4">
                            <label class="form-label">2.- Orienta su práctica pedagógica hacia el logro de aprendizajes de todos sus estudiantes, propiciando altas expectativas en ellos (D12).
                            </label>
                            <div class="row pt-2">
                                <div class="col-2">
                                    <label for="" class="form-label">Valoración:</label>
                                    <input type="number" class="form-control" name="ense_pre2">
                                </div>
                                <div class="col-10">
                                    <label for="" class="form-label">Evidencia:</label>
                                    <textarea class="form-control" rows="2" name="ense_evidencia_pre2"></textarea>
                                </div>
                            </div>                            
                        </div>
                        {{--Pregunta 3--}}
                        <div class="col-12 car-form pt-4">
                            <label class="form-label">3.- Promueve un ambiente acogedor que valora la diversidad como oportunidad de aprendizaje(D13).
                            </label>
                            <div class="row pt-2">
                                <div class="col-2">
                                    <label for="" class="form-label">Valoración:</label>
                                    <input type="number" class="form-control" name="ense_pre3">
                                </div>
                                <div class="col-10">
                                    <label for="" class="form-label">Evidencia:</label>
                                    <textarea class="form-control" rows="2" name="ense_evidencia_pre3"></textarea>
                                </div>
                            </div>                            
                        </div>
                        {{--Pregunta 4--}}
                        <div class="col-12 car-form pt-4">
                            <label class="form-label">4.- Promueve relaciones interpersonales de respeto, cooperación y soporte de los estudiantes con NEE* (de no ser el caso se obvia el ítem y se valora igual al D13).
                            </label>
                            <div class="row pt-2">
                                <div class="col-2">
                                    <label for="" class="form-label">Valoración:</label>
                                    <input type="number" class="form-control" name="ense_pre4">
                                </div>
                                <div class="col-10">
                                    <label for="" class="form-label">Evidencia:</label>
                                    <textarea class="form-control" rows="2" name="ense_evidencia_pre4"></textarea>
                                </div>
                            </div>                            
                        </div>
                        {{--Pregunta 5--}}
                        <div class="col-12 car-form pt-4">
                            <label class="form-label">5.- Resuelve situaciones de conflicto de manera reflexiva, a través del diálogo y haciendo uso de las normas concertadas de convivencia (D15).
                            </label>
                            <div class="row pt-2">
                                <div class="col-2">
                                    <label for="" class="form-label">Valoración:</label>
                                    <input type="number" class="form-control" name="ense_pre5">
                                </div>
                                <div class="col-10">
                                    <label for="" class="form-label">Evidencia:</label>
                                    <textarea class="form-control" rows="2" name="ense_evidencia_pre5"></textarea>
                                </div>
                            </div>                            
                        </div>
                        {{--Pregunta 6--}}
                        <div class="col-12 car-form pt-4">
                            <label class="form-label">6.- Organiza el aula y/o otros espacios pedagógicos, de forma, pertinente, segura y accesible para el aprendizaje de los estudiantes (D16).
                            </label>
                            <div class="row pt-2">
                                <div class="col-2">
                                    <label for="" class="form-label">Valoración:</label>
                                    <input type="number" class="form-control" name="ense_pre6">
                                </div>
                                <div class="col-10">
                                    <label for="" class="form-label">Evidencia:</label>
                                    <textarea class="form-control" rows="2" name="ense_evidencia_pre6"></textarea>
                                </div>
                            </div>                            
                        </div>
                        {{--Pregunta 7--}}
                        <div class="col-12 car-form pt-4">
                            <label class="form-label">7.- Aprovecha las ocasiones de discriminación y exclusión reales o simuladas que conozca para reflexionar con sus estudiantes sobre la necesidad de prevenirlas y desarrolla actitudes y habilidades para enfrentarlas. (D17).
                            </label>
                            <div class="row pt-2">
                                <div class="col-2">
                                    <label for="" class="form-label">Valoración:</label>
                                    <input type="number" class="form-control" name="ense_pre7">
                                </div>
                                <div class="col-10">
                                    <label for="" class="form-label">Evidencia:</label>
                                    <textarea class="form-control" rows="2" name="ense_evidencia_pre7"></textarea>
                                </div>
                            </div>                            
                        </div>

                        <div class="col-12 pt-5">
                            <p><b>Competencia 4:</b> Conduce el proceso de enseñanza con dominio de los contenidos disciplinares y el uso de estrategias y recursos pertinentes, para que todos los estudiantes aprendan de manera reflexiva y crítica en torno a la solución de problemas relacionados con sus experiencias, intereses y contextos culturales.</p>
                        </div>
                        <h5 class="">Desarrollo del proceso de enseñanza</h5>
                        <hr class="m-0">
                        {{--Pregunta 8--}}
                        <div class="col-12 car-form pt-4">
                            <label class="form-label">8.- Propicia en los estudiantes la formulación de estrategias que promueven la búsqueda de soluciones a situaciones problemáticas asumiendo una actitud creativa, reflexiva y crítica(D19).
                            </label>
                            <div class="row pt-2">
                                <div class="col-2">
                                    <label for="" class="form-label">Valoración:</label>
                                    <input type="number" class="form-control" name="ense_pre8">
                                </div>
                                <div class="col-10">
                                    <label for="" class="form-label">Evidencia:</label>
                                    <textarea class="form-control" rows="2" name="ense_evidencia_pre8"></textarea>
                                </div>
                            </div>                            
                        </div>
                        {{--Pregunta 9--}}
                        <div class="col-12 car-form pt-4">
                            <label class="form-label">9.- Comunica y verifica la comprensión de los aprendizajes que se espera que logren los estudiantes (propósito de aprendizaje) mediante variadas estrategias (D20).
                            </label>
                            <div class="row pt-2">
                                <div class="col-2">
                                    <label for="" class="form-label">Valoración:</label>
                                    <input type="number" class="form-control" name="ense_pre9">
                                </div>
                                <div class="col-10">
                                    <label for="" class="form-label">Evidencia:</label>
                                    <textarea class="form-control" rows="2" name="ense_evidencia_pre9"></textarea>
                                </div>
                            </div>                            
                        </div>
                        {{--Pregunta 10--}}
                        <div class="col-12 car-form pt-4">
                            <label class="form-label">10.- Demuestra seguridad en el conocimiento disciplinar y lo transmite de manera comprensible de acuerdo a la edad y/o grado de los estudiantes (D21).
                            </label>
                            <div class="row pt-2">
                                <div class="col-2">
                                    <label for="" class="form-label">Valoración:</label>
                                    <input type="number" class="form-control" name="ense_pre10">
                                </div>
                                <div class="col-10">
                                    <label for="" class="form-label">Evidencia:</label>
                                    <textarea class="form-control" rows="2" name="ense_evidencia_pre10"></textarea>
                                </div>
                            </div>                            
                        </div>
                        {{--Pregunta 11--}}
                        <div class="col-12 car-form pt-4">
                            <label class="form-label">11.- En la conducción del proceso de enseñanza y aprendizaje se evidencia el uso de las orientaciones pedagógicas para el desarrollo de competencias propuestas en el CNEB (D22).
                            </label>
                            <div class="row pt-2">
                                <div class="col-2">
                                    <label for="" class="form-label">Valoración:</label>
                                    <input type="number" class="form-control" name="ense_pre11">
                                </div>
                                <div class="col-10">
                                    <label for="" class="form-label">Evidencia:</label>
                                    <textarea class="form-control" rows="2" name="ense_evidencia_pre11"></textarea>
                                </div>
                            </div>                            
                        </div>
                        {{--Pregunta 12--}}
                        <div class="col-12 car-form pt-4">
                            <label class="form-label">12.- Durante el proceso de enseñanza y aprendizaje, integra el uso de las TICs, acorde a las capacidades de la competencia 28: Personaliza, gestiona, interactúa y crea (D23).
                            </label>
                            <div class="row pt-2">
                                <div class="col-2">
                                    <label for="" class="form-label">Valoración:</label>
                                    <input type="number" class="form-control" name="ense_pre12">
                                </div>
                                <div class="col-10">
                                    <label for="" class="form-label">Evidencia:</label>
                                    <textarea class="form-control" rows="2" name="ense_evidencia_pre12"></textarea>
                                </div>
                            </div>                            
                        </div>

                        <div class="col-12 pt-5">
                            <p><b>Competencia 5:</b> Evalúa permanentemente el aprendizaje de acuerdo a los objetivos institucionales previstos, para tomar decisiones y retroalimentar a sus estudiantes y a la comunidad educativa, teniendo en cuenta las diferencias individuales y contextos culturales.</p>
                        </div>
                        <h5 class="">Evaluación formativa</h5>
                        <hr class="m-0">
                        {{--Pregunta 13--}}
                        <div class="col-12 car-form pt-4">
                            <label class="form-label">13.- Acompaña a los estudiantes de manera diferenciada para mejorar sus logros de aprendizaje, a partir del análisis de las evidencias o productos de las actividades que desarrollan (D25).
                            </label>
                            <div class="row pt-2">
                                <div class="col-2">
                                    <label for="" class="form-label">Valoración:</label>
                                    <input type="number" class="form-control" name="ense_pre13">
                                </div>
                                <div class="col-10">
                                    <label for="" class="form-label">Evidencia:</label>
                                    <textarea class="form-control" rows="2" name="ense_evidencia_pre13"></textarea>
                                </div>
                            </div>                            
                        </div>
                        {{--Pregunta 14--}}
                        <div class="col-12 car-form pt-4">
                            <label class="form-label">14.- Realiza el proceso de retroalimentación, adecuada y oportunamente, de manera individual y colectiva (D27).
                            </label>
                            <div class="row pt-2">
                                <div class="col-2">
                                    <label for="" class="form-label">Valoración:</label>
                                    <input type="number" class="form-control" name="ense_pre14">
                                </div>
                                <div class="col-10">
                                    <label for="" class="form-label">Evidencia:</label>
                                    <textarea class="form-control" rows="2" name="ense_evidencia_pre14"></textarea>
                                </div>
                            </div>                            
                        </div>
                        {{--Pregunta 15--}}
                        <div class="col-12 car-form pt-4">
                            <label class="form-label">15.- Comunica y verifica la comprensión de los criterios de evaluación y hace uso de instrumentos a través del cual evalúa las actuaciones o producciones de los estudiantes (D28).
                            </label>
                            <div class="row pt-2">
                                <div class="col-2">
                                    <label for="" class="form-label">Valoración:</label>
                                    <input type="number" class="form-control" name="ense_pre15">
                                </div>
                                <div class="col-10">
                                    <label for="" class="form-label">Evidencia:</label>
                                    <textarea class="form-control" rows="2" name="ense_evidencia_pre15"></textarea>
                                </div>
                            </div>                            
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