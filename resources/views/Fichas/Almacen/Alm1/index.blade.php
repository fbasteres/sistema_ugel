@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Almacén 1 </title>
<div class="container-fluid px-4 pb-5">
    <div class="py-3">
        <a href="{{ route('inicio') }}" class="href-closed">
            <button class="btn-closed d-flex">
                    <i class="fa-solid fa-arrow-left"></i>&nbsp; &nbsp;
                    <h6>Dashboard</h6> 
            </button>        
        </a>
    </div>
    <div class="container">
        @include('layouts.partials.messages')
        <div class="car-inf">
            <span class="badge rounded-pill sp-atendido">Almacen 1</span>
            <h5 class="m-0">Ficha de supervisión y monitoreo
                del uso pedagógico de materiales educativos en la institución educativa.</h5>
            <p class="m-0 pb-2">Muestra el total de los registros, del usuario que inicio sesión.</p>
            <hr class="m-0 pb-5">
            <table id="tabla_usuario" class="table table" style="width:100%">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Especialista</th>
                        <th>Director</th>
                        <th>Docente</th>
                        <th>Fecha</th>
                        <th>Institución</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($foalm1 as $foalm)
                    <tr>
                        <td>{{ $foalm['cod_form']}}</td>
                        <td>{{ $foalm['es_lastname'] }} {{ $foalm['es_name'] }}</td>
                        <td>{{ $foalm['dr_lastname'] }} {{ $foalm['dr_name'] }}</td>
                        <td>{{ $foalm['doc_lastname'] }} {{ $foalm['doc_name'] }}</td>
                        <td>{{ $foalm['fecha']}}</td>
                        <td><b>{{ $foalm->iedu->cod_mod }}</b> {{ $foalm->iedu->name}}</td>
                        <td>
                            <a href="{{route ('alm1.show', $foalm -> id )}}" class="btn btn-acciones">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Código</th>
                        <th>Especialista</th>
                        <th>Director</th>
                        <th>Docente</th>
                        <th>Fecha</th>
                        <th>Institución</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    
        
</div>
@include ('layouts.partials.datatable')
@endsection