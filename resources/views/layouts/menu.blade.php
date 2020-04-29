<div class="sidebar">
			
    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
            <!-- Información del usuario -->
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    @if (auth()->user()->foto == null)
                        <img src="/Base/mono.png" alt="..." class="avatar-img rounded-circle">
                    @else
                        <img src="/imagenes/usuarios/{{ auth()->user()->foto }}" alt="..." class="avatar-img rounded-circle">
                    @endif
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ auth()->user()->name }}
                            <span class="user-level">{{ auth()->user()->roles->nombre }}</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#">
                                    <span class="link-collapse">Mi perfil</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="link-collapse">Configuracion</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            @if (auth()->user()->id_rol == 1)
                <!-- Menu lateral Administrador-->
                <ul class="nav">
                    <li class="nav-item active">
                        <a href="/administrador">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                            <span class="badge badge-count">5</span>
                        </a>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Principal</h4>
                    </li>
                    <li class="nav-item">
                        <a href="/producto/">
                            <i class="fas fa-box"></i>
                            <p>Productos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/equipo/">
                            <i class="fas fa-laptop"></i>
                            <p>Equipo</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/tarea/">
                            <i class="fas fa-clipboard-list"></i>
                            <p>Tarea</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/reporte/">
                            <i class="fas fa-book-open"></i>
                            <p>Tickets</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/empresa/">
                            <i class="fas fa-building"></i>
                            <p>Empresa</p>
                        </a>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Otros</h4>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#base">
                            <i class="fas fa-layer-group"></i>
                            <p>Base</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="components/avatars.html">
                                        <span class="sub-item">Ayuda</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/buttons.html">
                                        <span class="sub-item">Novedades</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/buttons.html">
                                        <span class="sub-item">Contacto</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            @elseif(auth()->user()->id_rol == 2)
                <!-- Menu lateral Personal-->
                <ul class="nav">
                    <li class="nav-item active">
                        <a href="/personal">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                            <span class="badge badge-count">5</span>
                        </a>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Principal</h4>
                    </li>
                    <li class="nav-item">
                        <a href="/tarea/">
                            <i class="fas fa-clipboard-list"></i>
                            <p>Tarea</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/reporte/">
                            <i class="fas fa-book-open"></i>
                            <p>Reportes</p>
                        </a>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Otros</h4>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#base">
                            <i class="fas fa-layer-group"></i>
                            <p>Base</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="components/avatars.html">
                                        <span class="sub-item">Ayuda</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/buttons.html">
                                        <span class="sub-item">Novedades</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/buttons.html">
                                        <span class="sub-item">Contacto</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            @else
                <!-- Menu lateral Cliente-->
                <ul class="nav">
                    <li class="nav-item active">
                        <a href="/cliente">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                            <span class="badge badge-count">5</span>
                        </a>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Principal</h4>
                    </li>
                    <li class="nav-item">
                        <a href="/reporte/">
                            <i class="fas fa-book-open"></i>
                            <p>Reportes</p>
                        </a>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Otros</h4>
                    </li>
                    <li class="nav-item">
                        <a href="/novedades/">
                            <i class="fas fa-book-open"></i>
                            <p>Novedades</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#base">
                            <i class="fas fa-layer-group"></i>
                            <p>Soporte</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="/ayuda/">
                                        <span class="sub-item">Ayuda</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/contacto/">
                                        <span class="sub-item">Contacto</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            @endif

        </div>
    </div>
</div>