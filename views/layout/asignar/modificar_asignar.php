<div class="card-body" style="margin: 2em 5em;">
    <h1> Modificar Asignación del Profesional a Cliente</h1>
    <br>
    <form id="modificar_asignar" class="row g-3 needs-validation" novalidate>
        <h2> Profesional </h2>
        <div class="col-md-6">
                       
            <label for="id_personal_ap" class="form-label">Rut</label>
            <select class="form-select" id="id_personal_ap" name="id_personal_ap"  required>
                <option selected disabled value="">Seleccione Rut del profesional</option>
                <?php foreach ($datos_personal as $row){ ?>
                    <option value="<?php echo $row["id_personal"] ?>"><?php echo $row["rut_personal"] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col-md-6">
            <label for="telefono_personal" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono_personal" disabled required>
        </div>
        <div class="col-md-3">
            <label for="nombre_personal" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre_personal" disabled required>
        </div>
        <div class="col-md-3">
            <label for="apellidos_personal" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos_personal" disabled required>
        </div>
        <div class="col-md-6">
            <label for="email_personal" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="email_personal" aria-describedby="inputGroupPrepend" disabled required>
            </div>
        </div>
        <div class="col-md-6">
            <label for="direccion_personal" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion_personal" disabled required>
        </div>
        <br><br><br><br>

        <h2> Cliente </h2>
        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <input type="text" class="form-control" id="rol_cliente" name="rol_cliente" value="<?php echo $datos['rol_cliente']?>" disabled required>
        </div>

        <div class="col-md-6">
            <label for="tipo_rubro" class="form-label">Rubro</label>
            <input type="text" class="form-control" id="tipo_rubro" name="tipo_rubro" value="<?php echo $datos['tipo_rubro']?>"  disabled required>
        </div>

        <div class="col-md-6">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente" value="<?php echo $datos['razon_social_cliente']?>"  disabled  required>
        </div>

        <div class="col-md-6">
            <label for="email_cliente" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="email_cliente" name="email_cliente" aria-describedby="inputGroupPrepend"  value="<?php echo $datos['email_cliente']?>" disabled required>
            </div>
        </div>    

        <div class="col-md-6">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" value="<?php echo $datos['direccion_cliente']?>"  disabled required>
        </div>

        <div class="col-md-3">
            <label for="telefono_cliente" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente"  value="<?php echo $datos['telefono_cliente']?>"  disabled required>
        </div>

        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_cliente_ap" name="id_cliente_ap" value="<?php echo $datos['id_cliente_ap']?>">
        <input type="hidden" id="id_personal" name="id_personal" value="<?php echo $datos['id_personal_ap'] ?>">
        <input type="hidden" id="id_asignacion_profesional" name="id_asignacion_profesional" value="<?php echo $datos['id_asignacion_profesional']?>">
    
    </form>
    <br><br><br>


    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="modificarProfesional()">Reasignar</button>
    </div>
</div>

<script>

    (function(){

    document.getElementById('rol_cliente').addEventListener('change', onChangeRol)

    })()

    function onChangeRol(event){

        var id_cliente= document.getElementById('rol_cliente').value;

        if(id_cliente && id_cliente>0){

            fetch("api.php/cliente/" + id_cliente, {
                method: "get"            
            }).then(response=>response.json())
            .then((datos)=>{

                console.dir(datos)

                document.getElementById('id_cliente_ap').value=datos.id_cliente;
                document.getElementById('tipo_rubro').value=datos.tipo_rubro;
                document.getElementById('razon_social_cliente').value=datos.razon_social_cliente;
                document.getElementById('telefono_cliente').value=datos.telefono_cliente;
                document.getElementById('direccion_cliente').value=datos.direccion_cliente;
                document.getElementById('email_cliente').value=datos.email_cliente;

            })

        }

    }


    (function(){


    document.getElementById('id_personal_ap').addEventListener('change', onChangeRut);
    document.getElementById('id_personal_ap').value = document.getElementById('id_personal').value;

    onChangeRut({})

    })()

    function onChangeRut(event){

        var id_personal= document.getElementById('id_personal_ap').value;
        //var id_personal= document.getElementById('rut_personal').value;

        if(id_personal && id_personal>1){

            fetch("api.php/personal/" + id_personal, {
                method: "get"            
            }).then(response=>response.json())
            .then((datos)=>{

                console.log(datos, "Datos Que trae")

                document.getElementById('id_personal_ap').value=datos.id_personal;
                document.getElementById('telefono_personal').value=datos.telefono_personal;
                document.getElementById('nombre_personal').value=datos.nombre_personal;
                document.getElementById('apellidos_personal').value=datos.apellidos_personal;
                document.getElementById('email_personal').value=datos.email_personal;
                document.getElementById('direccion_personal').value=datos.direccion_personal;

            })
        }
    }

    function modificarProfesional(){

        var id_personal_ap=document.getElementById("id_personal_ap").value;

        if(id_personal_ap==undefined || id_personal_ap==null || id_personal_ap.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe seleccionar el Rut del Profesional',                
                })            
            return;

        }


        var datos_formulario = {

            id_personal_ap:document.getElementById('id_personal_ap').value,
            id_asignacion_profesional:document.getElementById('id_asignacion_profesional').value

        }

        console.log(datos_formulario, "datos formulario")
        //return

        let formulario = new FormData(document.getElementById("modificar_asignar"))
            console.dir(formulario.values(), "Formulario")
            console.log(id_personal_ap, "ID PERSONAL")
        fetch('api.php/asignacion-profesional', {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(datos_formulario)
        }).then((response) => {
            
            Swal.fire({
                title: 'Modificacion realizada exitosamente',
                showDenyButton: false,
                showCancelButton: false,
                confirmButtonText: 'Ok',
            }).then((result) => {
                //location.reload();
            })
            //Mensaje Cliente
            crearNotificacion("Se actualizo el Profesional asignado, el nuevo profesional es " + document.getElementById('nombre_personal').value + " " + document.getElementById('apellidos_personal').value, 0, 1, document.getElementById('id_cliente_ap').value, document.getElementById('id_personal_ap').value, "modificar_asignar")
            
            //Mensaje Profesional 
            crearNotificacion("Se le ha asignado al Cliente " + document.getElementById('razon_social_cliente').value, 0, 0, document.getElementById('id_personal_ap').value, document.getElementById('id_cliente_ap').value, "modificar_asignar")
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