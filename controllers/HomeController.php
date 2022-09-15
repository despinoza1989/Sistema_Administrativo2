<?php

class HomeController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        //Llamar datos del modelo

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/carrusel/carrusel.php";
        require_once "views/layout/footer.php";
        
    }
}