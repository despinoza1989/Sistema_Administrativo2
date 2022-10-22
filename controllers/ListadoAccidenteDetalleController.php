<?php

class ListadoAccidenteDetalleController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/ReporteAccidenteModel.php";
        $model = new ReporteAccidenteModel();

        //Llamar datos del modelo
        
        $datosusuario = $_SESSION['usuario'];
        //$datos = $model->getAll(); 
        $datos = $model->getByIdCliente($datosusuario['id_personal']); 
        
        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/accidente/listado_accidente_detalle.php";
        require_once "views/layout/footer.php";

    }

}