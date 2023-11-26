@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | detalles del permiso</title>
<div class="container-fluid px-4 pb-5">
  <div class="d-flex py-3">
    <div class="">
        <a href="{{ route('users.index') }}" class="href-closed">
            <button class="btn-closed d-flex">
                    <i class="fa-solid fa-arrow-left"></i>&nbsp; &nbsp;
                    <h6>Usuarios</h6> 
            </button>        
        </a>
    </div>
</div>

    <div class="container">
            <div class="row  justify-content-center">
                <div class="col-6">
                    <div class="card_datos">
                        <div class="d-flex card_datos-migajas">
                            <h6><i class="fa-solid fa-gear"></i>&nbsp;Configuración</h6>
                            &nbsp;&nbsp;<h6><i class="fa-solid fa-chevron-right"></i>&nbsp;&nbsp;Usuarios</h6>
                            &nbsp;&nbsp;<h6><i class="fa-solid fa-chevron-right"></i>&nbsp;&nbsp;Información</h6>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <img src="{{asset('frontend/img/user.png')}}">
                            </div>
                            <div class="col-10">
                                <div class="pt-4">
                                    @forelse ($user->roles as $role)
                                        <h6 class="rol_view">{{ $role->name }}</h6>
                                    @empty
                                        <h6>Sin rol</h6>
                                    @endforelse
                                </div>
                                <h4 class=" fw-semibold" >{{ $user->name }} {{ $user->last_name }}</h4>
                                <hr>
                                <div class="d-flex">
                                    <div class="d-flex">
                                        <i class="fa-solid fa-address-card"></i>
                                        <h6 class="text-muted m-0">&nbsp;&nbsp;{{ $user->dni }}</h6>  
                                    </div>
                                    <div class="d-flex ps-5"> 
                                        <h6>Usuario: </h6>
                                        <h6 class="text-muted m-0">&nbsp;{{ $user->username }}</h6>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    
                                </div>
                                <div class="d-flex">
                                    <h6>Correo electrónico: </h6>
                                    <h6 class="text-muted m-0">&nbsp;{{ $user->email }}</h6>
                                </div>
                                <hr>
                                <div class="pb-3">
                                    <h6><i class="fa-solid fa-clock"></i> &nbsp;Creación: {{ $user ['created_at'] }}</h6>
                                    <h6><i class="fa-solid fa-clock"></i> &nbsp;Update: {{ $user ['updated_at'] }}</h6>
                                </div>
                                
                            </div>
                        </div>
                        <p>¡Muy pronto, tendrás la oportunidad de mejorar tu perfil! Seguimos trabajando para agregar información relevante que complete tus datos.</p>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection