<?php

class ListadoVisitaAdminController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo


        require_once "models/VisitaTerrenoModel.php";
        $model_visita_terreno = new VisitaTerrenoModel();
        require_once "models/AsignacionProfesionalModel.php";
        $model_asignacion = new AsignacionProfesionalModel();
        require_once "models/PersonalModel.php";
        $model_personal = new PersonalModel();



        //Llamar datos del modelo

        $datos_visita = $model_visita_terreno->getAll();
        $datosusuario = $_SESSION['usuario'];
        $dato_asignacion = $model_visita_terreno->getAll();

        

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/visita/lista_visita_admin.php";
        require_once "views/layout/footer.php";

    }

}