<div class="card-body" style="margin: 2em 5em;">
    <h1> Respuesta Asesoría </h1>
    <br>
    <br>
    <h2> Cliente Solicitante </h2>
    <br>
    <form id="reportar_asesoria" class="row g-3 needs-validation">

        <input type="hidden" id="id_solicitud_asesoria_ra" name="id_solicitud_asesoria_ra" value="<?php echo $datos_solicitud['id_solicitud_asesoria'] ?>">


        <div class="col-md-6">
            <label for="tipo_asesoria" class="form-label">Tipo de Asesoría</label>
            <input type="text" class="form-control" placeholder="" id="tipo_asesoria" name="tipo_asesoria" disabled required>
        </div>

        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <input type="text" class="form-control" placeholder="" id="rol_cliente" name="rol_cliente" disabled required>
        </div>
        
        <div class="col-md-6">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" placeholder="" id="razon_social_cliente" name="razon_social_cliente" disabled required>
        </div>

        <div class="col-md-6">
            <label for="telefono_cliente" class="form-label">Teléfono</label>
            <input type="text" class="form-control" placeholder="" id="telefono_cliente" name="telefono_cliente" disabled required>
        </div>

        <div class="col-md-6">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" placeholder="" id="direccion_cliente" name="direccion_cliente" disabled required>
        </div>

        <div class="col-md-6">
            <label for="email_cliente" class="form-label">Email</label>
            <div class="input-group mb-3"> 
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="" id="email_cliente" name="email_cliente" disabled required>
            </div>
        </div>

        <div class="col-md-12">
            <label for="detalle_asesoria" class="form-label">Detalle de la Asesoría</label>
            <textarea type="text" class="form-control" rows="10" cols="40" id="detalle_asesoria" name="detalle_asesoria" disabled></textarea>
            <div class="invalid-feedback">
            </div>
        </div>


        <div class="col-md-12">
            <label for="respuesta_asesoria" class="form-label">Respuesta de la Asesoría</label>
            <textarea type="text" class="form-control" rows="10" cols="40" id="respuesta_asesoria" name="respuesta_asesoria" placeholder="Detalle de la asesoría"></textarea>
            <div class="invalid-feedback">
            </div>
        </div>



        <br>
        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_personal_sa" name="id_personal_sa" value="<?php echo $datosusuario['id_personal'] ?>">
        <input type="hidden" id="nombre_personal" name="nombre_personal" value="<?php echo $datosusuario['nombre_personal'] ?>">
        <input type="hidden" id="apellidos_personal" name="apellidos_personal" value="<?php echo $datosusuario['apellidos_personal'] ?>">
        <input type="hidden" id="id_cliente_sa" name="id_cliente_sa" value="">

    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="respuestaAsesoria()">Enviar Respuesta</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
</div>


<script>

    (function(){

    document.getElementById('id_solicitud_asesoria_ra').addEventListener('change', onChangeAsesoria)
    document.getElementById('id_solicitud_asesoria_ra').value = document.getElementById('id_solicitud_asesoria_ra').value;
    
    onChangeAsesoria({})

    })()

    function onChangeAsesoria(event){

        var id_solicitud_asesoria= document.getElementById('id_solicitud_asesoria_ra').value;
        console.log(id_solicitud_asesoria)

        if(id_solicitud_asesoria && id_solicitud_asesoria>1){

            fetch("api.php/solicitud-asesoria/" + id_solicitud_asesoria, {
                method: "get"            
            }).then(response=>response.json())
            .then((datos)=>{

                console.dir(datos)
                document.getElementById('id_cliente_sa').value=datos.id_cliente_sa;
                document.getElementById('id_solicitud_asesoria_ra').value=datos.id_solicitud_asesoria;
                document.getElementById('tipo_asesoria').value=datos.tipo_asesoria;
                document.getElementById('rol_cliente').value=datos.rol_cliente;
                document.getElementById('razon_social_cliente').value=datos.razon_social_cliente;
                document.getElementById('telefono_cliente').value=datos.telefono_cliente;
                document.getElementById('direccion_cliente').value=datos.direccion_cliente;
                document.getElementById('email_cliente').value=datos.email_cliente;
                document.getElementById('detalle_asesoria').value=datos.detalle_asesoria;


            })

        }

    }

    function respuestaAsesoria(){
        var respuesta_asesoria=document.getElementById("respuesta_asesoria").value;
        console.log( respuesta_asesoria)

      
        if(respuesta_asesoria==undefined || respuesta_asesoria==null || respuesta_asesoria.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe de ingresar una respuesta a la asesoría',                
                })            
            return;

        }
        let request = {

            accion: 'crear',

            respuesta_asesorias: {

                respuesta_asesoria: respuesta_asesoria,
                id_solicitud_asesoria_ra:document.getElementById("id_solicitud_asesoria_ra").value,
                id_personal_sa:document.getElementById("id_personal_sa").value,

 
            },


        }

        let formulario = new FormData(document.getElementById("reportar_asesoria"))
        fetch('api.php/respuesta-asesoria', {
            method: "post",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(request)
        }).then(response=>response.json()).then((response) => {
            
            console.log(response)
            
            Swal.fire({
                title: 'Asesoria reportada exitosamente',
                showDenyButton: false,
                showCancelButton: false,
                confirmButtonText: 'Ok',
                }).then((result) => {
                    location.reload();
                })

            //Mensaje Cliente
            crearNotificacion("El Profesional " + document.getElementById('nombre_personal').value + " " + document.getElementById('apellidos_personal').value + " ha respondido su solicitud de asesoría " + document.getElementById('tipo_asesoria').value, 0, 1, document.getElementById('id_cliente_sa').value, response.id, "respuesta_asesoria")

            //Mensaje Administrativo
            fetch("api.php/personal_administrativo", {
                method: "get"
            }).then(response => response.json())
            .then((datos) => {


                for (const key in datos) {

                    crearNotificacion("El Profesional " + document.getElementById('nombre_personal').value + " " + document.getElementById('apellidos_personal').value + " ha respondido una solicitud de asesoría", 0, 0, datos[key].id_personal, response.id, "respuesta_asesoria")

                }

            })
   
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

