
<div class="card-body" style="margin: 2em 5em;">
    <h2> Datos de la Empresa </h2>
    <br>
    <form id="registro_cliente" class="row g-3 needs-validation">
        <input type="hidden" id="id_cliente" name="id_cliente" value="<?php echo $datos_cliente['id_cliente'] ?>">

        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <input type="text" class="form-control" placeholder="Ingrese Rol, Ejemplo: (11111111-3) " id="rol_cliente" name="rol_cliente" value="" maxlength="10" required>
        </div>

        <div class="col-md-6">
            <label for="id_rubro" class="form-label">Rubro</label>
            <select class="form-select" id="id_rubro" name="id_rubro" required>
                <option selected disabled value="">Seleccione Rubro</option>
                <?php foreach ($datos_rubro as $row){ ?>
                    <option value="<?php echo $row["id_rubro"] ?>"><?php echo $row["tipo_rubro"] ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="col-md-6">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente" value="" required>
        </div>

        <div class="col-md-3">
            <label for="telefono_cliente" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" required>
        </div>

        <div class="col-md-6">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" required>
        </div>

        <div class="col-md-6">
            <label for="email_cliente" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="email_cliente" name="email_cliente"
                    aria-describedby="inputGroupPrepend" required>
            </div>
        </div>       

    <br>
    <br>
    <h2> Registrar Contraseña </h2>
    <br>

    <div class="col-md-6">
        <div class="mb-3">
            <label for="usuario_cliente" class="form-label">Nombre de Usuario</label>
            <input type="text" class="form-control" id="usuario_cliente" name="usuario_cliente" value="" required>
            <div class="invalid-feedback">

            </div>
        </div>

        <div class="mb-3">
            <label for="password_cliente" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password_cliente" name="password_cliente">
        </div>
    </div>

    
    <br>

    <input type="hidden" id="accion" name="accion" value="registrar">
    <input type="hidden" id="tipo_usuario_c" name="tipo_usuario_c" value="3">
    <input type="hidden" id="estado_usuario_cliente" name="estado_usuario_cliente" value="1">

    </form>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="registrarCliente()">Registrar</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
    <br><br><br><br><br>

  
</div>


<script>

    (function(){


    document.getElementById('id_cliente').addEventListener('change', onChangeRut);
    document.getElementById('id_cliente').value = document.getElementById('id_cliente').value;

    onChangeRut({})

    })()

    function onChangeRut(event){

        var id_cliente= document.getElementById('id_cliente').value;
        
        console.dir(id_cliente)

        if(id_cliente && id_cliente>1){

            fetch("api.php/cliente/" + id_cliente, {
                method: "get"            
            }).then(response=>response.json())
            .then((datos)=>{

                console.dir(datos)

                document.getElementById('id_cliente').value=datos.id_cliente;
                document.getElementById("rol_cliente").value=datos.rol_cliente;
                document.getElementById('id_rubro').value=datos.id_rubro;
                document.getElementById('razon_social_cliente').value=datos.razon_social_cliente;
                document.getElementById('telefono_cliente').value=datos.telefono_cliente;
                document.getElementById('direccion_cliente').value=datos.direccion_cliente;
                document.getElementById('email_cliente').value=datos.email_cliente;
                document.getElementById("usuario_cliente").value=datos.usuario_cliente;
                document.getElementById("password_cliente").value=datos.password_cliente;

            })
            console.dir(datos)
        }
    }


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

        if(razon_social==undefined || razon_social==null || razon_social.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe seleccionar un rubro',                
                })            
            return;

        }

        if(telefono==undefined || telefono==null || telefono.trim()=="" || !validacion.validarNumero(telefono)){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar un número telefonico valido',                
                })            
            return;

        }

        if(direccion==undefined || direccion==null || direccion.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe seleccionar un rubro',                
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

        if(usuario==undefined || usuario==null || usuario.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar un nombre de usuario valido',                
                })            
            return;

        }

        if(password==undefined || password==null || password.trim()=="" ){
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