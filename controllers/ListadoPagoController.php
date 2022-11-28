<?php

class ListadoPagoController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo


        require_once "models/PagoServicioModel.php";
        $model_pago = new PagoServicioModel();

        //Llamar datos del modelo

        $datos_pago = $model_pago->getAll();


        

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/contrato/listado_pago.php";
        require_once "views/layout/footer.php";

    }

}