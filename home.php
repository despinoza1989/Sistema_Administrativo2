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
            <div class="card-body">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assents/img/Checklist.jpg" data-bs-interval="30" class="d-block" alt="">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Visitas En Terreno</h5>
                        <p>Por medio de los Checklist los Profesionales podrán supervisar.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assents/img/Asesoria en seguridad.jpg" data-bs-interval="30" class="d-block" alt="">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Asesoría</h5>
                        <p>Nuestros profesionales te podrán asesorar y orientarte por una solución.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assents/img/Gestión en Seguridad.jpg" data-bs-interval="30" class="d-block" alt="">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Gestión</h5>
                        <p>Con nuestra plataforma tendrás fácil acceso a un Profesional en Prevención.</p>
                        </div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
        </div>

        <footer id="footer">
            <div class="marcas">
                <img src="assents/img/logo-mutual@2x.png" alt="mutual">
                <img src="assents/img/Logo_ISL_20cm.jpg" alt="isl">
                <img src="assents/img/logo-mundo_achs-negro.png" alt="achs">
            </div>
            <div class="logo_footer">
                <img src="assents/img/Logo Empresa.png" alt="logo">
            </div>
        </footer>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    </body>

</html>