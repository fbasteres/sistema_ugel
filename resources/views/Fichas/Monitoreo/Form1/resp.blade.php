@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Ficha 1 - 1 </title>
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
        <span class="badge rounded-pill sp-atendido">Ficha 1 - 1</span>
        <div class="d-flex align-items-end justify-content-between pb-4">
            <h5 class="fw-semibold">Ficha de monitoreo planificación curricular</h5>
            <form action="{{route ('form1.update', $form1->id)}}" method="post">
                @csrf
                @method('PUT')
                <div>
                    <button class="xpgbtn_primary" type="submit"><i class="fa-regular fa-paper-plane"></i>&nbsp;&nbsp; Enviar</button>
                </div>
        </div>
            @include('layouts.partials.messages')
            <div class="row">
                <div class="col-md-4 pb-4">
                    <div class="card_paragon align-items-center">
                            <i class="fa-regular fa-paste"></i>
                            <p class="m-0">Resultado</p>
                        <h5>Valoración planificación anual</h5>
                        <div class="d-flex">
                            <h1>{{ $form1->rsta_1 }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-4">
                    <div class="card_paragon align-items-center">
                        <i class="fa-regular fa-paste"></i>
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