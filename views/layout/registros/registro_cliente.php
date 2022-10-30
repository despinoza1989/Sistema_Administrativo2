
<div class="card-body" style="margin: 2em 5em;">
    <h2> Datos de la Empresa </h2>
    <br>
    <form id="registro_cliente" class="row g-3 needs-validation">
        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <input type="text" class="form-control" placeholder="Ingrese Rol de la empresa, Ejemplo: (11111111-3) " id="rol_cliente" name="rol_cliente" value="" maxlength="10" required>
            <div class="invalid-feedback">

            </div>
        </div>

        <div class="col-md-6">
            <label for="id_rubro" class="form-label">Rubro</label>
            <select class="form-select" id="id_rubro" name="id_rubro" required>
                <option selected disabled value="">Seleccione Rubro</option>
                <?php foreach ($datos_rubro as $row){ ?>
                    <option value="<?php echo $row["id_rubro"] ?>"><?php echo $row["tipo_rubro"] ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">

            </div>
        </div>

        <div class="col-md-6">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente" value="" placeholder="Ingrese la Razón Social de la empresa" required>
            <div class="invalid-feedback">

            </div>
        </div>

        <div class="col-md-3">
            <label for="telefono_cliente" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" placeholder="Ingrese un Teléfono de Contacto, Ejemplo: (985060623)" required>
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div>

        <div class="col-md-6">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" placeholder="Ingrese la Dirección de la empresa" required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>

        <div class="col-md-6">
            <label for="email_cliente" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="email_cliente" name="email_cliente"
                    aria-describedby="inputGroupPrepend" placeholder="Ingrese un Correo de Contacto" required>
            </div>
        </div>       

    <br>
    <br>
    <br>
    <h2> Datos de Cuenta </h2>
    <br>

    <div class="col-md-6">
        <div class="mb-3">
            <label for="usuario_cliente" class="form-label">Nombre de Usuario</label>
            <input type="text" class="form-control" id="usuario_cliente" name="usuario_cliente" value="" placeholder="Ingrese un nombre de usuario (acceso al sistema)" required>
        </div>
        <div class="mb-3">
            <label for="password_cliente" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password_cliente" name="password_cliente" placeholder="Ingrese una contraseña">
        </div>
    </div>

    <div class="col-md-6">
        <div class="card text-center">
            <div class="card-header">
            Importante
            </div>
            <div class="card-body">
                <h5 class="card-title">Usuario y Contraseña</h5>
                <p class="card-text">Usuario: el nombre de usuario debe ser solo una palabra.</p>
                <p class="card-text">Contraseña: la contraseña debe tener al menos un largo de 8 caracteres</p>
            </div>
        </div>
    </div>


    <input type="hidden" id="accion" name="accion" value="registrar">
    <input type="hidden" id="tipo_usuario_c" name="tipo_usuario_c" value="3">
    <input type="hidden" id="estado_usuario_cliente" name="estado_usuario_cliente" value="1">
        

    </form>
    <br><br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="registrarCliente()">Registrar</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
    <br><br><br><br><br>

  
</div>


<script>

   
    function registrarCliente(){
        var rol=document.getElementById("rol_cliente").value;
        var rubro=document.getElementById("id_rubro").value;
        var razon_social=document.getElementById("razon_social_cliente").value;
        var telefono=document.getElementById("telefono_cliente").value;
        var direccion=document.getElementById("direccion_cliente").value;
        var email=document.getElementById("email_cliente").value;
        var usuario=document.getElementById("usuario_cliente").value;
        var password=document.getElementById("password_cliente").value;
        console.log(rol, rubro, razon_social, telefono, direccion, email, usuario, password)

        if(rol==undefined || rol==null || rol.trim()=="" || rol.lengh<3 || !validacion.validaRut(rol)){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El Rol no es valido',                
                })            
            return;

        }

        if(rubro==undefined || rubro==null || rubro.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe seleccionar un rubro',                
                })            
            return;

        }

        if(razon_social==undefined || razon_social==null || razon_social.trim()=="" || !validacion.validarRazonSocial(razon_social)){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar una razón social valida',                
                })            
            return;

        }

        if(telefono==undefined || telefono==null || telefono.trim()=="" || !validacion.validarTelefono(telefono)){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar un número telefónico valido, debe contener 9 dígitos',                
                })            
            return;

        }
        
        if(direccion==undefined || direccion==null || direccion.trim()=="" || !validacion.validarDireccion(direccion)){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar una dirección valida',                
                })            
            return;

        }

        if(email==undefined || email==null || email.trim()=="" || !validacion.validarEmail(email)){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar un email valido',                
                })            
            return;

        }
        
        if(usuario==undefined || usuario==null || usuario.trim()=="" || !validacion.validarUsuario(usuario)){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar un nombre de usuario valido',                
                })            
            return;

        }
        
        if(password==undefined || password==null || password.trim()=="" || !validacion.validarPassword(password) || password.lengh<8 ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar una contraseña valida',                
                })            
            return;

        }

        let formulario = new FormData(document.getElementById("registro_cliente"))
       
        fetch('index.php?view=registro-cliente', {
            method: "post",
            body: formulario
        }).then((response) => {
            
            Swal.fire({
                title: 'Cliente registrado exitosamente',
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