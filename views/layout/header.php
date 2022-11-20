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
                    <a class="nav-link active" aria-current="page" href="index.php?view=home">Inicio</a>
                </li>

                <!-- PESTAÑA DE USUARIOS CON SUB MENUS -->
                <?php if ($_SESSION['usuario']['id_tipo_usuario_p']==2){?>
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
                        <li><a class="dropdown-item" href="index.php?view=personal-activos">Listado Personal Activos</a>
                        <li><a class="dropdown-item" href="index.php?view=personal-inactivos">Listado Personal Inactivos</a>       
                        <li><a class="dropdown-item" href="index.php?view=clientes-activos">Listado Clientes Activos</a></li>
                        <li><a class="dropdown-item" href="index.php?view=clientes-inactivos">Listado Clientes Inactivos</a>
                        </li>

                    </ul>
                </li>
                <?php } ?>
                <!-- PESTAÑA CLIENTES CON SUB MENUS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Seguimiento Clientes
                    </a>
                    <ul class="dropdown-menu">
                        <?php if ($_SESSION['usuario']['id_tipo_usuario_p']==2){?>
                        <li><a class="dropdown-item" href="#">Esado de Pago</a></li>
                        
                        <li><a class="dropdown-item" href="index.php?view=listar-accidentes">Accidentabilidad de Cliente</a></li>
                        <?php } ?>

                        <?php if ($_SESSION['usuario']['id_tipo_usuario_p']==1){?>
                        <li><a class="dropdown-item" href="index.php?view=listar-accidentes-detalle">Accidentabilidad de Cliente</a></li>
                        <?php } ?>
                    </ul>
                </li>

                <!-- PESTAÑA PROFESIONAL CON SUB MENUS -->
                <?php if ($_SESSION['usuario']['id_tipo_usuario_p']==2){?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Asignación Profesionales
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?view=listado-asignaciones">Listado de Asignaciones</a></li>
                        <li><a class="dropdown-item" href="index.php?view=asignar-profesional">Asignación Profesional</a></li>
                    </ul>
                </li>
                <?php } ?>

                <!-- PESTAÑA DE VISITA EN TERRENO CON SUB MENUS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Visita en Terreno
                    </a>
                    <ul class="dropdown-menu">

                        <?php if ($_SESSION['usuario']['id_tipo_usuario_p']==1){?>
                        <li><a class="dropdown-item" href="index.php?view=crear-visita">Crear Visita</a></li>
                        <li><a class="dropdown-item" href="index.php?view=listado-visita-cliente">Lista de Visita Cliente</a></li>
                        <?php } ?>

                        <?php if ($_SESSION['usuario']['id_tipo_usuario_p']==2){?>
                        <li><a class="dropdown-item" href="index.php?view=listado-visita-admin">Lista de Visita a Clientes</a></li>
                        <?php } ?>

                    </ul>
                </li>

                <!-- PESTAÑA MEJORAS CON SUB MENUS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mejoras</a>
                    <ul class="dropdown-menu">

                        <?php if ($_SESSION['usuario']['id_tipo_usuario_p']==1){?>
                        <li><a class="dropdown-item" href="index.php?view=listado-check-mejora">Crear Mejora</a></li>
                        <?php } ?>

                        <?php if ($_SESSION['usuario']['id_tipo_usuario_p']==1){?>
                        <li><a class="dropdown-item" href="index.php?view=listado-mejora">Lista de Mejoras</a></li>
                        <?php } ?>

                        <?php if ($_SESSION['usuario']['id_tipo_usuario_p']==2){?>
                        <li><a class="dropdown-item" href="index.php?view=listado-mejora-admin">Mejoras Generadas por Profesionales</a></li>
                        <?php } ?>

                    </ul>
                </li>

                <!-- PESTAÑA CHECKLIST CON SUB MENUS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Check-List</a>
                    <ul class="dropdown-menu">

                        <?php if ($_SESSION['usuario']['id_tipo_usuario_p']==1){?>
                        <li><a class="dropdown-item" href="index.php?view=check-list">Generar Check-List</a></li>
                        <li><a class="dropdown-item" href="index.php?view=listado-check-list">Listado Check-List</a></li>
                        <?php } ?>
                        
                        <?php if ($_SESSION['usuario']['id_tipo_usuario_p']==2){?>
                        <li><a class="dropdown-item" href="index.php?view=listado-check-list-admin">Check-List Generados por Profesionales</a></li>
                        <?php } ?>
                    </ul>
                </li>

                 <!-- PESTAÑA ASESORIAS CON SUB MENUS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Asesorías</a>
                    <ul class="dropdown-menu">

                        <?php if ($_SESSION['usuario']['id_tipo_usuario_p']==1){?>
                        <li><a class="dropdown-item" href="index.php?view=listar-asesoria">Lista de Asesorías</a></li>
                        <?php } ?>

                        <?php if ($_SESSION['usuario']['id_tipo_usuario_p']==2){?>
                        <li><a class="dropdown-item" href="index.php?view=listar-asesoria-admin">Asesorías Generadas por Profesionales</a></li>
                        <?php } ?>

                    </ul>
                </li>
            
                <!-- PESTAÑA CAPACITACIONES CON SUB MENUS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Capacitación</a>
                    <ul class="dropdown-menu">

                        <?php if ($_SESSION['usuario']['id_tipo_usuario_p']==1){?>
                        <li><a class="dropdown-item" href="index.php?view=crear-capacitacion">Crear Capacitación</a></li>
                        <li><a class="dropdown-item" href="index.php?view=listar-capacitaciones">Lista de Capacitaciones</a></li>
                        <li><a class="dropdown-item" href="index.php?view=listar-solicitud-capacitacion">Lista de Solicitudes de Capacitaciones</a></li>
                        <?php } ?>

                        <?php if ($_SESSION['usuario']['id_tipo_usuario_p']==2){?>
                        <li><a class="dropdown-item" href="index.php?view=listar-capacitaciones-total">Capacitaciones Generadas por Profesionales</a></li>
                        <?php } ?>

                    </ul>
                </li>

                <!-- PESTAÑA REPORTES CON SUB MENUS -->
                <?php if ($_SESSION['usuario']['id_tipo_usuario_p']==2){?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Reportes</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?view=reportes-globales">Reportes Globales</a></li>
                        <li><a class="dropdown-item" href="index.php?view=reportes-clientes">Reportes Clientes</a></li>
                    </ul>
                </li>    
                <?php } ?>            

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

                <!-- PESTAÑA NOTIFICACIONES -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?view=notificaciones">Notificaciones <span class="badge bg-primary rounded-pill" id="cantidad">0</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?view=logout">Salir</a>
                </li>

            </ul>

        </div>
    </div>
</nav>

<script>

    var id = <?php echo $_SESSION['usuario']['id_personal']; ?>


    function init (){

        fetch('api.php/notificaciones/cantidad/' + id, {
            method: "GET",
            headers: {
                'Content-Type': 'application/json'
            }
        }).then(response=>response.json())
        .then((data) => {


            document.getElementById('cantidad').innerHTML=data.cantidad;
            setTimeout(() => {
                init()
            }, 5000);
        })



    }
    
    init()



</script>