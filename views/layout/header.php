<!-- BARRA DE MENUS -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <img src="assents/img/Logo Empresa.png" alt="empresa" width="90px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>

                <!-- PESTAÑA DE USUARIOS CON SUB MENUS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Usuarios
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?view=registro-personal">Registro de Personal</a></li>
                        <li><a class="dropdown-item" href="index.php?view=registro-cliente">Registro de Cliente</a></li>

                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="index.php?view=personal-activos">Personal Activos</a>
                                
                                <li><a class="dropdown-item" href="index.php?view=clientes-activos">Listado Clientes Activos</a></li>
                        <li><a class="dropdown-item" href="index.php?view=clientes-inactivos">Listado Clientes Inactivos</a>
                        </li>

                    </ul>
                </li>

                <!-- PESTAÑA CLIENTES CON SUB MENUS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Clientes
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Seguimiento Clientes</a></li>
                    </ul>
                </li>

                <!-- PESTAÑA PROFESIONAL CON SUB MENUS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Profesionales
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Lista de Profesionales</a></li>
                        <li><a class="dropdown-item" href="index.php?view=asignar-profesional">Asignación Profesional</a></li>
                    </ul>
                </li>

                <!-- PESTAÑA REPORTES CON SUB MENUS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Reportes
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Reportes Globales</a></li>
                        <li><a class="dropdown-item" href="#">Reportes Clientes</a></li>
                    </ul>
                </li>

                <!-- PESTAÑA MANUALES CON SUB MENUS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Manuales
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Manual de Usuarios</a></li>
                        <li><a class="dropdown-item" href="#">Manual de Requerimientos</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?view=logout">Salir</a>
                </li>

            </ul>

        </div>
    </div>
</nav>

