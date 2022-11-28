
<div class="card-body" style="margin: 2em 5em;">
    <h2> Datos de la Empresa </h2>
    <br>
    <form id="modificar_cliente" class="row g-3 needs-validation">

        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <input type="text" class="form-control" placeholder="Ingrese Rol de la empresa, Ejemplo: (11111111-3) " id="rol_cliente" name="rol_cliente" value="" maxlength="10" disabled required>
        </div>

        <div class="col-md-6">
            <label for="tipo_rubro" class="form-label">Rubro</label>
            <input type="text" class="form-control" id="tipo_rubro" name="tipo_rubro" placeholder="Ingrese la Razón Social de la empresa" value="" disabled required>
        </div>

        <div class="col-md-6">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente" placeholder="Ingrese la Razón Social de la empresa" value="" disabled required>
        </div>

        <div class="col-md-3">
            <label for="telefono_cliente" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" placeholder="Ingrese un Teléfono de Contacto, Ejemplo: (985060623)" disabled required>
        </div>

        <div class="col-md-6">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" placeholder="Ingrese la Dirección de la empresa" disabled required>
        </div>

        <div class="col-md-6">
            <label for="email_cliente" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="email_cliente" name="email_cliente"
                    aria-describedby="inputGroupPrepend" placeholder="Ingrese un Correo de Contacto" disabled required>
            </div>
        </div>          
        <br><br><br><br><br>


    <input type="hidden" id="id_cliente" name="id_cliente" value="<?php echo $datos_cliente['id_cliente'] ?>">

    </form>
  
</div>


<script>

    (function(){

    document.getElementById('id_cliente').addEventListener('change', onChangeRut);

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

                document.getElementById('id_cliente').value=datos.id_cliente;
                document.getElementById("rol_cliente").value=datos.rol_cliente;
                document.getElementById('tipo_rubro').value=datos.tipo_rubro;
                document.getElementById('razon_social_cliente').value=datos.razon_social_cliente;
                document.getElementById('telefono_cliente').value=datos.telefono_cliente;
                document.getElementById('direccion_cliente').value=datos.direccion_cliente;
                document.getElementById('email_cliente').value=datos.email_cliente;
                document.getElementById("usuario_cliente").value=datos.usuario_cliente;
                document.getElementById("password_cliente").value=datos.password_cliente;

            })

        }
    }


</script>