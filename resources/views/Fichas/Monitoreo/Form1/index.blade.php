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
        <div class="car-inf p-3">
            <table id="tabla_usuario" class="table table" style="width:100%">
                <thead>
                    <tr>
                        <th>Apellidos y Nombres</th>
                        <th>Nombre</th>
                        <th>Guard</th>
                        <th>Fecha de Creación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>
                            <a href="" class="btn btn-acciones">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <form action="" method="POST"
                                style="display:inline-block;" onsubmit="">
                                <button class="btn btn-acciones"  type="submit" rel="tooltip">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
    
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Guard</th>
                        <th>Fecha de Creación</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    
        
</div>
@include ('layouts.partials.datatable')
@endsection