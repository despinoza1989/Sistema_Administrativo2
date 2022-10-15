<?php

class VisitaController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/PersonalModel.php";
        $model_personal = new PersonalModel();
        require_once "models/ClienteModel.php";
        $model_cliente = new ClienteModel();
        require_once "models/VisitaTerrenoModel.php";
        $model_visita = new VisitaTerrenoModel();
        require_once "models/AsignacionProfesionalModel.php";
        $model_asignacion = new AsignacionProfesionalModel();

        //Llamar datos del modelo

        $datos_personal = $model_personal->getAll();
        $datos_cliente = $model_cliente->getAll();
        $datos_visita = $model_visita->getAll();
        $datosusuario = $_SESSION['usuario'];
        $dato_asignacion = $model_asignacion->getAllByPersonal($datosusuario['id_personal']);

        if(isset($_POST["accion"])){
            $model_visita->create($_POST);            
            return;
        }
        
        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/visita/crear_visita.php";
        require_once "views/layout/footer.php";

    }

}