@include ('layouts.style')
@extends('layouts.master')
@section('content')
<title>Paragon+ | Usuarios </title>
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
            <a href="{{ route ('users.create') }}">
                <button class="xpgbtn_primary" type="submit"><i class="fa-solid fa-plus"></i>&nbsp;&nbsp; Nuevo usuario</button>
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
                        <th>Apellidos y Nombres</th>
                        <th>DNI</th>
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="">
                        <td>{{ $user['id']}}</td>
                        <td>{{ $user['name']}}&nbsp;{{ $user['last_name'] }}</td>
                        <td>{{ $user['dni']}}</td>
                        <td>{{ $user['username']}}</td>
                        <td>
                            @forelse ($user->roles as $role)
                                <span class="badge sp-atendido">{{ $role->name }}</span>
                            @empty
                                <span class="badge sp-rechazado">Ninguno</span>
                            @endforelse
                        </td>
                        <td>
                            <a href="{{route ('users.show', $user -> id )}}" class="btn btn-acciones">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="{{route ('users.edit', $user -> id )}}" class="btn btn-acciones">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <form action="{{route ('users.destroy', $user -> id )}}" method="POST"
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