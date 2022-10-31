<?php

class ListarCapacitacionesController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo


        require_once "models/CrearCapacitacionModel.php";
        $model_capacitacion = new CrearCapacitacionModel();
        require_once "models/ClienteModel.php";
        $model_cliente = new ClienteModel();


        //$model = new ClienteModel();

        //Llamar datos del modelo

        //$datos_capacitaciones = $model_capacitacion->getAllByCapacitacion();
        $datos_cliente = $model_cliente->getAll();
        $datosusuario = $_SESSION['usuario'];
        $datos_capacitaciones = $model_capacitacion->getAllByCapacitacion($datosusuario['id_personal']);

        //$datos = $model->getAllBy();
        

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/capacitacion/listado_capacitaciones.php";
        require_once "views/layout/footer.php";

    }

}