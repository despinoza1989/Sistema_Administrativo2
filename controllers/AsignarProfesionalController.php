<?php

class AsignarProfesionalController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo
        
        require_once "models/AsignacionProfesionalModel.php";
        $model_asignacion = new AsignacionProfesionalModel();
        require_once "models/ClienteModel.php";
        $model_cliente = new ClienteModel();
        require_once "models/PersonalModel.php";
        $model_personal = new PersonalModel;

        //Llamar datos del modelo

        $datos_personal = $model_personal->getProfesionalAll(1);
        $datos_cliente = $model_cliente->getAll();

        if(isset($_POST["accion"])){
            $model_asignacion->create($_POST);            
            return;
        }

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/asignar/asignar_profesiona.php";
        require_once "views/layout/footer.php";
        
    }

}