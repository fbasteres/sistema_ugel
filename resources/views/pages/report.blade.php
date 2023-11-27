@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Reporte </title>

<div class="container pt-4">
    <h3 class="fw-semibold">Reporte</h3>
    <h6 class="pb-4 text-muted">Muestra el total de los registros de formularios.</h6>
    <div class="row align-items-md-stretch">
        <div class="col-md-3 pb-3">
            <div class="car-inf2 align-items-center">
                <div class="d-flex justify-content-between align-items-start">
                    <h5>Total de fichas</h5>
                     <h1 class="text-end"> {{ $totalForm1 }} </h1>
                </div>
                <br>
                <div class="d-flex">
                    <i class="fa-solid fa-desktop car-inf2-gris"></i>&nbsp;&nbsp;&nbsp;
                    <h6 class="car-inf2-gris">Ficha 1 - 1</h6>
                </div>
                <h6 class="car-inf2-gris">Ficha de monitoreo planificación curricular.</h6>
                <h6 class="text-end pt-4 fichas-ver"><a href="{{ route('form1.reporte') }}">Ver listado &nbsp;<i class="fa-solid fa-arrow-right-long"></i></a></h6>   
            </div>
        </div>

        <div class="col-md-3 pb-3">
            <div class="car-inf2 align-items-center">
                <div class="d-flex justify-content-between align-items-start">
                    <h5>Total de fichas</h5>
                     <h1 class="text-end">{{ $totalForm2 }}</h1>
                </div>
                <br>
                <div class="d-flex">
                    <i class="fa-solid fa-eye car-inf2-gris"></i>&nbsp;&nbsp;&nbsp;
                    <h6 class="car-inf2-gris">Ficha 2 - 1</h6>
                </div>
                
                <h6 class="car-inf2-gris">Ficha de observación a docentes sobre...</h6>
                <h6 class="text-end pt-4 fichas-ver"><a href="{{ route('form2.reporte') }}">Ver listado &nbsp;<i class="fa-solid fa-arrow-right-long"></i></a></h6>  
            </div>
        </div>
        <div class="col-md-3 pb-3">
            <div class="car-inf2 align-items-center">
                <div class="d-flex justify-content-between align-items-start">
                    <h5>Total de fichas</h5>
                     <h1 class="text-end"> {{ $totalForm3 }} </h1>
                </div>
                <br>
                <div class="d-flex">
                    <i class="fa-solid fa-desktop car-inf2-gris"></i>&nbsp;&nbsp;&nbsp;
                    <h6 class="car-inf2-gris">Ficha 3 - 1</h6>
                </div>
                <h6 class="car-inf2-gris">Ficha de monitoreo planificación curricular.</h6>
                <h6 class="text-end pt-4 fichas-ver"><a href="{{ route('form3.reporte') }}">Ver listado &nbsp;<i class="fa-solid fa-arrow-right-long"></i></a></h6>
            </div>
        </div>
        <div class="col-md-3 pb-3">
            <div class="car-inf2 align-items-center">
                <div class="d-flex justify-content-between align-items-start">
                    <h5>Total de fichas</h5>
                     <h1 class="text-end"> {{ $totalAlm1 }} </h1>
                </div>
                <br>
                <div class="d-flex">
                    <i class="fa-solid fa-layer-group"></i>&nbsp;&nbsp;&nbsp;
                    <h6>Almacen</h6>
                </div>
                <h6>Ficha de supervisión y monitoreo del...</h6>
                <h6 class="text-end pt-4 fichas-ver"><a href="{{ route('almacen1.reporte') }}">Ver listado &nbsp;<i class="fa-solid fa-arrow-right-long"></i></a></h6>    
            </div>
        </div>
     
    </div>
</div>
@endsection