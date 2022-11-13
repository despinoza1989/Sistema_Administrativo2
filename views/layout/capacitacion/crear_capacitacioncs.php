<div class="card-body" style="margin: 2em 5em;">
    <h1> Detalle de Capacitación </h1>
    <br>
    <br>
    <h2> Profesional </h2>
    <br>
    <form id="crear_capacitacion" class="row g-3 needs-validation">

        <input type="hidden" id="id_solicitud_capacitacion" name="id_solicitud_capacitacion" value="<?php echo $datos_solicitud_capacitacion['id_solicitud_capacitacion'] ?>">

        
        <div class="col-md-6">
            <label for="rut_personal" class="form-label">Rut</label>
            <input type="text" class="form-control" id="rut_personal" name="rut_personal" value="<?php echo $datosusuario['rut_personal'] ?>" disabled required>
        </div>
        <div class="col-md-6">
            <label for="nombre_personal" class="form-label">Nombre Personal</label>
            <input type="text" class="form-control" id="nombre_personal" name="nombre_personal" value="<?php echo $datosusuario['nombre_personal'] ?>" disabled required>
        </div>
        <div class="col-md-6">
            <label for="apellidos_personal" class="form-label">Apellido Personal</label>
            <input type="text" class="form-control" id="apellidos_personal" name="apellidos_personal" value="<?php echo $datosusuario['apellidos_personal'] ?>" disabled required>
        </div>
        <div class="col-md-6">
            <label for="telefono_personal" class="form-label">Teléfono Personal</label>
            <input type="text" class="form-control" id="telefono_personal" name="telefono_personal" value="<?php echo $datosusuario['telefono_personal'] ?>" disabled required>
        </div>

        <div class="col-md-6">
            <label for="email_personal" class="form-label">Email Personal</label>
            <input type="text" class="form-control" id="email_personal" name="email_personal" value="<?php echo $datosusuario['email_personal'] ?>" disabled required>
        </div>

        <br><br>

        <h2>Datos de Capacitación</h2>

        <div class="col-md-6">
            <label for="nombre_solicitud_capacitacion" class="form-label">Nombre Capacitación Solicitada</label>
            <input type="text" class="form-control" id="nombre_solicitud_capacitacion" name="nombre_solicitud_capacitacion" disabled required>
        </div>
        <div class="col-md-6">
            <label for="fecha_solicitud_capacitacion" class="form-label">Fecha a Realizar Capacitación</label>
            <input type="date" class="form-control" id="fecha_solicitud_capacitacion" name="fecha_solicitud_capacitacion"  disabled required>
        </div>
        <div class="col-md-6">
            <label for="link_capacitacion" class="form-label">URL de Capacitación a Realizar</label>
            <div class="input-group has-validation">
                <span class="input-group-text" >https://nma.com/drive</span>
                <input type="text" class="form-control" id="link_capacitacion" name="link_capacitacion" aria-describedby="link_capacitacion" >
            </div>
        </div>
        <div class="col-md-6">
            <label for="tipo_personal_capacitacion" class="form-label">Tipo Personal a Capacitar</label>
            <input type="text" class="form-control" id="tipo_personal_capacitacion" name="tipo_personal_capacitacion" disabled required>
        </div>

        <br>
        <br>
        <h2>Cliente a Capacitar</h2>
        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <input type="text" class="form-control" id="rol_cliente" name="rol_cliente" disabled required>
        </div>
        <div class="col-md-6">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente" disabled required>
        </div>
        <div class="col-md-6">
            <label for="telefono_cliente" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" disabled required>
        </div>
        <div class="col-md-6">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" disabled required>
        </div>
        <div class="col-md-6">
            <label for="email_cliente" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="email_cliente" name="email_cliente" aria-describedby="inputGroupPrepend" disabled required>
            </div>
        </div>


        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_tipo_personal_capacitacion_cc" name="id_tipo_personal_capacitacion_cc" value="<?php echo $datos_solicitud_capacitacion['id_tipo_personal_s'] ?>">
        <input type="hidden" id="id_personal_cc" name="id_personal_cc" value="<?php echo $datosusuario['id_personal'] ?>">
        <input type="hidden" id="nombre_capacitacion" name="nombre_capacitacion" value="<?php echo $datos_solicitud_capacitacion['nombre_solicitud_capacitacion'] ?>">
        <input type="hidden" id="fecha_capacitacion" name="fecha_capacitacion" value="<?php echo $datos_solicitud_capacitacion['fecha_solicitud_capacitacion'] ?>">
        <input type="hidden" id="id_cliente_s" name="id_cliente_s" value="">
           
    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="crearCapacitacion()">Crear Capacitacion</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
