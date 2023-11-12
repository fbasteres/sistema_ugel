@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Crear permiso</title>
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
        @include('layouts.partials.messages')
        <form action="{{ route('permissions.update', $permission->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row  justify-content-center">
                <div class="col-6">
                    <div class="car-inf">
                        <span class="badge sp-rechazado">Configuracion</span>
                        <span class="badge sp-atendido">Permisos</span>
                        <br>
                        <label for="" class="form-label pt-4">Editar nombre del permiso:</label>
                        <input type="text" class="form-control fw-semibold" value="{{ old('name', $permission->name) }}" name="name" autofocus>
                        <h6 class="pt-4">Descripción</h6>
                        <p>La seguridad del usuario se administra mediante privilegios y permisos. Los permisos definen el nivel de acceso que los usuarios y los grupos tienen respecto de un objeto. </p>
                        <h6 class="pt-2 text-muted"><i class="fa-solid fa-shield-halved"></i> &nbsp;{{ $permission->guard_name }}</h6>
                        <div class="d-flex text-muted">
                            <h6><i class="fa-solid fa-clock"></i> &nbsp;Creación: {{ $permission ['created_at'] }}</h6>
                            <h6 class="ms-auto"><i class="fa-solid fa-clock"></i> &nbsp;Update: {{ $permission ['updated_at'] }}</h6>
                        </div>
                        <div class="pt-3 d-flex">
                          <button class="xpgbtn_primary ms-auto" type="submit"><i class="fa-solid fa-floppy-disk"></i>&nbsp;&nbsp; Guardar cambios</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </form> 
    </div>
</div>
@endsection