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
                <div class="car-inf">
                    <h6>{{ $form1->iedu->cod_mod }}</h6>
                
                    <h6><i class="fa-solid fa-building-circle-check"></i> {{ $form1->iedu->name }}</h6>
                    <hr>
                    <h6 class="">{{ $form1->tipopro->name }}</h6>
                    <h4 class="fw-semibold ">{{$form1->last_name}} {{$form1->name}}</h4>
                    <p>Fecha: {{ $form1 ['fecha'] }}</p>
                    <p class="m-0"><i class="fa-regular fa-clock"></i>&nbsp;Inicio:&nbsp;{{ $form1->hrInicio }}</p>
                    <p class="m-0"><i class="fa-regular fa-clock"></i>&nbsp;Fin:&nbsp;{{ $form1->hrFin }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="car-inf">
                    <h6 class="text-end"><span class="badge sp-atendido">Resultados</span></h6>
                    <h6>Valoración de planificación anual:</h6>
                    <h4 class="fw-bold">{{ $form1 ['rsta_1'] }}</h4>
                    <br>
                    <h6>Valoración de unidad didáctica:</h6>
                    <h4 class="fw-bold">{{ $form1 ['rsta_2'] }}</h4>
                </div>
            </div>
            
        </div>
        
    </div>
    
        
</div>
@endsection