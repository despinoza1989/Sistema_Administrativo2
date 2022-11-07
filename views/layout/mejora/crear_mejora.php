<div class="card-body" style="margin: 2em 5em;">
    <h1> Crear Mejora</h1>
    <br>
    <br>
    <h2>Selección de Cliente</h2>
    <br>
    <form id="registro_mejora" class="row g-3 needs-validation">
        <div class="col-md-4">
            <label for="rol_cliente" class="form-label">Rol</label>
            <select class="form-select" id="rol_cliente" name="rol_cliente" required>
                <option selected disabled value="">Seleccione Rol</option>
                <?php foreach ($dato_asignacion as $row){ ?>
                <option value="<?php echo $row["id_asignacion_profesional"] ?>"><?php echo $row["rol_cliente"] ?>
                </option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="col-md-4">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente" disabled
                required>
            <div class="invalid-feedback">
                Favor de escoger una opcion valida
            </div>
        </div>
        <div class="col-md-4">
            <label for="telefono_cliente" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" disabled required>
            <div class="invalid-feedback">
                Favor de introducir un telefono Valido
            </div>
        </div>
        <div class="col-md-4">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" disabled required>
            <div class="invalid-feedback">
                Favor de introducir una direccion Valido
            </div>
        </div>
        <div class="col-md-4">
            <label for="email_cliente" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="email_cliente" name="email_cliente"
                    aria-describedby="inputGroupPrepend" disabled required>
                <div class="invalid-feedback">
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2>Ingrese los datos y/o documentos y/o imágenes</h2>
        <br>
        <br>
        <br>
        <br>
        <h3> General </h3>
        <br>
        <div class="col-md-4">
            <label for="ob_check_general" class="form-label">Observaciones General</label>
            <input type="text" class="form-control" id="ob_check_general" name="ob_check_general"
                placeholder="Ingrese detalle de la observación" required>
        </div>
        <div class="col-md-4">
            <label for="doc_check_general" class="form-label">URL de Directorio de Documentos</label>
            <div class="input-group has-validation">
                <span class="input-group-text">https://nma.com/drive</span>
                <input class="form-control" type="text" id="doc_check_general" name="doc_check_general"
                    aria-describedby="doc_check_general">
            </div>
        </div>
        <div class="col-md-4">
            <label for="img_check_general" class="form-label">URL de Directorio de Imagénes</label>
            <div class="input-group has-validation">
                <span class="input-group-text">https://nma.com/drive</span>
                <input class="form-control" type="text" id="img_check_general" name="img_check_general"
                    aria-describedby="img_check_general">
            </div>
        </div>
        <br>
        <h2> Proteccion </h2>
        <br>
        <div class="col-md-4">
            <label for="ob_check_proteccion" class="form-label">Observaciones Protección</label>
            <input type="text" class="form-control" id="ob_check_proteccion" name="ob_check_proteccion"
                placeholder="Ingrese detalle de la observación" required>
        </div>
        <div class="col-md-4">
            <label for="doc_check_proteccion" class="form-label">URL de Directorio de Documentos</label>
            <div class="input-group has-validation">
                <span class="input-group-text">https://nma.com/drive</span>
                <input class="form-control" type="text" id="doc_check_proteccion" name="doc_check_proteccion"
                    aria-describedby="doc_check_proteccion">
            </div>
        </div>
        <div class="col-md-4">
            <label for="img_check_proteccion" class="form-label">URL de Directorio de Imagénes</label>
            <div class="input-group has-validation">
                <span class="input-group-text">https://nma.com/drive</span>
                <input class="form-control" type="text" id="img_check_proteccion" name="img_check_proteccion"
                    aria-describedby="img_check_proteccion">
            </div>
        </div>
        <h2> Herramientas </h2>
        <br>
        <div class="col-md-4">
            <label for="ob_check_herramientas" class="form-label">Observaciones Herramientas</label>
            <input type="text" class="form-control" id="ob_check_herramientas" name="ob_check_herramientas"
                placeholder="Ingrese detalle de la observación" required>
        </div>
        <div class="col-md-4">
            <label for="doc_check_herramientas" class="form-label">URL de Directorio de Documentos</label>
            <div class="input-group has-validation">
                <span class="input-group-text">https://nma.com/drive</span>
                <input class="form-control" type="text" id="doc_check_herramientas" name="doc_check_herramientas"
                    aria-describedby="doc_check_herramientas">
            </div>
        </div>
        <div class="col-md-4">
            <label for="img_check_herramientas" class="form-label">URL de Directorio de Imagénes</label>
            <div class="input-group has-validation">
                <span class="input-group-text">https://nma.com/drive</span>
                <input class="form-control" type="text" id="img_check_herramientas" name="img_check_herramientas"
                    aria-describedby="img_check_herramientas">
            </div>
        </div>
        <h2> Maquinaria </h2>
        <br>
        <div class="col-md-4">
            <label for="ob_check_maquinaria" class="form-label">Observaciones Maquinaria</label>
            <input type="text" class="form-control" id="ob_check_maquinaria" name="ob_check_maquinaria"
                placeholder="Ingrese detalle de la observación" required>
        </div>
        <div class="col-md-4">
            <label for="doc_check_maquinaria" class="form-label">URL de Directorio de Documentos</label>
            <div class="input-group has-validation">
                <span class="input-group-text">https://nma.com/drive</span>
                <input class="form-control" type="text" id="doc_check_maquinaria" name="doc_check_maquinaria"
                    aria-describedby="doc_check_maquinaria">
            </div>
        </div>
        <div class="col-md-4">
            <label for="img_check_maquinaria" class="form-label">URL de Directorio de Imagénes</label>
            <div class="input-group has-validation">
                <span class="input-group-text">https://nma.com/drive</span>
                <input class="form-control" type="text" id="img_check_maquinaria" name="img_check_maquinaria"
                    aria-describedby="img_check_maquinaria">
            </div>
        </div>

        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_check_list_m" name="id_check_list_m" value="">
        <input type="hidden" id="id_cliente_m" name="id_cliente_m" value="">


    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="registrarMejora()">Generar Mejora</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
</div>

<script>
(function() {

    document.getElementById('rol_cliente').addEventListener('change', onChangeRol)

})()

function onChangeRol(event) {

    var id_cliente = document.getElementById('rol_cliente').value;

    if (id_cliente && id_cliente > 0) {

        fetch("api.php/asignacion-profesional/" + id_cliente, {
                method: "get"
            }).then(response => response.json())
            .then((datos) => {

                console.dir(datos)
                document.getElementById('id_check_list_m').value = datos.id_check_list;
                document.getElementById('id_cliente_m').value = datos.id_cliente_ap;
                document.getElementById('razon_social_cliente').value = datos.razon_social_cliente;
                document.getElementById('telefono_cliente').value = datos.telefono_cliente;
                document.getElementById('direccion_cliente').value = datos.direccion_cliente;
                document.getElementById('email_cliente').value = datos.email_cliente;

            })

    }

}

function registrarMejora() {
    var ob_check_general = document.getElementById("ob_check_general").value;
    var doc_check_general = document.getElementById("doc_check_general").value;
    var img_check_general = document.getElementById("img_check_general").value;
    var ob_check_proteccion = document.getElementById("ob_check_proteccion").value;
    var doc_check_proteccion = document.getElementById("doc_check_proteccion").value;
    var img_check_proteccion = document.getElementById("img_check_proteccion").value;
    var ob_check_herramientas = document.getElementById("ob_check_herramientas").value;
    var doc_check_herramientas = document.getElementById("doc_check_herramientas").value;
    var img_check_herramientas = document.getElementById("img_check_herramientas").value;
    var ob_check_maquinaria = document.getElementById("ob_check_maquinaria").value;
    var doc_check_maquinaria = document.getElementById("doc_check_maquinaria").value;
    var img_check_maquinaria = document.getElementById("img_check_maquinaria").value;


    if (ob_check_general == undefined || ob_check_general == null || ob_check_general.trim() == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Se debe completar el campo de Observacion General',
        })
        return;

    }

    if (doc_check_general == undefined || doc_check_general == null || doc_check_general.trim() == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Se debe completar el campo deURL de Directorio de Documentos',
        })
        return;

    }

    if (img_check_general == undefined || img_check_general == null || img_check_general.trim() == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Se debe completar el campo de URL de Directorio de Imagénes',
        })
        return;

    }

    let formulario = new FormData(document.getElementById("registro_mejora"))
    fetch('index.php?view=crear-mejora', {
        method: "post",
        body: formulario
    }).then((response) => {

        Swal.fire({
            title: 'Mejora Registrada Exitosamente',
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