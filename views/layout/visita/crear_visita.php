<div class="card-body" style="margin: 2em 5em;">
    <h1> Agendar Visita en Terreno</h1>
    <br>
    <br>
    <h2> Profesional a Cargo</h2>
    <br>
    <form id="crear_visita" class="row g-3 needs-validation">
        <div class="col-md-6">
            <label for="rut_personal" class="form-label">Rut</label>
            <input type="text" class="form-control" id="rut_personal" name="rut_personal" value="<?php echo $datosusuario['rut_personal']?>" disabled required>
        </div>
        <div class="col-md-3">
            <label for="nombre_personal" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre_personal" name="nombre_personal" value="<?php echo $datosusuario['nombre_personal']?>" disabled required>
            <div class="valid-feedback">
                Favor de introducir un nombre Valido
            </div>
        </div>
        <div class="col-md-3">
            <label for="apellidos_personal" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos_personal" name="apellidos_personal" value="<?php echo $datosusuario['apellidos_personal']?>" disabled required>
            <div class="valid-feedback">
                Favor de introducir un apellido Valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="telefono_personal" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono_personal" name="telefono_personal" value="<?php echo $datosusuario['apellidos_personal']?>" disabled required>
            <div class="invalid-feedback">
                Favor de introducir un telefono valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="email_personal" class="form-label">Correo</label>
            <input type="text" class="form-control" id="email_personal" name="email_personal" change="onChangeRol" value="<?php echo $datosusuario['email_personal']?>" disabled required>
            <div class="invalid-feedback">
                Favor de introducir un correo Valido
            </div>
        </div>
        <br>
        <br>
        <h2>Selección de Cliente</h2>
        <br>

        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <select class="form-select" id="rol_cliente" name="rol_cliente"  required>
                <option selected disabled value="">Seleccione Rol</option>
                <?php foreach ($dato_asignacion as $row){ ?>
                    <option value="<?php echo $row["id_asignacion_profesional"] ?>"><?php echo $row["rol_cliente"] ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="col-md-6">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente" disabled required>
            <div class="invalid-feedback">
                Favor de escoger una opcion valida
            </div>
        </div>
        <div class="col-md-6">
            <label for="telefono_cliente" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" disabled required>
            <div class="invalid-feedback">
                Favor de introducir un telefono Valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" disabled required>
            <div class="invalid-feedback">
                Favor de introducir una direccion Valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="email_cliente" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="email_cliente" name="email_cliente" aria-describedby="inputGroupPrepend" disabled required>
                <div class="invalid-feedback">
                </div>
            </div> 
        </div>
        <div class="col-md-6">
            <label for="fecha_visita" class="form-label">Fecha Visita</label>
            <input type="datetime-local" class="form-control" id="fecha_visita" name="fecha_visita" required>
            <div class="invalid-feedback">
                Favor de introducir una fecha valida
            </div>
        </div>
        <div class="col-md-6">
            <label for="motivo_visita" class="form-label">Motivo Visita</label>
            <textarea type="text" class="form-control" rows="10" cols="40" id="motivo_visita" name="motivo_visita" placeholder="Escribe el motivo de la visita.."></textarea>
            <div class="invalid-feedback">
            </div>
        </div>

        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_personal_vt" name="id_personal_vt" value="<?php echo $datosusuario['id_personal']?>">
        <input type="hidden" id="id_cliente_vt" name="id_cliente_vt" value="">      
 

    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="crearVisita()">Agendar Visita</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
</div>

<script>

    (function(){

    document.getElementById('rol_cliente').addEventListener('change', onChangeRol)

    /*document.getElementById('rol_cliente').addEventListener('change', onChangeRol)
    document.getElementById('rol_cliente').value = document.getElementById('rol_cliente').value;*/
        
    //onChangeRol({})
    })()

    function onChangeRol(event){

    var id_cliente= document.getElementById('rol_cliente').value;

        if(id_cliente && id_cliente>0){

            fetch("api.php/asignacion-profesional/" + id_cliente, {
                method: "get"            
            }).then(response=>response.json())
            .then((datos)=>{

                console.dir(datos)

                document.getElementById('id_cliente_vt').value=datos.id_cliente_ap;
                document.getElementById('razon_social_cliente').value=datos.razon_social_cliente;
                document.getElementById('telefono_cliente').value=datos.telefono_cliente;
                document.getElementById('direccion_cliente').value=datos.direccion_cliente;
                document.getElementById('email_cliente').value=datos.email_cliente;

            })

        }

    }

    function crearVisita(){
        var fecha_visita=document.getElementById("fecha_visita").value;
        var motivo_visita=document.getElementById("motivo_visita").value;


      
        if(fecha_visita==undefined || fecha_visita==null || fecha_visita.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Se debe ingresar una fecha valida',                
                })            
            return;

        }

        var fecha = new Date(fecha_visita);
        var ahora = new Date();
        var dias_milisegundos = fecha.getTime() - ahora.getTime();
        var dias_diferencia = dias_milisegundos/(1000*60*60*24)

        console.log(ahora, 'Fecha Ahora')
        console.log(fecha_visita, 'check')
        console.log(dias_milisegundos, 'diferencia milisegundos')
        console.log(dias_diferencia, 'diferencia dias')

        if(dias_diferencia<15){
          Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'La fecha debe ser mayor o igual a 15 días',                
                })            
            return;
        }

        if(motivo_visita==undefined || motivo_visita==null || motivo_visita.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Se debe ingresar un motivo de la visita',                
                })            
            return;

        }



        let formulario = new FormData(document.getElementById("crear_visita"))
        fetch('index.php?view=crear-visita', {
            method: "post",
            body: formulario
        }).then((response) => {
            
            Swal.fire({
                title: 'Visita en Terreno solicitada exitosamente',
                showDenyButton: false,
                showCancelButton: false,
                confirmButtonText: 'Ok',
            
            }).then((result) => {
                    location.reload();
            })

            //Mensaje Cliente
            crearNotificacion("Se ah generado una visita en terreno", 0, 1, document.getElementById('id_cliente_vt').value, 0, "crear_visita")

            //Mensaje Administrativo
            fetch("api.php/personal_administrativo", {
                method: "get"
            }).then(response => response.json())
            .then((datos) => {

                console.dir(datos)
                
                for (const key in datos) {

                    crearNotificacion("El Profesional a generado una visita en terreno", 0, 0, datos[key].id_personal, 0, "crear_visita")

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
