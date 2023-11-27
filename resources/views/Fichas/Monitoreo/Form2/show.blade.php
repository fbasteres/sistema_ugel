@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Ficha 1 - 1 </title>
<div class="container-fluid px-4 pb-5">
    <div class="py-3">
        <a href="{{ route('form1.index') }}" class="href-closed">
            <button class="btn-closed d-flex">
                    <i class="fa-solid fa-arrow-left"></i>&nbsp; &nbsp;
                    <h6>Regresar</h6> 
            </button>        
        </a>
    </div>
    <div class="container">
        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="">
                    <div class="card_paragon  d-flex justify-content-between">
                        <div>
                            <p class="m-0 text-muted">Código</p>
                            <h6 class="m-0 fw-bold ">{{ $form1 ['cod_form'] }}</h6>
                        </div>
                        <div class="text-end ">
                            <p class="m-0 text-muted">Nivel Educativo</p>
                            <h6 class="m-0 fw-semibold">{{ $form1->iedu->nivel_edu }}</h6>
                        </div>
                    </div>
                    <div class="car-inf mt-3">
                        <h6>{{ $form1->iedu->cod_mod }}</h6>
                        <h6><i class="fa-solid fa-building-circle-check"></i> {{ $form1->iedu->name }}</h6>
                        <hr>
                        <h6 class="">{{ $form1->tipopro->name }}</h6>
                        <h4 class="fw-semibold ">{{$form1->last_name}} {{$form1->name}}</h4>
                        <p>Fecha: {{ $form1 ['fecha'] }}</p>
                        <div class="d-flex">
                            <p class="m-0"><i class="fa-regular fa-clock"></i>&nbsp;Inicio:&nbsp;{{ $form1->hrInicio }}</p>
                            <p class="m-0 ps-5"><i class="fa-regular fa-clock"></i>&nbsp;Fin:&nbsp;{{ $form1->hrFin }}</p>
                        </div>
                        <hr>
                        <h6>Caracteristica: &nbsp; {{ $form1->carac_id }}</h6>
                        <div class="d-flex">
                            <h6>Grado: &nbsp; {{ $form1->grado_id }}</h6>
                            <h6 class="ps-5">Sección &nbsp; {{ $form1->seccion_id }}</h6>
                        </div>
                        <h6>Turno: &nbsp; {{ $form1->turno_id }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="car-inf">
                    <div class="row align-items-md-stretch">
                        <div class="col-6">
                            <div class="card_paragon2-interior">
                                <h6>Planificación anual</h6>
                                <h6 class="">
                                @switch(true)
                                    @case($formulario->ense_resultado >= 15 &&  $formulario->ense_resultado <= 22)
                                        <span class="badge sp-finalizado">Necesita mejorar</span>
                                        @break
                                    @case($formulario->ense_resultado >= 23 &&  $formulario->ense_resultado <= 37)
                                        <span class="badge sp-naranja">En proceso</span>    
                                        @break
                                    @case($formulario->ense_resultado >= 38 &&  $formulario->ense_resultado <= 50)
                                        <span class="badge sp-nuevo">Suficiente</span>
                                        @break
                                    @case($formulario->ense_resultado >= 51 &&  $formulario->ense_resultado <= 60)
                                        <span class="badge sp-atendido">Destacado</span>
                                        @break
                                    @default
                                        
                                @endswitch
                                </h6>
                                <h2 class="fw-semibold">{{ $form1 ['rsta_1'] }}</h2>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card_paragon2-interior">
                                <h6>Unidad didactica</h6>
                                <h6 class="">
                                    <?php
                                        switch ( true ) {
                                            case (  $form1->rsta_2 >= 0 &&  $form1->rsta_2 <= 7):
                                                echo '<span class="badge sp-finalizado"><i class="fa-solid fa-circle"></i> &nbsp;Necesita mejorar</span>';
                                                break;
                                            case (  $form1->rsta_2 >= 8 &&  $form1->rsta_2 <= 10):
                                                echo '<span class="badge sp-naranja"><i class="fa-solid fa-circle"></i> &nbsp;En proceso</span>';
                                                break;
                                            case (  $form1->rsta_2 >= 11 &&  $form1->rsta_2 <= 13):
                                                echo '<span class="badge sp-nuevo"><i class="fa-solid fa-circle"></i> &nbsp;Suficiente</span>';
                                                break;
                                            case (  $form1->rsta_2 >= 14 &&  $form1->rsta_2 <= 15):
                                                echo '<span class="badge sp-atendido"><i class="fa-solid fa-circle"></i> &nbsp;Destacado</span>';
                                                break;
                                        }
                                    ?>
                                </h6>
                                <h2 class="fw-semibold">{{ $form1 ['rsta_2'] }}</h2>
                            </div>
                        </div>
                        
                    <div class="pt-5">
                        <h6><i class="fa-solid fa-comments"></i>&nbsp;Observaciones:</h6>
                        <p class="ps-4">{{ $form1 ['obs'] ?? '...'}}</p>
                        <h6><i class="fa-solid fa-comments"></i>&nbsp;Recomendaciones:</h6>
                        <p class="ps-4">{{ $form1 ['recomend'] ?? '...'}}</p>
                        <h6><i class="fa-solid fa-comments"></i>&nbsp;Compromisos de mejora:</h6>
                        <p class="ps-4">{{ $form1 ['cmejora'] ?? '...'}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        
</div>
@endsection