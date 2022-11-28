<?php

class ListarAsesoriaAdminController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo


        require_once "models/RespuestaAsesoriaModel.php";
        $model_respuesta = new RespuestaAsesoriaModel();


        //$model = new ClienteModel();

        //Llamar datos del modelo

        $datos_asesoria = $model_respuesta->getAll();
        //$datos = $model->getAllBy();
        

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/asesoria/listado_asesorias_admin.php";
        require_once "views/layout/footer.php";

    }



}