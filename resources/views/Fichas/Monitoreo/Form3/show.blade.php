@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Ficha 1 - 1 </title>
<div class="container-fluid px-4 pb-5">
    <div class="py-3">
        <a href="{{ route('form3.index') }}" class="href-closed">
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
                            <h6 class="m-0 fw-bold ">{{ $form3 ['cod_form'] }}</h6>
                        </div>
                        <div class="text-end ">
                            <p class="m-0 text-muted">Nivel Educativo</p>
                            <h6 class="m-0 fw-semibold">{{ $form3->iedu->nivel_edu }}</h6>
                        </div>
                    </div>
                    <div class="car-inf mt-3">
                        <h6>{{ $form3->iedu->cod_mod }}</h6>
                        <h6><i class="fa-solid fa-building-circle-check"></i> {{ $form3->iedu->name }}</h6>
                        <hr>
                        <h6 class="">{{ $form3->tipopro->name }}</h6>
                        <h4 class="fw-semibold ">{{$form3->last_name}} {{$form3->name}}</h4>
                        <p>Fecha: {{ $form3 ['fecha'] }}</p>
                        <div class="d-flex">
                            <p class="m-0"><i class="fa-regular fa-clock"></i>&nbsp;Inicio:&nbsp;{{ $form3->hrInicio }}</p>
                            <p class="m-0 ps-5"><i class="fa-regular fa-clock"></i>&nbsp;Fin:&nbsp;{{ $form3->hrFin }}</p>
                        </div>
                        <hr>
                        <h6>Caracteristica</h6>
                        <div class="d-flex">
                            <h6>Grado</h6>
                            <h6 class="ps-5">Sección</h6>
                        </div>
                        <h6>Turno: </h6>
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
                                    <?php
                                        switch ( true ) {
                                            case (  $form3->rsta_1 >= 0 &&  $form3->rsta_1 <= 2):
                                                echo '<span class="badge sp-finalizado"><i class="fa-solid fa-circle"></i> &nbsp;Necesita mejorar</span>';
                                                break;
                                            case (  $form3->rsta_1 >= 3 &&  $form3->rsta_1 <= 4):
                                                echo '<span class="badge sp-naranja"><i class="fa-solid fa-circle"></i> &nbsp;En proceso</span>';
                                                break;
                                            case (  $form3->rsta_1 >= 5 &&  $form3->rsta_1 <= 7):
                                                echo '<span class="badge sp-nuevo"><i class="fa-solid fa-circle"></i> &nbsp;Suficiente</span>';
                                                break;
                                            case (  $form3->rsta_1 >= 8 &&  $form3->rsta_1 <= 10):
                                                echo '<span class="badge sp-atendido"><i class="fa-solid fa-circle"></i> &nbsp;Destacado</span>';
                                                break;
                                        }
                                    ?>
                                </h6>
                                <h2 class="fw-semibold">{{ $form3 ['rsta_1'] }}</h2>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card_paragon2-interior">
                                <h6>Unidad didactica</h6>
                                <h6 class="">
                                    <?php
                                        switch ( true ) {
                                            case (  $form3->rsta_2 >= 0 &&  $form3->rsta_2 <= 7):
                                                echo '<span class="badge sp-finalizado"><i class="fa-solid fa-circle"></i> &nbsp;Necesita mejorar</span>';
                                                break;
                                            case (  $form3->rsta_2 >= 8 &&  $form3->rsta_2 <= 10):
                                                echo '<span class="badge sp-naranja"><i class="fa-solid fa-circle"></i> &nbsp;En proceso</span>';
                                                break;
                                            case (  $form3->rsta_2 >= 11 &&  $form3->rsta_2 <= 13):
                                                echo '<span class="badge sp-nuevo"><i class="fa-solid fa-circle"></i> &nbsp;Suficiente</span>';
                                                break;
                                            case (  $form3->rsta_2 >= 14 &&  $form3->rsta_2 <= 15):
                                                echo '<span class="badge sp-atendido"><i class="fa-solid fa-circle"></i> &nbsp;Destacado</span>';
                                                break;
                                        }
                                    ?>
                                </h6>
                                <h2 class="fw-semibold">{{ $form3 ['rsta_2'] }}</h2>
                            </div>
                        </div>
                        
                    <div class="pt-5">
                        <h6><i class="fa-solid fa-comments"></i>&nbsp;Observaciones:</h6>
                        <p class="ps-4">{{ $form3 ['obs'] ?? '...'}}</p>
                        <h6><i class="fa-solid fa-comments"></i>&nbsp;Recomendaciones:</h6>
                        <p class="ps-4">{{ $form3 ['recomend'] ?? '...'}}</p>
                        <h6><i class="fa-solid fa-comments"></i>&nbsp;Compromisos de mejora:</h6>
                        <p class="ps-4">{{ $form3 ['cmejora'] ?? '...'}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        
</div>
@endsection