<?php

class RespuestaAsesoriaController{
    function __construct(){
        //echo "esto funciona";
        $id_solicitud_asesoria = "";

        if(isset($_GET['id_solicitud_asesoria']) || !is_null($_GET['id_solicitud_asesoria'])){

            $id_solicitud_asesoria = $_GET['id_solicitud_asesoria'];

        }

        //Lo primero es llamar el modelo

        require_once "models/SolicitudAsesoriaModel.php";
        $model_solicitud = new SolicitudAsesoriaModel();
        require_once "models/RespuestaAsesoriaModel.php";
        $model_resp_asesoria = new RespuestaAsesoriaModel();
    

        //Llamar datos del modelo

        if(isset($_POST["accion"])){
            $model_resp_asesoria->create($_POST);            
            return;
        }

        //$datosusuariocliente = $_SESSION['usuarioCliente'];
        
        $datosusuario = $_SESSION['usuario'];
        $datos_solicitud = $model_solicitud->getById($id_solicitud_asesoria);

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/asesoria/respuesta_asesoria.php";
        require_once "views/layout/footer.php";

    }



}