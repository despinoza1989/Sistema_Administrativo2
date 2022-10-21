<?php

class ListadoAccidenteController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/ReporteAccidenteModel.php";
        $model = new ReporteAccidenteModel();

        //Llamar datos del modelo
        
        //$datosusuariocliente = $_SESSION['usuarioCliente'];
        $datos = $model->getAll(); 
        //$datos = $model->getByIdCliente($datosusuariocliente['id_cliente']); 
        
        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/accidente/listado_accidente.php";
        require_once "views/layout/footer.php";

    }

}