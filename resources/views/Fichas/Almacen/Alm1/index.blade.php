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
            <table id="tabla_usuario" class="table table" style="width:100%">
                <thead>
                    <tr>
                        <th>N° DNI</th>
                        <th>Apellidos y Nombres</th>
                        <th>institución</th>
                        <th>Fecha</th>
                        <th>Resultado PA</th>
                        <th>Resultado UD</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($foalm1 as $foalm)
                    <tr>
                        <td>{{ $foalm['nro_dni']}}</td>
                        <td>{{ $foalm['last_name']}} {{ $foalm['name']}}</td>
                        <td>{{ $foalm->iedu }} {{ $foalm->iedu->name}}</td>
                        <td>{{ $foalm['fecha']}}</td>
                        <td>
                            
                        </td>
                        <td>
                            
                        </td>
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
                        <th>N° DNI</th>
                        <th>Apellidos y Nombres</th>
                        <th>Institución</th>
                        <th>Fecha</th>
                        <th>Resultado PA</th>
                        <th>Resultado UD</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    
        
</div>
@include ('layouts.partials.datatable')
@endsection