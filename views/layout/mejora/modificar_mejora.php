<div class="card-body" style="margin: 2em 5em;">
    <h1> Crear Mejora</h1>
    <br>
    <br>
    <h2>Selección de Cliente</h2>
    <br>
    <form id="modificar_mejora" class="row g-3 needs-validation">

        <input type="hidden" id="id_mejoras" name="id_mejoras" value="<?php echo $datos_mejora['id_mejoras'] ?>">

        <div class="col-md-4">
            <label for="rol_cliente" class="form-label">Rol</label>
            <input class="form-control" id="rol_cliente" name="rol_cliente" disabled required>
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
                    aria-describedby="doc_check_general" required>
            </div>
        </div>
        <div class="col-md-4">
            <label for="img_check_general" class="form-label">URL de Directorio de Imagénes</label>
            <div class="input-group has-validation">
                <span class="input-group-text">https://nma.com/drive</span>
                <input class="form-control" type="text" id="img_check_general" name="img_check_general"
                    aria-describedby="img_check_general" required>
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
                    aria-describedby="doc_check_proteccion" required>
            </div>
        </div>
        <div class="col-md-4">
            <label for="img_check_proteccion" class="form-label">URL de Directorio de Imagénes</label>
            <div class="input-group has-validation">
                <span class="input-group-text">https://nma.com/drive</span>
                <input class="form-control" type="text" id="img_check_proteccion" name="img_check_proteccion"
                    aria-describedby="img_check_proteccion" required>
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
                    aria-describedby="doc_check_herramientas" required>
            </div>
        </div>
        <div class="col-md-4">
            <label for="img_check_herramientas" class="form-label">URL de Directorio de Imagénes</label>
            <div class="input-group has-validation">
                <span class="input-group-text">https://nma.com/drive</span>
                <input class="form-control" type="text" id="img_check_herramientas" name="img_check_herramientas"
                    aria-describedby="img_check_herramientas" required>
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
                    aria-describedby="doc_check_maquinaria" required>
            </div>
        </div>
        <div class="col-md-4">
            <label for="img_check_maquinaria" class="form-label">URL de Directorio de Imagénes</label>
            <div class="input-group has-validation">
                <span class="input-group-text">https://nma.com/drive</span>
                <input class="form-control" type="text" id="img_check_maquinaria" name="img_check_maquinaria"
                    aria-describedby="img_check_maquinaria" required>
            </div>
        </div>

        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_check_list_m" name="id_check_list_m" value="">
        <input type="hidden" id="id_cliente_m" name="id_cliente_m" value="">
        

    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="modificarMejora()">Modificar Mejora</button>
    </div>
</div>

<script>
(function() {

    document.getElementById('id_mejoras').addEventListener('change', onChangeDetalleMejoras)

    onChangeDetalleMejoras({})

})()

function onChangeDetalleMejoras(event) {

    var id_mejoras = document.getElementById('id_mejoras').value;


    if (id_mejoras && id_mejoras > 0) {

        fetch("api.php/mejoras/" + id_mejoras, {
                method: "get"
            }).then(response => response.json())
            .then((datos) => {

                //console.log(datos " Datos api")

                document.getElementById('id_check_list_m').value = datos.id_check_list_m;
                document.getElementById('id_cliente_m').value = datos.id_cliente_m;
                document.getElementById('rol_cliente').value = datos.rol_cliente;
                document.getElementById('razon_social_cliente').value = datos.razon_social_cliente;
                document.getElementById('telefono_cliente').value = datos.telefono_cliente;
                document.getElementById('direccion_cliente').value = datos.direccion_cliente;
                document.getElementById('email_cliente').value = datos.email_cliente;

                document.getElementById('ob_check_general').value = datos.ob_check_general;
                document.getElementById('doc_check_general').value = datos.doc_check_general;
                document.getElementById('img_check_general').value = datos.img_check_general;

                document.getElementById('ob_check_proteccion').value = datos.ob_check_proteccion;
                document.getElementById('doc_check_proteccion').value = datos.doc_check_proteccion;
                document.getElementById('img_check_proteccion').value = datos.img_check_proteccion;

                document.getElementById('ob_check_herramientas').value = datos.ob_check_herramientas;
                document.getElementById('doc_check_herramientas').value = datos.doc_check_herramientas;
                document.getElementById('img_check_herramientas').value = datos.img_check_herramientas;

                document.getElementById('ob_check_maquinaria').value = datos.ob_check_maquinaria;
                document.getElementById('doc_check_maquinaria').value = datos.doc_check_maquinaria;
                document.getElementById('img_check_maquinaria').value = datos.img_check_maquinaria;


            })

    }

}

