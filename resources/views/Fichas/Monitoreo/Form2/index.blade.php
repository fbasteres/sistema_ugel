@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Ficha 2 - 1 </title>
<div class="container-fluid px-4 pb-5">
    <div class="d-flex py-3">
        <div class="">
            <a href="{{ route('inicio') }}" class="href-closed">
                <button class="btn-closed d-flex">
                        <i class="fa-solid fa-arrow-left"></i>&nbsp; &nbsp;
                        <h6>Dashboard</h6> 
                </button>        
            </a>
        </div>
    </div> 
    <div class="container">
        @include('layouts.partials.messages')
        <div class="car-inf">
            <span class="badge rounded-pill sp-atendido">Ficha 2-1</span>
            <h5 class="m-0">Ficha de monitoreo</h5>
            <p class="m-0 pb-2">Muestra el total de los registros, del usuario que inicio sesión.</p>
            <hr class="m-0 pb-5">
            <table id="tabla_usuario" class="table table" style="width:100%">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>N° DNI</th>
                        <th>Apellidos y Nombres</th>
                        <th>institución</th>
                        <th>Fecha</th>
                        <th>Resultado Dominio II</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($formulario2 as $formulario)
                    <tr>
                        <td>{{ $formulario['cod_form']}}</td>
                        <td>{{ $formulario['nro_dni']}}</td>
                        <td>{{ $formulario['last_name']}} {{ $formulario['name']}}</td>
                        <td>{{ $formulario->iedu->cod_mod }} {{ $formulario->iedu->name}}</td>
                        <td>{{ $formulario['fecha']}}</td>
                        <td>
                            @switch(true)
                                @case($formulario->ense_resultado >= 15 &&  $formulario->ense_resultado <= 22)
                                    <span class="badge sp-finalizado">Necesita mejorar</span>
                                    @break
                                @case($formulario->ense_resultado >= 23 &&  $formulario->ense_resultado <= 37)
                                    <span class="badge sp-naranja">En proceso</span>    
                                    @break
                                @case($formulario->ense_resultado >= 38 &&  $formulario->ense_resultado <= 50)
                                    <span class="badge sp-nuevo">Suficiente</span>
                                    @break
                                @case($formulario->ense_resultado >= 51 &&  $formulario->ense_resultado <= 60)
                                    <span class="badge sp-atendido">Destacado</span>
                                    @break
                                @default
                                    
                            @endswitch
                        </td>
                        <td>
                            <a href="{{route ('form2.show', $formulario -> id )}}" class="btn btn-acciones">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Código</th>
                        <th>N° DNI</th>
                        <th>Apellidos y Nombres</th>
                        <th>institución</th>
                        <th>Fecha</th>
                        <th>Resultado Dominio II</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    
        
</div>
@include ('layouts.partials.datatable')
@endsection