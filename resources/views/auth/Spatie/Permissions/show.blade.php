@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | detalles del permiso</title>
<div class="container-fluid px-4 pb-5">
  <div class="d-flex py-3">
    <div class="">
        <a href="{{ route('permissions.index') }}" class="href-closed">
            <button class="btn-closed d-flex">
                    <i class="fa-solid fa-arrow-left"></i>&nbsp; &nbsp;
                    <h6>Permisos</h6> 
            </button>        
        </a>
    </div>
</div>

    <div class="container">
            <div class="row  justify-content-center">
                <div class="col-6">
                    <div class="car-inf">
                        <span class="badge sp-rechazado">Configuracion</span>
                        <span class="badge sp-atendido">Permisos</span>
                        <br>
                        <h4 class="pt-4 fw-semibold" >{{ $permission->name }}</h4>
                        <h6 class="pt-2 text-muted"><i class="fa-solid fa-shield-halved"></i> &nbsp;{{ $permission->guard_name }}</h6>
                        <div class="d-flex text-muted">
                            <h6><i class="fa-solid fa-clock"></i> &nbsp;Creación: {{ $permission ['created_at'] }}</h6>
                            <h6 class="ms-auto"><i class="fa-solid fa-clock"></i> &nbsp;Update: {{ $permission ['updated_at'] }}</h6>
                        </div>
                        
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection