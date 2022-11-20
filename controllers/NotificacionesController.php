<?php

class NotificacionesController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo
        
        require_once "models/NotificacionModel.php";
        $model = new NotificacionModel();

        //Llamar datos del modelo

        $datosusuario = $_SESSION['usuario'];
        $datos = $model->getByUser($datosusuario['id_personal']); 

        
        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/notificaciones.php";
        require_once "views/layout/footer.php";

    }

    function getTitulo($tipo_notificacion){
        if($tipo_notificacion == 'reporte_accidente'){
            return 'Reporte de Accidente';
        }elseif ($tipo_notificacion == 'solicitar_asesoria') {
            return 'Solicitud de Asesoría';
        }elseif ($tipo_notificacion == 'respuesta_asesoria') {
            return 'Respuesta de Asesoría';
        }elseif ($tipo_notificacion == 'asignar_profesional') {
            return 'Asignación Realizada';
        }elseif ($tipo_notificacion == 'modificar_asignar') {
            return 'Asignación Modificada';            
        }elseif ($tipo_notificacion == 'crear_capacitacion') {
            return 'Capacitación Creada';
        }elseif ($tipo_notificacion == 'crear_capacitacion_s') {
            return 'Respuesta Solicitud Capacitación';
        }elseif ($tipo_notificacion == 'modificar_capacitacion') {
            return 'Capacitación Modificada';            
        }elseif ($tipo_notificacion == 'solicitar_capacitacion') {
            return 'Solicitud de Capacitación';
        }elseif ($tipo_notificacion == 'crear_checklist') {
            return 'Check-List Creado';
        }elseif ($tipo_notificacion == 'modificar_checklist') {
            return 'Check-List Modificado';
        }elseif ($tipo_notificacion == 'crear_visita') {
            return 'Visita en Terreno';
        }else{
            return 'Desconocido';
        }
    }
}

