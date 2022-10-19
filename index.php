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

                case 'modificar-asignaciones':
                    require_once "controllers/ModificarAsignacionController.php";
                    $ctrl = new ModificarAsignacionController();
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

                case 'detalle-visita-profesional':
                    require_once "controllers/DetalleVisitaProfesionalController.php";
                    $ctrl = new DetalleVisitaProfesionalController();
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

                case 'check-list':
                    require_once "controllers/CheckListController.php";
                    $ctrl = new CheckListController();
                    break;
    
                case 'listado-check-list':
                    require_once "controllers/ListadoCheckListController.php";
                    $ctrl = new ListadoCheckListController();
                    break;

                case 'listar-asesoria':
                    require_once "controllers/ListarAsesoriaController.php";
                    $ctrl = new ListarAsesoriaController();
                    break;  
        
                case 'respuesta-asesoria':
                    require_once "controllers/RespuestaAsesoriaController.php";
                    $ctrl = new RespuestaAsesoriaController();
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
                        
                case 'listar-pagos':
                    require_once "controllers/ListarCapacitacionesController.php";
                    $ctrl = new ListarCapacitacionesController();
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