<!--inicio navbar-->
<nav class="px-3 py-2 bg-white navi">
        <p class="mb-0 text-navi" >
        UGEL - Unidad de Gestión Educativa Tarma
        </p>
        <div class="d-flex align-items-center ms-auto liner">
            <hr>
            <p class="pe-4 mb-0">Hola, <b>{{ auth()->user()->name}}</b></p>
            <img class="navbar-profile-image" src="{{asset('frontend/img/user.png')}}">
        </div>
        
        <div class="dropdown">
            <button class="bt-sesion" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu mt-3 shadow">
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-fingerprint"></i>&nbsp Cambiar contraseña</a></li>
                <li><a class="dropdown-item" href="{{ route('cerrar_sesion') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i>&nbsp Cerrar sesión</a></li>
            </ul>
        </div>
</nav>
<!--fin navbar-->

