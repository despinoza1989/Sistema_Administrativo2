<?php
/*require_once 'autoload.php';*/
session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Administrativo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link href="assents/css/login.css" rel="stylesheet" />
    <link rel="stylesheet" href="assents/css/footers.css"/>
    <script src="assents/js/validacion.js"></script>
    
</head>
<body>
    <?php
        if(!isset($_SESSION["activa"])){

            require_once "controllers/LoginController.php";
            $ctrl = new LoginController();

        }else{

            $request= "";

            if(!isset($_GET['view']) || is_null($_GET['view'])){
                $request= "/";
            }else{
                $request = $_GET['view'];
            }          

            switch ($request) {
                case '':
                case '/':
                    require_once "controllers/HomeController.php";
                    $ctrl = new HomeController();
                    break;
                
                case 'home':
                    require_once "controllers/HomeController.php";
                    $ctrl = new HomeController();
                    break;

                case 'registro-personal':
                    require_once "controllers/PersonalController.php";
                    $ctrl = new PersonalController();
                    break;

                case 'registro-cliente':
                    require_once "controllers/ClienteController.php";
                    $ctrl = new ClienteController();
                    break;

                case 'asignar-profesional':
                    require_once "controllers/AsignarProfesionalController.php";
                    $ctrl = new AsignarProfesionalController();
                    break;

                case 'listado-asignaciones':
                    require_once "controllers/AsignacionProfesionalController.php";
                    $ctrl = new AsignacionProfesionalController();
                    break;

                case 'listado-asignaciones-profesional':
                    require_once "controllers/ListadoAsignacionProfesionalController.php";
                    $ctrl = new ListadoAsignacionProfesionalController();
                    break;

                case 'modificar-asignaciones':
                    require_once "controllers/ModificarAsignacionController.php";
                    $ctrl = new ModificarAsignacionController();
                    break;   
                
                case 'datos-cliente':
                    require_once "controllers/DatosClienteController.php";
                    $ctrl = new DatosClienteController();
                    break;   
                        

                case 'clientes-activos':
                    require_once "controllers/ClienteActivosController.php";
                    $ctrl = new ClienteActivosController();
                    break;
                
                case 'clientes-inactivos':
                    require_once "controllers/ClienteInactivosController.php";
                    $ctrl = new ClienteInactivosController();
                    break;
                
                case 'personal-activos':
                    require_once "controllers/PersonalActivosController.php";
                    $ctrl = new PersonalActivosController();
                    break;

                case 'personal-inactivos':
                    require_once "controllers/PersonalInactivoController.php";
                    $ctrl = new PersonalInactivoController();
                    break;

                case 'modificar-personal':
                    require_once "controllers/ModificarPersonalController.php";
                    $ctrl = new ModificarPersonalController();
                    break;   
                
                case 'modificar-cliente':
                    require_once "controllers/ModificarClienteController.php";
                    $ctrl = new ModificarClienteController();
                    break;
                    
                case 'crear-visita':
                    require_once "controllers/VisitaController.php";
                    $ctrl = new VisitaController();
                    break;
    
                case 'listado-visita-cliente':
                    require_once "controllers/ListadoVisitaClienteController.php";
                    $ctrl = new ListadoVisitaClienteController();
                    break;

                case 'listado-visita-admin':
                    require_once "controllers/ListadoVisitaAdminController.php";
                    $ctrl = new ListadoVisitaAdminController();
                    break;

                case 'detalle-visita-profesional':
                    require_once "controllers/DetalleVisitaProfesionalController.php";
                    $ctrl = new DetalleVisitaProfesionalController();
                    break;

                case 'detalle-visita-admin':
                    require_once "controllers/DetalleVisitaAdminController.php";
                    $ctrl = new DetalleVisitaAdminController();
                    break;

                case 'crear-mejora':
                    require_once "controllers/CrearMejoraController.php";
                    $ctrl = new CrearMejoraController();
                    break;
    
                case 'listado-mejora':
                    require_once "controllers/ListadoMejoraController.php";
                    $ctrl = new ListadoMejoraController();
                    break;

                case 'detalle-mejora':
                    require_once "controllers/DetalleMejorasController.php";
                    $ctrl = new DetalleMejorasController();
                    break;

                case 'listado-mejora-admin':
                    require_once "controllers/ListadoMejoraAdminController.php";
                    $ctrl = new ListadoMejoraAdminController();
                    break;

                case 'detalle-mejoras-admin':
                    require_once "controllers/DetalleMejorasAdminController.php";
                    $ctrl = new DetalleMejorasAdminController();
                    break;

                case 'listado-check-mejora':
                    require_once "controllers/ListadoCheckMejoraController.php";
                    $ctrl = new ListadoCheckMejoraController();
                    break;

                case 'modificar-mejora':
                    require_once "controllers/ModificarMejoraController.php";
                    $ctrl = new ModificarMejoraController();
                    break;

                case 'check-list':
                    require_once "controllers/CheckListController.php";
                    $ctrl = new CheckListController();
                    break;
    
                case 'listado-check-list':
                    require_once "controllers/ListadoCheckListController.php";
                    $ctrl = new ListadoCheckListController();
                    break;

                case 'listado-check-list-admin':
                    require_once "controllers/ListadoCheckListAdminController.php";
                    $ctrl = new ListadoCheckListAdminController();
                    break;

                case 'detalle-check-list-admin':
                    require_once "controllers/DetalleCheckListAdminController.php";
                    $ctrl = new DetalleCheckListAdminController();
                    break;

                case 'detalle-check-list':
                    require_once "controllers/DetalleCheckListController.php";
                    $ctrl = new DetalleCheckListController();
                    break;

                case 'modificar-check-list':
                    require_once "controllers/ModificarCheckListController.php";
                    $ctrl = new ModificarCheckListController();
                    break;

                case 'listar-asesoria':
                    require_once "controllers/ListarAsesoriaController.php";
                    $ctrl = new ListarAsesoriaController();
                    break;
                    
                case 'listar-asesoria-admin':
                    require_once "controllers/ListadoAsesoriaAdminController.php";
                    $ctrl = new ListarAsesoriaAdminController();
                    break; 
        
                case 'respuesta-asesoria':
                    require_once "controllers/RespuestaAsesoriaController.php";
                    $ctrl = new RespuestaAsesoriaController();
                    break;  
                    
                case 'respuesta-asesoria-admin':
                    require_once "controllers/RespuestaAsesoriaAdminController.php";
                    $ctrl = new RespuestaAsesoriaAdminController();
                    break; 
                
                case 'crear-capacitacion':
                    require_once "controllers/CrearCapacitacionController.php";
                    $ctrl = new CrearCapacitacionController();
                    break; 

                case 'crear-capacitacioncs':
                    require_once "controllers/CrearCapacitacionCSController.php";
                    $ctrl = new CrearCapacitacionCSController();
                    break; 
                
                case 'listar-solicitud-capacitacion':
                    require_once "controllers/ListarSolicitudesCapacitacionesController.php";
                    $ctrl = new ListarSolicitudesCapacitacionesController();
                    break;
                
                case 'listar-capacitaciones':
                    require_once "controllers/ListarCapacitacionesController.php";
                    $ctrl = new ListarCapacitacionesController();
                    break;

                case 'listar-capacitaciones-total':
                    require_once "controllers/ListarCapacitacionesTotalController.php";
                    $ctrl = new ListarCapacitacionesTotalController();
                    break;

                case 'detalle-capacitaciones':
                    require_once "controllers/DetalleCapacitacionController.php";
                    $ctrl = new DetalleCapacitacionController();
                    break;
                    
                case 'modificar-capacitaciones':
                    require_once "controllers/ModificarCapactiacionController.php";
                    $ctrl = new ModificarCapactiacionController();
                    break;
                    
                case 'listar-accidentes':
                    require_once "controllers/ListadoAccidenteController.php";
                    $ctrl = new ListadoAccidenteController();
                    break;
                
                case 'listar-accidentes-detalle':
                    require_once "controllers/ListadoAccidenteDetalleController.php";
                    $ctrl = new ListadoAccidenteDetalleController();
                    break;

                case 'detalle-accidentes':
                    require_once "controllers/DetalleAccidenteController.php";
                    $ctrl = new DetalleAccidenteController();
                    break;

                case 'reportes-clientes':
                    require_once "controllers/ReportesClientesController.php";
                    $ctrl = new ReportesClientesController();
                    break;

                case 'reportes-globales':
                    require_once "controllers/ReportesGlobalesController.php";
                    $ctrl = new ReportesGlobalesController();
                    break;
                            
                case 'notificaciones':
                    require_once "controllers/NotificacionesController.php";
                    $ctrl = new NotificacionesController();
                    break;

                case 'contrato':
                    require_once "controllers/ContratoController.php";
                    $ctrl = new ContratoController();
                    break;
                
                case 'estado-pago':
                    require_once "controllers/ListadoPagoController.php";
                    $ctrl = new ListadoPagoController();
                    break;

                case 'listado-contrato':
                    require_once "controllers/ListadoContratosController.php";
                    $ctrl = new ListadoContratosController();
                    break;
                    
                case 'actualizar-contrato':
                    require_once "controllers/ActualizarContratoController.php";
                    $ctrl = new ActualizarContratoController();
                    break;

                case 'logout':
                    session_unset();
                    header("refresh: 1; url=index.php");
                    break;

                default :
                    require_once "controllers/HomeController.php";
                    $ctrl = new HomeController(); 
                    break;
                    
            }
                
        }
        
    
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


</body>
</html>