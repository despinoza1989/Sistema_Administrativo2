<?php

class ListarAsesoriaAdminController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo


        require_once "models/SolicitudAsesoriaModel.php";
        $model_asesoria = new SolicitudAsesoriaModel();


        //$model = new ClienteModel();

        //Llamar datos del modelo

        $datosusuario = $_SESSION['usuario'];
        $datos_asesoria = $model_asesoria->getByListadoAdmin();
        //$datos = $model->getAllBy();
        

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/asesoria/listado_asesorias_admin.php";
        require_once "views/layout/footer.php";

    }

    public function registropersonal(){

        //Llamar models del Personal
        
        require_once "models/AutentificacionModel.php";
   
    }

}