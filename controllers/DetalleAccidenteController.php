<?php

class DetalleAccidenteController{
    function __construct(){
        //echo "esto funciona";

        $id_reporte_accidente = "";

        if(isset($_GET['id_reporte_accidente']) || !is_null($_GET['id_reporte_accidente'])){

            $id_reporte_accidente = $_GET['id_reporte_accidente'];

        }
        //Lo primero es llamar el modelo

        require_once "models/ReporteAccidenteModel.php";
        $model = new ReporteAccidenteModel();


        //Llamar datos del modelo

        $datos = $model->getById($id_reporte_accidente); 

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/accidente/detalle_accidente.php";
        require_once "views/layout/footer.php";
        
    }

}