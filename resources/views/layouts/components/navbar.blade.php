<!--inicio navbar-->
<nav class="px-3 py-2 bg-white navi">
        <p class="mb-0 text-navi fw-semibold" >
            Hoy, {{ date('d')}}&nbsp;{{ date('M')}} de {{ date('Y') }}
        </p>
        <div class="d-flex align-items-center ms-auto liner">
            <hr>
            <div class="align-items-center pe-4">
                <div class="d-flex">
                    <p class="m-0">Hola, </p>
                    <p class="m-0 fw-semibold"> &nbsp;{{ auth()->user()->name}}</p>
                </div>
                <div>
                    @forelse (auth()->user()->roles as $role)
                        <p class="m-0 fw-semibold" style="font-size: .8rem;color:#5b36f2;">{{ $role->name }}</p>
                    @empty
                        <p>Sin rol</p>
                    @endforelse
                </div>
            </div>
            <img class="navbar-profile-image" src="{{asset('frontend/img/user.png')}}">
        </div>
        
        <div class="dropdown">
            <button class="bt-sesion" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu mt-3 shadow">
                <li><a class="dropdown-item" href="{{ route('password.edit')}}"><i class="fa-solid fa-fingerprint"></i>&nbsp Cambiar contraseña</a></li>
                <li><a class="dropdown-item" href="{{ route('cerrar_sesion') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i>&nbsp Cerrar sesión</a></li>
            </ul>
        </div>
</nav>
<!--fin navbar-->

