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