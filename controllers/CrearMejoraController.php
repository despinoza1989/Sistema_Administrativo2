<?php

class CrearMejoraController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/MejoraModel.php";
        $model_mejoras = new MejoraModel();

        //Llamar datos del modelo

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