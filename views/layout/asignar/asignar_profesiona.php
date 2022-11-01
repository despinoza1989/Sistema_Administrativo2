<div class="card-body" style="margin: 2em 5em;">
    <h1> Asignar Profesional a Cliente</h1>
    <br>
    <form id="asignar_profesional" class="row g-3 needs-validation" novalidate>
        <h2> Profesional </h2>
        <div class="col-md-6">
            <label for="rut_personal" class="form-label">Rut</label>
            <select class="form-select" id="rut_personal" name="rut_personal"  required>
                <option selected disabled value="">Seleccione Rut del profesional</option>
                <?php foreach ($datos_personal as $row){ ?>
                    <option value="<?php echo $row["id_personal"] ?>"><?php echo $row["rut_personal"] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col-md-6">
            <label for="telefono_personal" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono_personal" value="" disabled required>
        </div>
        <div class="col-md-3">
            <label for="nombre_personal" class="form-label">Nombre
            </label>
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
                <input type="text" class="form-control" id="email_personal"
                    aria-describedby="inputGroupPrepend" disabled required>
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
            <label for="telefono_cliente" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" disabled required>
        </div>

        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_personal_ap" name="id_personal_ap" >
        <input type="hidden" id="id_cliente_ap" name="id_cliente_ap" >
    
    </form>
    <br><br><br>


    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="asignarProfesional()">Asignar</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
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

document.getElementById('rut_personal').addEventListener('change', onChangeRut)

})()

function onChangeRut(event){

    var id_personal= document.getElementById('rut_personal').value;

    if(id_personal && id_personal>1){

        fetch("api.php/personal/" + id_personal, {
            method: "get"            
        }).then(response=>response.json())
        .then((datos)=>{

            console.dir(datos)

            document.getElementById('id_personal_ap').value=datos.id_personal;
            document.getElementById('telefono_personal').value=datos.telefono_personal;
            document.getElementById('nombre_personal').value=datos.nombre_personal;
            document.getElementById('apellidos_personal').value=datos.apellidos_personal;
            document.getElementById('email_personal').value=datos.email_personal;
            document.getElementById('direccion_personal').value=datos.direccion_personal;

        })
    }
}

function asignarProfesional(){
    var rol_cliente=document.getElementById("rol_cliente").value;
    var rut_personal=document.getElementById("rut_personal").value;


    if(rol_cliente==undefined || rol_cliente==null || rol_cliente.trim()=="" ){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Debe seleccionar el Rol del Cliente',                
            })            
        return;

    }

    if(rut_personal==undefined || rut_personal==null || rut_personal.trim()=="" ){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Se debe seleccionar el Rut del Profesional',                
            })            
        return;

    }

    let formulario = new FormData(document.getElementById("asignar_profesional"))
        fetch('index.php?view=asignar-profesional', {
            method: "post",
            body: formulario
        }).then((response) => {
            
            Swal.fire({
                title: 'Asignación realizada exitosamente',
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