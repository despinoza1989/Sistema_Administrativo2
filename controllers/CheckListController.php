<?php

class CheckListController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/ChecklistModel.php";
        $model_check_list = new ChecklistModel();
        /*require_once "models/ClienteModel.php";
        $model_cliente = new ClienteModel();
        require_once "models/PersonalModel.php";
        $model_personal = new PersonalModel();*/
        require_once "models/AsignacionProfesionalModel.php";
        $model_asignacion = new AsignacionProfesionalModel();

        //Llamar datos del modelo

        if(isset($_POST["accion"])){
            $model_check_list->create($_POST);            
            return;
        }

        $datosusuario = $_SESSION['usuario'];
        //$datos_cliente = $model_cliente->getAll();
        $dato_asignacion = $model_asignacion->getAllByPersonal($datosusuario['id_personal']);


        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/checklist/check_list.php";
        require_once "views/layout/footer.php";

    }

}