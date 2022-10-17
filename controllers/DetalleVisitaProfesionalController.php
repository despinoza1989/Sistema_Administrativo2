<?php

class DetalleVisitaProfesionalController{
    function __construct(){
        //echo "esto funciona";
        $id_asignacion_profesional = "";

        //Lo primero es llamar el modelo


        require_once "models/VisitaTerrenoModel.php";
        $model_visita_terreno = new VisitaTerrenoModel();
        require_once "models/AsignacionProfesionalModel.php";
        $model_asignacion = new AsignacionProfesionalModel();
        require_once "models/PersonalModel.php";
        $model_personal = new PersonalModel();
        require_once "models/ClienteModel.php";
        $model_cliente = new ClienteModel(); 



        //Llamar datos del modelo
        $datosusuariocliente = $model_cliente->getAll();
        $datos_visita = $model_visita_terreno->getAll();
        $datosusuario = $_SESSION['usuario'];
        $dato_asignacion = $model_asignacion->getAllByVisita($datosusuario['id_personal']);
        
        

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/visita/detalle_visita_profesional.php";
        require_once "views/layout/footer.php";

    }

}