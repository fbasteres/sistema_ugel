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
                            &nbsp;&nbsp;<h6><i class="fa-solid fa-chevron-right"></i>&nbsp;&nbsp;Editar usuario</h6>
                        </div>
                        <form action="{{ route('users.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row pt-2">
                                <div class="col-2">
                                    <img src="{{asset('frontend/img/user.png')}}">
                                </div>
                                <div class="col-10">
                                    <div class="row pt-2">
                                        <div class="col">
                                            <span>Nombres</span>
                                            <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" autofocus>
                                        </div>
                                        <div class="col">
                                            <span>Apellidos</span>
                                            <input type="text" class="form-control" name="last_name" value="{{ old('name', $user->last_name) }}">
                                        </div>
                                    </div>
                                    
                                    <div class="row pt-3">
                                        <div class="col-4">
                                            <span>Nro de DNI</span>
                                            <input type="number" class="form-control" name="dni" value="{{ old('dni', $user->dni) }}">
                                        </div>
                                        <div class="col-8">
                                            <span>Nombre de usuario</span> 
                                            <input type="text" disabled class="form-control" name="username" value="{{ old('username', $user->username) }}">
                                            <span class="no-permitido"><i class="fa-solid fa-circle-exclamation"></i> No permitido</span>
                                        </div>
                                    </div>
    
                                    <div class="row pt-3">
                                        <div class="col-7">
                                            <span>Correo electrónico</span>
                                            <input type="text" class="form-control" name="email" value="{{ old('email', $user->email) }}">
                                        </div>
                                        <div class="col-5">
                                            <span>Tipo de perfil</span>
                                            <select class="form-select" name="roles" value="{{ old('roles', $user->roles) }}">
                                                @foreach ($roles as $id => $role)
                                                <option value="{{ $id }} ">{{ $role }}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="d-flex pt-4">
                                        <button class="xpgbtn_primary ms-auto" type="submit"><i class="fa-solid fa-floppy-disk"></i>&nbsp;&nbsp; Guardar cambios</button>
                                    </div>
                                   
                                    
                                    <hr>
                                    <div class="pb-3">
                                        <h6><i class="fa-solid fa-clock"></i> &nbsp;Creación: {{ $user ['created_at'] }}</h6>
                                        <h6><i class="fa-solid fa-clock"></i> &nbsp;Update: {{ $user ['updated_at'] }}</h6>
                                    </div>
                                    
                                </div>
                            </div>
                        </form>
                        
                        <p>¡Muy pronto, tendrás la oportunidad de mejorar tu perfil! Seguimos trabajando para agregar información relevante que complete tus datos.</p>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection