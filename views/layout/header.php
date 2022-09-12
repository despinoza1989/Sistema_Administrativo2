<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema Administrativo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
        <link rel="stylesheet" href="assents/css/footers.css" />

    </head>

    <body>
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
                                <li><a class="dropdown-item" href="#">Registro de Usuarios</a></li>
                                <li><a class="dropdown-item" href="#">Usuarios Activos</a></li>
                                <li><a class="dropdown-item" href="#">Usuarios Inactivos</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Registro de
                                        Personal</a></li>
                                <li><a class="dropdown-item" href="#">Lista de
                                        Personal</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Registro de Cliente</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Lista de Clientes</a></li>

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
                                <li><a class="dropdown-item" href="#">Asignación
                                        Profesional</a></li>
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
                            <a class="nav-link active" aria-current="page" href="index.php">Salir</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

        <!-- BARRA DE MENUS LATERAL-->

        <!-- BARRA DE MENUS LATERAL-->

        <div id="contenido">