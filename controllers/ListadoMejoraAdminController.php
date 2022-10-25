<?php

class ListadoMejoraAdminController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/MejoraModel.php";
        $model_mejoras = new MejoraModel();
    

        //Llamar datos del modelo

        $datos_mejora = $model_mejoras->getAll();

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/mejora/listado_mejora_admin.php";
        require_once "views/layout/footer.php";

    }

}