<div class="card-body" style="margin: 2em 5em;">
    <h2> Datos del Personal </h2>
    <br>
    <form id="modificar_personal" class="row g-3 needs-validation">

        <input type="hidden" id="id_personal" name="id_personal" value="<?php echo $datos_personal['id_personal'] ?>">

        <div class="col-md-6">
            <label for="rut_personal" class="form-label">Rut</label>
            <input type="text" class="form-control" placeholder="Ingrese Rut, Ejemplo: (11111111-3)" id="rut_personal" name="rut_personal" value=""  maxlength="10"  required>
            <div class="valid-feedback">
                
            </div>
        </div>
        <div class="col-md-6">
            <label for="telefono_personal" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono_personal" name="telefono_personal" value="" required>
            <div class="invalid-feedback">
                Favor de introducir un Telefono Valido
            </div>
        </div>
        <div class="col-md-3">
            <label for="nombre_personal" class="form-label">Nombre
            </label>
            <input type="text" class="form-control" id="nombre_personal" name="nombre_personal" required>
            <div class="invalid-feedback">
                
            </div>
        </div>
        <div class="col-md-3">
            <label for="apellidos_personal" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos_personal" name="apellidos_personal" required>
            <div class="invalid-feedback">
                
            </div>
        </div>
        <div class="col-md-3">
            <label for="email_personal" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="email_personal" name="email_personal"
                    aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <label for="direccion_personal" class="form-label">Dirección</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="direccion_personal" name="direccion_personal"
                    aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <label for="fecha_nacimiento_p" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento_p" name="fecha_nacimiento_p" required>
            <div class="invalid-feedback">
                
            </div>
        </div>
        <div class="col-md-3">
            <label for="id_estado_civil" class="form-label">Estado Civil</label>
            <select class="form-select" id="id_estado_civil" name="id_estado_civil" required>
            <option selected disabled value="">Seleccione Estado Civil</option>
                <?php foreach ($datos_estado_civil as $row){ ?>
                    <option value="<?php echo $row["id_estado_civil"] ?>"><?php echo $row["tipo_estado_civil"] ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="col-md-3">
            <label for="id_genero" class="form-label">Genero</label>
            <select class="form-select" id="id_genero" name="id_genero" required>
            <option selected disabled value="">Seleccione Genero</option>
                <?php foreach ($datos_genero as $row){ ?>
                    <option value="<?php echo $row["id_genero"] ?>"><?php echo $row["tipo_genero"] ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="col-md-3">
            <label for="id_tipo_usuario_p" class="form-label">Tipo Usuario</label>
            <select class="form-select" id="id_tipo_usuario_p" name="id_tipo_usuario_p" required>
            <option selected disabled value="">Seleccione Tipo de Usuario</option>
                <?php foreach ($datos_tipo_usuario as $row){ ?>
                    <option value="<?php echo $row["id_tipo_usuario"] ?>"><?php echo $row["tipo_usuario"] ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">
            </div>
        </div>
    <br>
    <br>
    <h2> Registrar Contraseña </h2>
    <br>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="usuario_personal" class="form-label">Nombre de Usuario</label>
             <input type="text" class="form-control" id="usuario_personal" name="usuario_personal" value="" required>
            <div class="invalid-feedback">

            </div>
         </div>

        <div class="mb-3">
            <label for="password_personal" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password_personal" name="password_personal">
        </div>
    </div>

        <input type="hidden" id="accion" name="accion" value="registrar">        
        <input type="hidden" id="estado_usuario_personal" name="estado_usuario_personal" value="1">
        

    </form>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="registrarPersonal()">Registrar</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
</div>

<script>

    (function(){


    document.getElementById('id_personal').addEventListener('change', onChangeRut);
    document.getElementById('id_personal').value = document.getElementById('id_personal').value;

    onChangeRut({})

    })()

    function onChangeRut(event){

        var id_personal= document.getElementById('id_personal').value;
        
        console.log(id_personal)

        if(id_personal && id_personal>1){

            fetch("api.php/personal/" + id_personal, {
                method: "get"            
            }).then(response=>response.json())
            .then((datos)=>{

                console.dir(datos)

                document.getElementById('id_personal').value=datos.id_personal;
                document.getElementById("rut_personal").value=datos.rut_personal;
                document.getElementById('telefono_personal').value=datos.telefono_personal;
                document.getElementById('nombre_personal').value=datos.nombre_personal;
                document.getElementById('apellidos_personal').value=datos.apellidos_personal;
                document.getElementById('email_personal').value=datos.email_personal;
                document.getElementById('direccion_personal').value=datos.direccion_personal;
                document.getElementById("fecha_nacimiento_p").value=datos.fecha_nacimiento_p;
                document.getElementById("id_estado_civil").value=datos.id_estado_civil;
                document.getElementById("id_genero").value=datos.id_genero;
                document.getElementById("id_tipo_usuario_p").value=datos.id_tipo_usuario_p;
                document.getElementById("usuario_personal").value=datos.usuario_personal;
                document.getElementById("password_personal").value=datos.password_personal;

            })

        }
    }
    
    function registrarPersonal(){
        
        var rut_personal=document.getElementById("rut_personal").value;
        var telefono_personal=document.getElementById("telefono_personal").value;
        var nombre_personal=document.getElementById("nombre_personal").value;
        var apellidos_personal=document.getElementById("apellidos_personal").value;
        var email_personal=document.getElementById("email_personal").value;
        var direccion_personal=document.getElementById("direccion_personal").value;
        var fecha_nacimiento_p=document.getElementById("fecha_nacimiento_p").value;
        var id_estado_civil=document.getElementById("id_estado_civil").value;
        var id_genero=document.getElementById("id_genero").value;
        var id_tipo_usuario_p=document.getElementById("id_tipo_usuario_p").value;
        var usuario_personal=document.getElementById("usuario_personal").value;
        var password_personal=document.getElementById("password_personal").value;
        console.log(rut_personal, telefono_personal, nombre_personal, apellidos_personal, email_personal, direccion_personal, fecha_nacimiento_p, id_estado_civil, id_genero, id_tipo_usuario_p,usuario_personal, password_personal)

        if(rut_personal==undefined || rut_personal==null || rut_personal.trim()=="" || rut_personal.lengh<3 || !validacion.validaRut(rut_personal)){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El Rut no es valido',                
                })            
            return;

        }

        if(telefono_personal==undefined || telefono_personal==null || telefono_personal.trim()=="" || !validacion.validarNumero(telefono_personal)){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar un número telefonico valido',                
                })            
            return;

        }

        if(nombre_personal==undefined || nombre_personal==null || nombre_personal.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar el nombre',                
                })            
            return;

        }

        if(apellidos_personal==undefined || apellidos_personal==null || apellidos_personal.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar el apellido',                
                })            
            return;

        }

        if(email_personal==undefined || email_personal==null || email_personal.trim()=="" || !validacion.validarEmail(email_personal)){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar un email valido',                
                })            
            return;

        }

        

        if(direccion_personal==undefined || direccion_personal==null || direccion_personal.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe introducir una direccion valida',                
                })            
            return;

        }

        if(fecha_nacimiento_p==undefined || fecha_nacimiento_p==null || fecha_nacimiento_p.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe seleccionar una fecha de nacimiento',                
                })            
            return;
        }

        if(id_estado_civil==undefined || id_estado_civil==null || id_estado_civil.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe seleccionar su estado civil',                
                })            
            return;

        }
        if(id_genero==undefined || id_genero==null || id_genero.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe seleccionar un genero',                
                })            
            return;

        }
        if(id_tipo_usuario_p==undefined || id_tipo_usuario_p==null || id_tipo_usuario_p.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe seleccionar un tipo de usuario',                
                })            
            return;

        }
        

        if(usuario_personal==undefined || usuario_personal==null || usuario_personal.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar un nombre de usuario valido',                
                })            
            return;

        }

        if(password_personal==undefined || password_personal==null || password_personal.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar una contraseña valida',                
                })            
            return;

        }

        let formulario = new FormData(document.getElementById("modificar_personal"))
        fetch('index.php?view=modificar-personal', {
            method: "post",
            body: formulario
        }).then((response) => {
            
            Swal.fire({
                title: 'Personal registrado exitosamente',
                showDenyButton: false,
                showCancelButton: false,
                confirmButtonText: 'Ok',
                }).then((result) => {
                    location.reload();
                })
            /*acciones a realizar*/     
        }).then((data) => {
            /*mas acciones a realizar*/
        })
        
    }

</script>

