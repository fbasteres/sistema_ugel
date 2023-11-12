@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Crear usuario</title>
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
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="row  justify-content-center">
                <div class="col-6">
                    <div class="card_datos">
                        <div class="d-flex card_datos-migajas">
                            <h6><i class="fa-solid fa-gear"></i>&nbsp;Configuración</h6>
                            &nbsp;&nbsp;<h6><i class="fa-solid fa-chevron-right"></i>&nbsp;&nbsp;Usuarios</h6>
                            &nbsp;&nbsp;<h6><i class="fa-solid fa-chevron-right"></i>&nbsp;&nbsp;Nuevo usuario</h6>
                        </div>
                        <div>
                            <p class="m-0 pt-4">Crea un nuevo usuario es rápido y facil.</p>
                        </div>
                        
                        <hr>
                        @include('layouts.partials.messages')
                        <div class="row pt-1">
                            <div class="col-5">
                                <span>Nombres</span>
                                <input type="text" class="form-control" name="name" autofocus>
                            </div>
                            <div class="col-7">
                                <span>Apellidos</span>
                                <input type="text" class="form-control " name="last_name">
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-7">
                                <span>Correo electrónico</span>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="col-5">
                                <span>Tipo de perfil</span>
                                <select class="form-select" name="roles" data-placeholder="Selecione una Región" >
                                    @foreach ($roles as $id => $role)
                                    <option value="{{ $id }}" >{{ $role }}</option>
                                    @endforeach
                                </select>
                            </div>
                                
                        </div>

                        <div class="row pt-3">
                            <div class="col-7">
                                <span>Nombre de usuario</span>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="col-5">
                                <span>Nro de DNI</span>
                                <input type="number" class="form-control" name="dni">
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-6">
                                <SPan>Contraseña</SPan>
                                <input type="password" class="form-control" name="password" >
                            </div>
                            <div class="col-6">
                                <span>Confirmar contraseña</span>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                        <div class="pt-4 d-flex">
                          <button class="xpgbtn_primary ms-auto" type="submit"><i class="fa-solid fa-floppy-disk"></i>&nbsp;&nbsp; Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </form> 
    </div>
</div>
@endsection