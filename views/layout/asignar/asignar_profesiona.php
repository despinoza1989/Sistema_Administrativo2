<div class="card-body" style="margin: 2em 5em;">
    <h1> Asignar Profesional </h1>
    <br>
    <form class="row g-3 needs-validation" novalidate>
        <h2> Profesional </h2>
        <div class="col-md-6">
            <label for="rut_personal" class="form-label">Rol</label>
            <select class="form-select" id="rut_personal" name="rut_personal"  required>
                <option selected disabled value="">Seleccione Rut del profesional</option>
                <?php foreach ($datos_cliente as $row){ ?>
                    <option value="<?php echo $row["id_personal"] ?>"><?php echo $row["rol_cliente"] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col-md-6">
            <label for="telefono_personal" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono_personal" value="" disabled required>
            <div class="invalid-feedback">
                Favor de introducir un Telefono Valido
            </div>
        </div>
        <div class="col-md-3">
            <label for="nombre_personal" class="form-label">Nombre
            </label>
            <input type="text" class="form-control" id="nombre_personal" disabled required>
            <div class="invalid-feedback">
                Favor de introducir un Nombre
            </div>
        </div>
        <div class="col-md-3">
            <label for="apellidos_personal" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos_personal" disabled required>
            <div class="invalid-feedback">
                Favor de introducir apellidos
            </div>
        </div>
        <div class="col-md-6">
            <label for="email_personal" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="email_personal"
                    aria-describedby="inputGroupPrepend" disabled required>
                <div class="invalid-feedback">

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="direccion_personal" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion_personal" required>
            <div class="invalid-feedback">
                Favor de introducir dirección
            </div>
        </div>
        <br><br><br><br>

        <h2> Cliente </h2>
        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <select class="form-select" id="rol_cliente" name="rol_cliente"  required>
                <option selected disabled value="">Seleccione el Rol del cliente</option>
                <?php foreach ($datos_cliente as $row){ ?>
                    <option value="<?php echo $row["id_cliente"] ?>"><?php echo $row["rol_cliente"] ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="col-md-6">
            <label for="tipo_rubro" class="form-label">Rubro</label>
            <input type="text" class="form-control" id="tipo_rubro" name="tipo_rubro" value="" disabled required>
        </div>

        <div class="col-md-6">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente" disabled value="" required>
        </div>

        <div class="col-md-6">
            <label for="email_cliente" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="email_cliente" name="email_cliente"
                    aria-describedby="inputGroupPrepend" disabled required>
            </div>
        </div>    

        <div class="col-md-6">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" disabled required>
        </div>

        <div class="col-md-3">
            <label for="telefono_cliente" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" disabled required>
        </div>

    </form>
    <br><br><br>


    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary" type="submit">Asignar</button>
        <button class="btn btn-primary" type="submit">Cancelar</button>
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

            document.getElementById('razon_social_cliente').value=datos.razon_social_cliente;
            document.getElementById('telefono_cliente').value=datos.telefono_cliente;
            document.getElementById('direccion_cliente').value=datos.direccion_cliente;
            document.getElementById('email_cliente').value=datos.email_cliente;

        })

    }

}


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

            document.getElementById('razon_social_cliente').value=datos.razon_social_cliente;
            document.getElementById('telefono_cliente').value=datos.telefono_cliente;
            document.getElementById('direccion_cliente').value=datos.direccion_cliente;
            document.getElementById('email_cliente').value=datos.email_cliente;

        })
    }
}

</script>