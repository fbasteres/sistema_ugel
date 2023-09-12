<!--sidebar-->
<div class="sidebar collapsed position-fixed top-0 bottom-0 bg-light bg-white border-end">
    <div class="d-flex align-items-center p-3 pt-3">
        <h4 class="fw-semibold sidebar-logo">Paragon<b style="color:red; font-size:1.5rem;">+</b></h4>
        <i class="sidebar-toggle fa-solid fa-arrow-left ms-auto fs-5 d-none d-md-block"></i>
    </div>
            <ul class="sidebar-menu m-0 mb-0">
                <li class="sidebar-menu-item {{ 'dashboard' == request()->path() ? 'active' : '' }}">
                    <a href="{{ route ('inicio') }}">
                    <i class="fa-brands fa-slack sidebar-menu-item-icon"></i>
                        Dashboard
                    </a>
                </li>
                <li class="sidebar-menu-divider text-uppercase">Componentes</li>
                <hr class="sidebar-menu-divider-hr">
                    <li class="sidebar-menu-item pt-1 has-dropdown">
                        <a href="#">
                        <i class="fa-solid fa-layer-group sidebar-menu-item-icon"></i>
                            Almacen &nbsp;<span class="badge sp-rechazado">Nuevo</span>
                        <i class="fa-solid fa-chevron-down sidebar-menu-item-accordion ms-auto"></i>
                        </a>
                        
                        <ul class="sidebar-dropdown-menu">
                            <li class="sidebar-dropdown-menu-item">
                                <a href="#">Monitoreo materiales educativos</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item pt-1 has-dropdown">
                        <a href="#">
                        <i class="fa-solid fa-desktop sidebar-menu-item-icon"></i>
                            Fichas de monitoreo
                        <i class="fa-solid fa-chevron-down sidebar-menu-item-accordion ms-auto"></i>
                        </a>
                        <ul class="sidebar-dropdown-menu">
                            <li class="sidebar-dropdown-menu-item">
                                <a href="{{route ('admin.form1.create')}}">Planificación curricular</a>
                            </li>
                            <li class="sidebar-dropdown-menu-item">
                                <a href="#">Planificación curricular &nbsp;<span class="badge sp-nuevo">Inicial</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item pt-1 has-dropdown">
                        <a href="#">
                        <i class="fa-solid fa-eye sidebar-menu-item-icon"></i>
                            Fichas de observación
                        <i class="fa-solid fa-chevron-down sidebar-menu-item-accordion ms-auto"></i>
                        </a>
                        <ul class="sidebar-dropdown-menu">
                            <li class="sidebar-dropdown-menu-item">
                                <a href="#">Practica pedagógica en el aula</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item pt-1 has-dropdown">
                        <a href="#">
                        <i class="fa-solid fa-circle-question sidebar-menu-item-icon"></i>
                            Centro de ayuda
                        </a>
                       
                    </li>
            </ul>
</div>
<div class="sidebar-overlay"></div>
<!--/sidebar-->