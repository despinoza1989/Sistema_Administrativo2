<?php

class ListadoAsignacionProfesionalController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo
        
        require_once "models/AsignacionProfesionalModel.php";
        $model_asignacion = new AsignacionProfesionalModel();


        //Llamar datos del modelo
        $datosusuario = $_SESSION['usuario'];
        $datos_asignación = $model_asignacion->getAllByPersonal($datosusuario['id_personal']);

        /*if(isset($_POST["accion"])){
            $model_asignacion->create($_POST);            
            return;
        }*/

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/listar/asignacion_profesional_profesional.php";
        require_once "views/layout/footer.php";
        
    }

}