function modificarMejora() {

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
    var id_check_list_m = document.getElementById("id_check_list_m").value;
    var id_cliente_m = document.getElementById("id_cliente_m").value;

    if (ob_check_general == undefined || ob_check_general == null || ob_check_general.trim() == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Se debe ingresar texto en el campo de Observación General sobre documentos e imágenes, de las mejoras generales!',
        })
        return;

    }


    if (doc_check_general == undefined || doc_check_general == null || doc_check_general.trim() == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Se debe completar el campo de URL de Directorio de Documentos',
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

    if (ob_check_proteccion == undefined || ob_check_proteccion == null || ob_check_proteccion.trim() == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Se debe ingresar texto en el campo de Observación General sobre documentos e imágenes, de las mejoras de protección!',
        })
        return;

    }

    if (doc_check_proteccion == undefined || doc_check_proteccion == null || doc_check_proteccion.trim() == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Se debe completar el campo de URL de Directorio de Documentos, de las mejoras de protección!',
        })
        return;

    }

    if (img_check_proteccion == undefined || img_check_proteccion == null || img_check_proteccion.trim() == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Se debe completar el campo de URL de Directorio de Imagénes, de las mejoras de protección!',
        })
        return;

    }

    if (ob_check_herramientas == undefined || ob_check_herramientas == null || ob_check_herramientas.trim() == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Se debe ingresar texto en el campo de Observación General sobre documentos e imágenes, de las mejoras de herramientas!',
        })
        return;

    }

    if (doc_check_herramientas == undefined || doc_check_herramientas == null || doc_check_herramientas.trim() == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Se debe completar el campo de URL de Directorio de Documentos, de las mejoras de herramientas!',
        })
        return;

    }

    if (img_check_herramientas == undefined || img_check_herramientas == null || img_check_herramientas.trim() == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Se debe completar el campo de URL de Directorio de Imagénes, de las mejoras de herramientas!',
        })
        return;

    }

    if (ob_check_maquinaria == undefined || ob_check_maquinaria == null || ob_check_maquinaria.trim() == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Se debe ingresar texto en el campo de Observación General sobre documentos e imágenes, de las mejoras de maquinarias!',
        })
        return;

    }

    if (doc_check_maquinaria == undefined || doc_check_maquinaria == null || doc_check_maquinaria.trim() == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Se debe completar el campo de URL de Directorio de Documentos, de las mejoras de maquinarias!',
        })
        return;

    }

    if (img_check_maquinaria == undefined || img_check_maquinaria == null || img_check_maquinaria.trim() == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Se debe completar el campo de URL de Directorio de Imagénes, de las mejoras de maquinarias!',
        })
        return;

    }


    var datos_formulario = {

        id_mejoras:document.getElementById('id_mejoras').value,
        ob_check_general:document.getElementById("ob_check_general").value,
        doc_check_general:document.getElementById("doc_check_general").value,
        img_check_general:document.getElementById("img_check_general").value,
        ob_check_proteccion:document.getElementById("ob_check_proteccion").value,
        doc_check_proteccion:document.getElementById("doc_check_proteccion").value,
        img_check_proteccion:document.getElementById("img_check_proteccion").value,
        ob_check_herramientas:document.getElementById("ob_check_herramientas").value,
        doc_check_herramientas:document.getElementById("doc_check_herramientas").value,
        img_check_herramientas:document.getElementById("img_check_herramientas").value,
        ob_check_maquinaria:document.getElementById("ob_check_maquinaria").value,
        doc_check_maquinaria:document.getElementById("doc_check_maquinaria").value,
        img_check_maquinaria:document.getElementById("img_check_maquinaria").value,
        id_check_list_m:document.getElementById("id_check_list_m").value,
        id_cliente_m:document.getElementById("id_cliente_m").value,

    }

    console.log(datos_formulario, "datos formulario")

    let formulario = new FormData(document.getElementById("modificar_mejora"))
    fetch('api.php/modificar-mejora', {
        method: "POST",
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(datos_formulario)
    }).then((response) => {

        Swal.fire({
            title: 'Mejora modificada exitosamente',
            showDenyButton: false,
            showCancelButton: false,
            confirmButtonText: 'Ok',
        }).then((result) => {
            location.reload();
        })

        //Mensaje Cliente
        crearNotificacion("Se ah modificado una mejora", 0, 1, document.getElementById('id_cliente_m').value, 0, "modificar_mejora")

        //Mensaje Administrativo
        fetch("api.php/personal_administrativo", {
                method: "get"
            }).then(response => response.json())
            .then((datos) => {

                console.dir(datos)

                for (const key in datos) {

                    crearNotificacion("El Profesional a modificado una mejora", 0, 0, datos[key].id_personal, 0, "modificar_mejora")

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