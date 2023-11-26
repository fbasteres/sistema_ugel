@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Ficha 1 - 3 </title>
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
            <span class="badge rounded-pill sp-atendido">Ficha 1-3</span>
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
                        <th>Resultado PA</th>
                        <th>Resultado UD</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($formulario3 as $formulario)
                    <tr>
                        <td>{{ $formulario['cod_form'] }}</td>
                        <td>{{ $formulario['nro_dni']}}</td>
                        <td>{{ $formulario['last_name']}} {{ $formulario['name']}}</td>
                        <td>{{ $formulario->iedu->cod_mod }} {{ $formulario->iedu->name}}</td>
                        <td>{{ $formulario['fecha']}}</td>
                        <td>
                            <?php
                                    switch ( true ) {
                                        case (  $formulario->rsta_1 >= 0 &&  $formulario->rsta_1 <= 2):
                                            echo '<span class="badge sp-finalizado">Necesita mejorar</span>';
                                            break;
                                        case (  $formulario->rsta_1 >= 3 &&  $formulario->rsta_1 <= 4):
                                            echo '<span class="badge sp-naranja">En proceso</span>';
                                            break;
                                        case (  $formulario->rsta_1 >= 5 &&  $formulario->rsta_1 <= 7):
                                            echo '<span class="badge sp-nuevo">Suficiente</span>';
                                            break;
                                        case (  $formulario->rsta_1 >= 8 &&  $formulario->rsta_1 <= 10):
                                            echo '<span class="badge sp-atendido">Destacado</span>';
                                            break;
                                    }
                            ?>
                        </td>
                        <td>
                            <?php
                                    switch ( true ) {
                                        case (  $formulario->rsta_2 >= 0 &&  $formulario->rsta_2 <= 7):
                                            echo '<span class="badge sp-finalizado">Necesita mejorar</span>';
                                            break;
                                        case (  $formulario->rsta_2 >= 8 &&  $formulario->rsta_2 <= 10):
                                            echo '<span class="badge sp-naranja">En proceso</span>';
                                            break;
                                        case (  $formulario->rsta_2 >= 11 &&  $formulario->rsta_2 <= 13):
                                            echo '<span class="badge sp-nuevo">Suficiente</span>';
                                            break;
                                        case (  $formulario->rsta_2 >= 14 &&  $formulario->rsta_2 <= 15):
                                            echo '<span class="badge sp-atendido">Destacado</span>';
                                            break;
                                    }
                            ?>
                        </td>
                        <td>
                            <a href="{{route ('form3.show', $formulario -> id )}}" class="btn btn-acciones">
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