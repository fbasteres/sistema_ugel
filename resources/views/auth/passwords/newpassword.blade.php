@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Seguridad</title>
<div class="container-fluid px-4 pb-5">
  <div class="d-flex py-3">
    <div class="">
        <a href="{{ URL::previous() }}" class="href-closed">
            <button class="btn-closed d-flex">
                    <i class="fa-solid fa-arrow-left"></i>&nbsp; &nbsp;
                    <h6>Regresar</h6> 
            </button>        
        </a>
    </div>
</div>

    <div class="container">
            <div class="row  justify-content-center">
                <div class="col-6">
                    <div class="card_datos">
                        <div class="d-flex card_datos-migajas">
                            <h6><i class="fa-solid fa-fingerprint"></i>&nbsp;Seguridad</h6>
                        </div>
                        <p class="pt-4">Si usas tu contraseña de Paragon+ en otros sitios de internet, es posible que tu cuenta esté menos protegida. Usa una contraseña más segura para protegerte y proteger tu portal.</p>
                        
                        <form action="{{ route('password.change') }}" method="POST">
                        @csrf
                            <label style="font-size:.85rem;" for="" class="form-label pt-4 m-0">Contraseña actual</label>
                            <input type="password" class="form-control" name="password_actual" autofocus>
                            @error('password_actual')
                                <p class="validate-form error">
                                    <i class="fa-solid fa-circle-exclamation"></i> {{ $message }}
                                </p>
                            @enderror
                            @if (Session::get('err', false))
                                <?php $data = Session::get('err'); ?>
                                @if (is_array(Session::get('err')))
                                    @foreach ($data as $message)
                                    <p class="validate-form error">
                                        <i class="fa-solid fa-circle-exclamation"></i> {{ $message }}
                                    </p>
                                    @endforeach
                                
                                @else
                                <p class="validate-form error">
                                    <i class="fa-solid fa-circle-exclamation"></i> {{ $data }}
                                </p>
                                @endif
                                
                            @endif
                            <label style="font-size:.85rem;" for="" class="form-label pt-3 m-0">Nueva contraseña</label>
                            <input type="password" class="form-control fw-semibold" name="newPassword">
                            <p class="validate-form error">
                                @error('newPassword')
                                <i class="fa-solid fa-circle-exclamation"></i> {{ $message }}
                                @enderror
                            </p>
                            <label style="font-size:.85rem;" for="" class="form-label pt-3 m-0">Confirmar contraseña</label>
                            <input type="password" class="form-control fw-semibold" name="confirmar_password">
                            <div class="pt-4 d-flex">
                                <button class="xpgbtn_primary ms-auto" type="submit"><i class="fa-solid fa-floppy-disk"></i>&nbsp;&nbsp; Guardar cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection