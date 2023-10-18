@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Ficha 1 - 1 </title>
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
            <table id="tabla_usuario" class="table table" style="width:100%">
                <thead>
                    <tr>
                        <th>N° DNI</th>
                        <th>Apellidos y Nombres</th>
                        <th>institución</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($formulario1 as $formulario)
                    <tr>
                        <td>{{ $formulario['nro_dni']}}</td>
                        <td>{{ $formulario['last_name']}} {{ $formulario['name']}}</td>
                        <td>{{ $formulario->iedu->cod_mod }} {{ $formulario->iedu->name}}</td>
                        <td>{{ $formulario['fecha']}}</td>
                        <td>
                            <a href="{{route ('form1.show', $formulario -> id )}}" class="btn btn-acciones">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>N° DNI</th>
                        <th>Apellidos y Nombres</th>
                        <th>Institución</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    
        
</div>
@include ('layouts.partials.datatable')
@endsection