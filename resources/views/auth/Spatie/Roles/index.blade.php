@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Roles </title>
<div class="container-fluid px-4 pb-5">
    <div class="d-flex py-3">
        <div class="">
            <a href="{{ route('inicio') }}" class="href-closed">
                <button class="btn-closed d-flex">
                        <i class="fa-solid fa-arrow-left"></i>&nbsp; &nbsp;
                        <h6>Regresar</h6> 
                </button>        
            </a>
        </div>
    </div>  
  
    <div class="d-flex container pb-3">
        <div class="ms-auto">
            <a href="{{ route ('roles.create') }}">
                <button class="xpgbtn_primary" type="submit"><i class="fa-solid fa-plus"></i>&nbsp;&nbsp; Nuevo rol</button>
            </a>
        </div>
    </div>
    

    <div class="container">
        @include('layouts.partials.messages')
        <div class="car-inf">
            <table id="tabla_usuario" class="table table" style="width:100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Agente</th>
                        <th>Fecha de creación</th>
                        <th>Permisos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role['id']}}</td>
                        <td>{{ $role['name']}}</td>
                        <td>{{ $role['guard_name']}}</td>
                        <td>{{ $role['created_at']}}</td>
                        <td>
                            @forelse ($role->permissions as $permission)
                                <span class="badge sp-proceso">{{ $permission->name }}</span>
                            @empty
                            <span class="badge sp-rechazado">Sin permisos</span>
                            @endforelse
                        </td>
                        <td>
                            <a href="{{route ('roles.show', $role -> id )}}" class="btn btn-acciones">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="{{route ('roles.edit', $role -> id )}}" class="btn btn-acciones">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <form action="{{route ('roles.destroy', $role-> id )}}" method="POST"
                                style="display:inline-block;" onsubmit="return confirm('Seguro?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-acciones"  type="submit" rel="tooltip">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
    
                            </form>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
    
        
</div>
@include ('layouts.partials.datatable')
@endsection