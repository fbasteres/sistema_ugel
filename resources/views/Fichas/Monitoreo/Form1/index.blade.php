@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Ficha 1 - 1 </title>
<div class="container-fluid px-5 pb-5">
    <div class="py-4">
        <a href="" class="href-closed">
            <button class="btn-closed d-flex">
                    <i class="fa-solid fa-arrow-left"></i>&nbsp; &nbsp;
                    <h6>Regresar</h6> 
            </button>        
        </a>
    </div>

    
    <span class="badge rounded-pill sp-atendido">Ficha 1 - 1</span>
    <div class="d-flex justify-content-between align-items-start">
        <h5 class="pb-4">Ficha de monitoreo planificación curricular</h5>
        
    </div>
    
    <div class="row">
        @include('layouts.partials.messages')
        Formulario Registrado Correctamente, Almacenado en base de datos<br> Beta 1.0
    </div>
</div>
@endsection