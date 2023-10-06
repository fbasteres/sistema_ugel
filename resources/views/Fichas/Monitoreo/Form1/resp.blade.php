@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Ficha 1 - 1 </title>
<div class="container-fluid px-5 pb-5">
    <div class="py-4">
        <a href="{{ route('inicio') }}" class="href-closed">
            <button class="btn-closed d-flex">
                    <i class="fa-solid fa-arrow-left"></i>&nbsp; &nbsp;
                    <h6>Regresar</h6> 
            </button>        
        </a>
    </div>

    
    <span class="badge rounded-pill sp-atendido">Ficha 1 - 1</span>

    <div class="d-flex justify-content-between align-items-start">
        <h5 class="pb-4">Ficha de monitoreo planificación curricular</h5>
        <div class="">
            <button class="btn sp-finalizado px-5"><i class="fa-regular fa-paper-plane"></i>&nbsp;&nbsp; Enviar</button>
        </div>
    </div>
    @include('layouts.partials.messages')
    <div class="row">
        <div class="col-md-4">
            <div class="car-inf card-rst align-items-center">
                <div class="d-flex justify-content-between align-items-start">
                    <p class="m-0">Resultado</p>
                    <div class="d-flex">
                       {{-- <h5><spanclass="badgesp-nuevo">Suficiente</span></h5> --}}
                    </div>
                </div>
                <h5>Valoración planificación anual</h5>
                <div class="d-flex">
                    <h1>{{ $form1->rsta_1 }}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="car-inf card-rst align-items-center">
                <div class="d-flex justify-content-between align-items-start">
                    <p class="m-0">Resultado</p>
                    <div class="d-flex">
                        {{-- <h5><spanclass="badgesp-nuevo">Suficiente</span></h5> --}}
                    </div>
                </div>
                <h5>Valoración unidad didáctica</h5>
                <div class="d-flex">
                    <h1>{{ $form1->rsta_2 }}</h1>
                </div>
            </div>
        </div>
        
        <div class="col-md-12 pt-4">
            <div class="car-inf align-items-center">
                {{--Planificación anual textarea-obs--}}
                <div class="col-12 car-form pt-2">
                    <p class="m-0">Observación:</p>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                {{--Planificación anual textarea-rec--}}
                <div class="col-12 car-form pt-4">
                    <p class="m-0">Recomendaciones:</p>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                {{--Planificación anual textarea-mejora--}}
                <div class="col-12 car-form pt-4">
                    <p class="m-0">Compromisos de mejora:</p>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection