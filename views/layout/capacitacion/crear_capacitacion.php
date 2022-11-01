<div class="card-body" style="margin: 2em 5em;">
    <h1> Crear Capacitación </h1>
    <br>
    <br>
    <h2> Profesional </h2>
    <br>
    <form id="crear_capacitacion" class="row g-3 needs-validation">

        <div class="col-md-6">
            <label for="rut_personal" class="form-label">Rut</label>
            <input type="text" class="form-control" id="rut_personal" name="rut_personal"
                value="<?php echo $datosusuario['rut_personal'] ?>" disabled required>
        </div>
        <div class="col-md-6">
            <label for="nombre_personal" class="form-label">Nombre Personal</label>
            <input type="text" class="form-control" id="nombre_personal" name="nombre_personal"
                value="<?php echo $datosusuario['nombre_personal'] ?>" disabled required>
        </div>
        <div class="col-md-6">
            <label for="apellidos_personal" class="form-label">Apellido Personal</label>
            <input type="text" class="form-control" id="apellidos_personal" name="apellidos_personal"
                value="<?php echo $datosusuario['apellidos_personal'] ?>" disabled required>
        </div>
        <div class="col-md-6">
            <label for="telefono_personal" class="form-label">Teléfono Personal</label>
            <input type="text" class="form-control" id="telefono_personal" name="telefono_personal"
                value="<?php echo $datosusuario['telefono_personal'] ?>" disabled required>
        </div>

        <div class="col-md-6">
            <label for="email_personal" class="form-label">Email Personal</label>
            <input type="text" class="form-control" id="email_personal" name="email_personal"
                value="<?php echo $datosusuario['email_personal'] ?>" disabled required>
        </div>

        <br>
        <br>
        <h2>Cliente a Capacitar</h2>
        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <select class="form-select" id="rol_cliente" name="rol_cliente" required>
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
            <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente" disabled
                required>
            <div class="invalid-feedback">
                Favor de escoger una opcion valida
            </div>
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
                <input type="text" class="form-control" id="email_cliente" name="email_cliente"
                    aria-describedby="inputGroupPrepend" disabled required>
            </div>
        </div>
        <br><br>
        <h2>Datos de Capacitación</h2>
        <div class="col-md-6">
            <label for="nombre_capacitacion" class="form-label">Nombre Capacitación</label>
            <input type="text" class="form-control" id="nombre_capacitacion" name="nombre_capacitacion" placeholder="Ingrese un Nombre de Capacitación, Ejemplo: Uso Correcto de EPP " required>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="col-md-6">
            <label for="fecha_capacitacion" class="form-label">Fecha a Realizar Capacitación</label>
            <input type="date" class="form-control" id="fecha_capacitacion" name="fecha_capacitacion" required>
            <div class="invalid-feedback">
                Favor de introducir una fecha valida
            </div>
        </div>
        <div class="col-md-6">
            <label for="id_tipo_personal_capacitacion_cc" class="form-label">Tipo Personal a Capacitar</label>
            <select class="form-select" id="id_tipo_personal_capacitacion_cc" name="id_tipo_personal_capacitacion_cc" required>
                <option selected disabled value="">Seleccione Tipo de Personal a Capacitar</option>
                <?php foreach ($datos_tipo_personal_capacitacion as $row){ ?>
                <option value="<?php echo $row["id_tipo_personal_capacitacion"] ?>">
                    <?php echo $row["tipo_personal_capacitacion"] ?></option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="col-md-6">
            <label for="link_capacitacion" class="form-label">URL de Directorio de Archivos</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="link_capacitacion">https://nma.com/drive</span>
                <input type="text" class="form-control" id="link_capacitacion" name="link_capacitacion"
                    aria-describedby="link_capacitacion" placeholder="Escriba un titulo para el archivo adjunto">
            </div>
        </div>
        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_personal_cc" name="id_personal_cc" value="<?php echo $datosusuario['id_personal'] ?>">
         
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

    document.getElementById('rol_cliente').addEventListener('change', onChangeRol)

    //document.getElementById('rol_cliente').addEventListener('change', onChangeRol)
    document.getElementById('rol_cliente').value = document.getElementById('rol_cliente').value;
        
    onChangeRol({})
    })()

    function onChangeRol(event){

    var id_cliente= document.getElementById('rol_cliente').value;

        if(id_cliente && id_cliente>0){

            fetch("api.php/asignacion-profesional/" + id_cliente, {
                method: "get"            
            }).then(response=>response.json())
            .then((datos)=>{

                console.dir(datos)

                //document.getElementById('rol_cliente').value=datos.rol_cliente;
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
        var rol_cliente = document.getElementById("rol_cliente").value;
        console.log(nombre_capacitacion, fecha_capacitacion, link_capacitacion, id_tipo_personal_capacitacion_cc)


        if (nombre_capacitacion == undefined || nombre_capacitacion == null || nombre_capacitacion.trim() == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar el nombre de la capacitación',
            })
            return;

        }

        if (fecha_capacitacion == undefined || fecha_capacitacion == null || fecha_capacitacion.trim() == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar una fecha valida',
            })
            return;

        }

        if (id_tipo_personal_capacitacion_cc == undefined || id_tipo_personal_capacitacion_cc == null || id_tipo_personal_capacitacion_cc.trim() == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe el seleccionar el personal a capacitar',
            })
            return;

        }

        if (rol_cliente == undefined || rol_cliente == null || rol_cliente.trim() == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe seleccionar el Rol del cliente',
            })
            return;

        }

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
            /*acciones a realizar*/
        }).then((data) => {
            /*mas acciones a realizar*/
        })
    }
</script>
