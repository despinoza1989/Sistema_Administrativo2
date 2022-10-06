<?php

class AsignarProfesionalController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo
        
        /*require_once "model/AsignacionProfesionalModel.php";
        $model_asignacion = new AsignacionProfesionalModel();
        require_once "model/ClienteModel.php";
        $model_cliente = new ClienteModel();
        require_once "models/PersonalModel.php";
        $model_personal = new PersonalModel;

        //Llamar datos del modelo

        if(isset($_POST["accion"])){
            $model_personal->create($_POST);            
            return;
        }*/

        //Llamar a la vista 

        require_once "views/layout/asignar/asignar_profesiona.php";

    }

    public function registroasignar(){

        //Llamar models del Personal
        
        require_once "models/AutentificacionModel.php";
   
    }

}