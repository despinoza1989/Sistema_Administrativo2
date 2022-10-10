<?php

class ModificarAsignacionController{
    function __construct(){
        //echo "esto funciona";
        $id_asignacion_profesional = "";

        if(isset($_GET['id_asignacion_profesional']) || !is_null($_GET['id_asignacion_profesional'])){

            $id_asignacion_profesional = $_GET['id_asignacion_profesional'];

        }

        //Lo primero es llamar el modelo
        
        require_once "models/AsignacionProfesionalModel.php";
        $model_asignacion = new AsignacionProfesionalModel();
        require_once "models/PersonalModel.php";
        $model_personal = new PersonalModel;


        //var_dump($_POST);

        if(isset($_POST["accion"])){

            $model_asignacion->update($_POST);
                        
            return;
        }

        //Llamar datos del modelo

        $datos_personal = $model_personal->getProfesionalAll(1);
        $datos = $model_asignacion->getById($id_asignacion_profesional);



        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/asignar/modificar_asignar.php";
        require_once "views/layout/footer.php";
        
    }

}