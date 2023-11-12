@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | detalles del rol</title>
<div class="container-fluid px-4 pb-5">
  <div class="d-flex py-3">
    <div class="">
        <a href="{{ route('roles.index') }}" class="href-closed">
            <button class="btn-closed d-flex">
                    <i class="fa-solid fa-arrow-left"></i>&nbsp; &nbsp;
                    <h6>Roles</h6> 
            </button>        
        </a>
    </div>
</div>

    <div class="container">
            <div class="row  justify-content-center">
                <div class="col-7">
                    <div class="car-inf">
                        <div class="d-flex">
                            <h6 class="text-muted"><i class="fa-solid fa-gear"></i>&nbsp;Configuración</h6>
                            &nbsp;&nbsp;<h6><i class="fa-solid fa-chevron-right"></i>&nbsp;&nbsp;Roles</h6>
                        </div>
                        <h4 class="pt-4 fw-semibold" >{{ $role->name }}</h4>
                        <h6 class="fw-semibold pt-2">Permisos</h6>
                        <hr class="m-0">
                        <div class="d-flex pt-1 pb-5 ">
                            @forelse ($role->permissions as $permission)
                                <div class="pt-2 pe-2">
                                    <span class="badge sp-proceso">{{ $permission->name }}</span>
                                </div>
                                
                            @empty
                                <div class="pt-2">
                                    <span class="badge sp-rechazado">Sin permisos</span>
                                </div>
                            
                            @endforelse
                        </div>
                        <h6 class="pt-2 text-muted"><i class="fa-solid fa-shield-halved"></i> &nbsp;{{ $role->guard_name }}</h6>
                        <div class="d-flex text-muted">
                            <h6><i class="fa-solid fa-clock"></i> &nbsp;Creación: {{ $role ['created_at'] }}</h6>
                            <h6 class="ms-auto"><i class="fa-solid fa-clock"></i> &nbsp;Update: {{ $role ['updated_at'] }}</h6>
                        </div>
                        
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection