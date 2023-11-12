@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Almacén 1 </title>
<div class="container-fluid px-4 pb-5">
    <div class="py-3">
        <a href="{{ route('inicio') }}" class="href-closed">
            <button class="btn-closed d-flex">
                    <i class="fa-solid fa-arrow-left"></i>&nbsp; &nbsp;
                    <h6>Regresar</h6> 
            </button>        
        </a>
    </div>

    <div class="container">
        <span class="badge rounded-pill sp-atendido">Almacén 1</span>
        <div class="d-flex align-items-end justify-content-between pb-4">
            <h5 class="fw-semibold">Ficha de supervisión y monitoreo <br> del uso pedagógico  de materiales
                educativos en la institución educativa.</h5>
            <form action="{{route ('alm1.update', $alm1->id)}}" method="post">
                @csrf
                @method('PUT')
                <div>
                    <button class="xpgbtn_primary" type="submit"><i class="fa-regular fa-paper-plane"></i>&nbsp;&nbsp; Enviar</button>
                </div>
                </div>
                    @include('layouts.partials.messages')
                    <div class="row">
                        <div class="col-md-4 pb-4">
                            <div class="car-inf1 align-items-center">
                                
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="car-inf align-items-center">
                                {{--Planificación anual textarea-mejora--}}
                                <div class="col-12 car-form pt-4">
                                    <p class="m-0">Compromisos de mejora:</p>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="rec_cmejora" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                </div>
            </form>
            
        
    </div>
    
    
</div>
@endsection