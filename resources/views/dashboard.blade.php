@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Dashboard </title>

<div class="container-fluid p-5">
    <h3 class="pb-4">Dashboard</h3>
    <div class="row align-items-md-stretch">
        <div class="col-md-3">
            <div class="car-inf align-items-center">
                <div class="d-flex justify-content-between align-items-start">
                    <h5>Total de fichas</h5>
                     <h1 class="text-end"> {{ $totalForm1 }} </h1>
                </div>
                <br>
                <div class="d-flex">
                    <i class="fa-solid fa-desktop"></i>&nbsp;&nbsp;&nbsp;
                    <h6>Fichas de Monitoreo &nbsp;<span class="badge sp-proceso">Ficha 1 - 1</span></h6>
                </div>
                <h6>Ficha de monitoreo planificación curricular.</h6>
                <h6 class="text-end pt-4 fichas-ver"><a href="{{ route('form1.index') }}">Ver listado &nbsp;<i class="fa-solid fa-arrow-right-long"></i></a></h6>   
            </div>
        </div>

        <div class="col-md-3">
            <div class="car-inf align-items-center">
                <div class="d-flex justify-content-between align-items-start">
                    <h5>Total de fichas</h5>
                     <h1 class="text-end"> 0 </h1>
                </div>
                <br>
                <div class="d-flex">
                    <i class="fa-solid fa-eye"></i>&nbsp;&nbsp;&nbsp;
                    <h6>Fichas de Observación &nbsp;<span class="badge sp-proceso">Ficha 2 - 1</span></h6>
                </div>
                
                <h6>Ficha de observación a docentes sobre la práctica pedagógica en el aula.</h6>    
            </div>
        </div>
        <div class="col-md-3">
            <div class="car-inf align-items-center">
                <div class="d-flex justify-content-between align-items-start">
                    <h5>Total de fichas</h5>
                     <h1 class="text-end"> 0 </h1>
                </div>
                <br>
                <div class="d-flex">
                    <i class="fa-solid fa-desktop"></i>&nbsp;&nbsp;&nbsp;
                    <h6>Fichas de Monitoreo &nbsp;<span class="badge sp-proceso">Ficha 3 - 1</span></h6>
                </div>
                <h6>Ficha de monitoreo planificación curricular - inicial</h6>    
            </div>
        </div>
        <div class="col-md-3">
            <div class="car-inf align-items-center">
                <div class="d-flex justify-content-between align-items-start">
                    <h5>Total de fichas</h5>
                     <h1 class="text-end"> 0 </h1>
                </div>
                <br>
                <div class="d-flex">
                    <i class="fa-solid fa-layer-group"></i>&nbsp;&nbsp;&nbsp;
                    <h6>Almacen</h6>
                </div>
                <h6>Ficha de supervisión y monitoreo del uso pedagógico de materiales educativos en la institución educativa.</h6>    
            </div>
        </div>
     
    </div>
</div>
@endsection