</div>
<script>

    (function(){

    document.getElementById('id_solicitud_capacitacion').addEventListener('change', onChangeSolicitudCapacitacion)
    document.getElementById('id_solicitud_capacitacion').value = document.getElementById('id_solicitud_capacitacion').value;
        
    onChangeSolicitudCapacitacion({})
    })()

    function onChangeSolicitudCapacitacion(event){

    var id_solicitud_capacitacion= document.getElementById('id_solicitud_capacitacion').value;

        if(id_solicitud_capacitacion && id_solicitud_capacitacion>0){

            fetch("api.php/solicitud-capacitacion/" + id_solicitud_capacitacion, {
                method: "get"            
            }).then(response=>response.json())
            .then((datos)=>{

                console.dir(datos)
                document.getElementById('id_cliente_s').value=datos.id_cliente_s;
                document.getElementById('nombre_solicitud_capacitacion').value=datos.nombre_solicitud_capacitacion;
                document.getElementById('fecha_solicitud_capacitacion').value=datos.fecha_solicitud_capacitacion;
                document.getElementById('tipo_personal_capacitacion').value=datos.tipo_personal_capacitacion;  
                document.getElementById('rol_cliente').value=datos.rol_cliente;
                document.getElementById('razon_social_cliente').value=datos.razon_social_cliente;
                document.getElementById('telefono_cliente').value=datos.telefono_cliente;
                document.getElementById('direccion_cliente').value=datos.direccion_cliente;
                document.getElementById('email_cliente').value=datos.email_cliente;
            })

        }

    }

    function crearCapacitacion() {

        var nombre_capacitacion = document.getElementById("nombre_capacitacion").value;
        var fecha_capacitacion = document.getElementById("fecha_capacitacion").value;
        var link_capacitacion = document.getElementById("link_capacitacion").value;
        var id_tipo_personal_capacitacion_cc = document.getElementById("id_tipo_personal_capacitacion_cc").value;

        console.log(nombre_capacitacion, fecha_capacitacion, link_capacitacion, id_tipo_personal_capacitacion_cc)



        if (link_capacitacion == undefined || link_capacitacion == null || link_capacitacion.trim() == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar un link de capacitación',
            })
            return;

        }


        let formulario = new FormData(document.getElementById("crear_capacitacion"))
        fetch('index.php?view=crear-capacitacion', {
            method: "post",
            body: formulario
        }).then((response) => {

            Swal.fire({
                title: 'Capacitacion creada exitosamente',
                showDenyButton: false,
                showCancelButton: false,
                confirmButtonText: 'Ok',
            }).then((result) => {
                location.reload();
            })

            //Mensaje Cliente
            crearNotificacion("Se le ah generado una capacitación por su solicitud", 0, 1, document.getElementById('id_cliente_s').value, 0, "crear_capacitacion_s")

            //Mensaje Administrativo
            fetch("api.php/personal_administrativo", {
                method: "get"
            }).then(response => response.json())
            .then((datos) => {

                console.dir(datos)
                
                for (const key in datos) {

                    crearNotificacion("El Profesional a respondido una solicitud de capacitación", 0, 0, datos[key].id_personal, 0, "crear_capacitacion_s")

                }

            })
            /*acciones a realizar*/
        }).then((data) => {
            /*mas acciones a realizar*/
        })
    }

    function crearNotificacion(mensaje_notificacion, estado_notificacion, is_cliente, custom_user_id, custom_option_id, tipo_notificacion){
        
        var request = {

            mensaje_notificacion: mensaje_notificacion,
            estado_notificacion: estado_notificacion,
            is_cliente: is_cliente,
            custom_user_id: custom_user_id,
            custom_option_id: custom_option_id,
            tipo_notificacion: tipo_notificacion

        }

        fetch('api.php/notificaciones', {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(request)
        }).then((response) => {
            
            console.log(response)
            /*acciones a realizar*/     
        }).then((data) => {
            /*mas acciones a realizar*/
        })
    }
</script>
