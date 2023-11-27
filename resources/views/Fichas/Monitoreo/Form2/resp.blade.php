@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Ficha 2 - 1 </title>
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
        <span class="badge rounded-pill sp-atendido">Ficha 2-1</span>
        <div class="d-flex align-items-end justify-content-between pb-4">
            <h5 class="fw-semibold">Ficha de monitoreo planificación curricular</h5>
            <form action="{{route ('form2.update', $form2->id)}}" method="post">
                @csrf
                @method('PUT')
                <div>
                    <button class="xpgbtn_primary" type="submit"><i class="fa-regular fa-paper-plane"></i>&nbsp;&nbsp; Enviar</button>
                </div>
        </div>
            @include('layouts.partials.messages')
            <div class="row">
                <div class="col-md-4 pb-4">
                    <div class="car-inf1 align-items-center">
                        <p class="m-0">{{ $form2->iedu->cod_mod }}</p>
                        <h6>{{ $form2->iedu->name }}</h6>
                        <hr>
                        <h6>{{ $form2->tipopro->name }}</h6>
                        <h5 class="m-0">{{ $form2->last_name }} {{ $form2->name }}</h5>
                        <p class="m-0 pt-2"><i class="fa-solid fa-address-card"></i>&nbsp;{{ $form2 ['nro_dni'] }}</p>
                    </div>
                </div>
                <div class="col-md-4 pb-4">
                    <div class="card_paragon align-items-center">
                        <div class="d-flex justify-content-between">
                            <i class="fa-regular fa-paste"></i>
                            <h6>
                            @switch(true)
                                @case($form2->ense_resultado >= 15 &&  $form2->ense_resultado <= 22)
                                    <span class="badge sp-finalizado">Necesita mejorar</span>
                                    @break
                                @case($form2->ense_resultado >= 23 &&  $form2->ense_resultado <= 37)
                                    <span class="badge sp-naranja">En proceso</span>    
                                    @break
                                @case($form2->ense_resultado >= 38 &&  $form2->ense_resultado <= 50)
                                    <span class="badge sp-nuevo">Suficiente</span>
                                    @break
                                @case($form2->ense_resultado >= 51 &&  $form2->ense_resultado <= 60)
                                    <span class="badge sp-atendido">Destacado</span>
                                    @break
                                @default
                            @endswitch
                            </h6>
                        </div>
                       
                        <div class="d-flex align-items-start">
                            <p class="m-0">Resultado</p>
                        </div>
                        <h5>Valoración Dominio II</h5>
                        <div class="d-flex">
                            <h1>{{ $form2->ense_resultado }}</h1>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="car-inf align-items-center">
                        {{--Planificación anual textarea-obs--}}
                        <div class="d-flex row">
                            <div class="col-6 car-form pt-2">
                                <p class="m-0">Observación:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="obs" rows="3"></textarea>
                            </div>
                            {{--Planificación anual textarea-rec--}}
                            <div class="col-6 car-form pt-2">
                                <p class="m-0">Recomendaciones:</p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="recomend" rows="3"></textarea>
                            </div>
                        </div>
                        
                        {{--Planificación anual textarea-mejora--}}
                        <div class="col-12 car-form pt-4">
                            <p class="m-0">Compromisos de mejora:</p>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="cmejora" rows="3"></textarea>
                        </div>
                    </div>
                </div>
        </div>
            </form>
            
        
    </div>
    
    
</div>
@endsection