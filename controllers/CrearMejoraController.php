<?php

class CrearMejoraController{
    function __construct(){
        //echo "esto funciona";

        $id_check_list = "";
    
        if(isset($_GET['id_check_list']) || !is_null($_GET['id_check_list'])){

            $id_check_list = $_GET['id_check_list'];

        }

        //Lo primero es llamar el modelo

        require_once "models/MejoraModel.php";
        $model_mejoras = new MejoraModel();
        require_once "models/AsignacionProfesionalModel.php";
        $model_asignacion = new AsignacionProfesionalModel();
        require_once "models/ClienteModel.php";
        $model_cliente = new ClienteModel();
        require_once "models/ChecklistModel.php";
        $model_check_list = new ChecklistModel();

        //Llamar datos del modelo
        $datos_cliente = $model_cliente->getAll();
        $datosusuario = $_SESSION['usuario'];
        $dato_asignacion = $model_asignacion->getAllByPersonal($datosusuario['id_personal']);
        $datos_check_list = $model_check_list->getByDetalleCheckList($id_check_list);

        if(isset($_POST["accion"])){
            $model_mejoras->create($_POST);            
            return;
        }

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/mejora/crear_mejora.php";
        require_once "views/layout/footer.php";

    }

}