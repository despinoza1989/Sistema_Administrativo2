<?php

class PersonalController{

    public function index(){
        echo "Controlador Personal, Accion index";
    }

    public function registro(){
        require_once 'views/registros/registro_personal.php'
    }

    public function save(){
        
    }
}