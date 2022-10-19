<?php

class DetalleVisitaProfesionalController{
    function __construct(){
        //echo "esto funciona";
        $id_visita_terreno = "";

        if(isset($_GET['id_visita_terreno']) || !is_null($_GET['id_visita_terreno'])){

            $id_visita_terreno = $_GET['id_visita_terreno'];

        }

        //Lo primero es llamar el modelo


        require_once "models/VisitaTerrenoModel.php";
        $model_visita = new VisitaTerrenoModel();
        
        require_once "models/PersonalModel.php";
        $model_personal = new PersonalModel();
        require_once "models/ClienteModel.php";
        $model_cliente = new ClienteModel(); 



        //Llamar datos del modelo
        

        $datosusuario = $_SESSION['usuario'];
        $datos_visita = $model_visita->getById($id_visita_terreno);
        
        

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/visita/detalle_visita_profesional.php";
        require_once "views/layout/footer.php";

    }

}