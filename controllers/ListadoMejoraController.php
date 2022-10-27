<?php

class ListadoMejoraController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/MejoraModel.php";
        $model_mejoras = new MejoraModel();
        require_once "models/AsignacionProfesionalModel.php";
        $model_asignacion = new AsignacionProfesionalModel();

    

        //Llamar datos del modelo
        $datosusuario = $_SESSION['usuario'];
        $datos_mejora = $model_mejoras->getByListado($datosusuario['id_personal']);

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/mejora/listado_mejora.php";
        require_once "views/layout/footer.php";

    }

}