@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Crear rol</title>
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
        <form action="{{ route('roles.store') }}" method="POST">
            @csrf
            <div class="row  justify-content-center">
                <div class="col-6">
                    <div class="car-inf">
                        <span class="badge sp-rechazado">Configuracion</span>
                        <span class="badge sp-atendido">Roles</span>
                        <br>
                        <label for="" class="form-label pt-4">Nombre del rol:</label>
                        <input type="text" class="form-control fw-semibold" name="name" autofocus>
                        <h5 class="fw-semibold pt-4">Permisos</h5>
                        <div class="d-flex pt-2 ">
                            @foreach ($permissions as $id => $permission)
                            <div class="form-check pe-3">
                                <input class="form-check-input" type="checkbox" value="{{ $id }}" name="permissions[]">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ $permission }}
                                </label>
                            </div>
                            @endforeach
                        </div>
                        <h6 class="pt-4">Descripción</h6>
                        <p>Los roles son una forma de administrar usuarios y accesos a grupos a las funcionalidades del sistema. Los roles asignados a los usuarios y grupos funcionan junto con un proveedor de seguridad. </p>
  
                        <div class="pt-3 d-flex">
                          <button class="xpgbtn_primary ms-auto" type="submit"><i class="fa-solid fa-floppy-disk"></i>&nbsp;&nbsp; Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </form> 
    </div>
</div>
@endsection