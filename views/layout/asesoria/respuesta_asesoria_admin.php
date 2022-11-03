<div class="card-body" style="margin: 2em 5em;">
    <h1> Respuesta Asesoría </h1>
    <br>
    <br>
    <h2> Cliente Solicitante </h2>
    <br>
    <form id="reportar_asesoria" class="row g-3 needs-validation">

        <input type="hidden" id="id_solicitud_asesoria_ra" name="id_solicitud_asesoria_ra"
            value="<?php echo $datos_solicitud['id_solicitud_asesoria'] ?>">


        <div class="col-md-6">
            <label for="tipo_asesoria" class="form-label">Tipo de Asesoría</label>
            <input type="text" class="form-control" placeholder="" id="tipo_asesoria" name="tipo_asesoria" disabled
                required>
        </div>

        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <input type="text" class="form-control" placeholder="" id="rol_cliente" name="rol_cliente" disabled
                required>
        </div>

        <div class="col-md-6">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" placeholder="" id="razon_social_cliente" name="razon_social_cliente"
                disabled required>
        </div>

        <div class="col-md-6">
            <label for="telefono_cliente" class="form-label">Teléfono</label>
            <input type="text" class="form-control" placeholder="" id="telefono_cliente" name="telefono_cliente"
                disabled required>
        </div>

        <div class="col-md-6">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" placeholder="" id="direccion_cliente" name="direccion_cliente"
                disabled required>
        </div>

        <div class="col-md-6">
            <label for="email_cliente" class="form-label">Email</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="" id="email_cliente" name="email_cliente" disabled
                    required>
            </div>
        </div>

        <div class="col-md-12">
            <label for="detalle_asesoria" class="form-label">Detalle de la Asesoría</label>
            <textarea type="text" class="form-control" rows="10" cols="40" id="detalle_asesoria" name="detalle_asesoria"
                disabled></textarea>
            <div class="invalid-feedback">
            </div>
        </div>



        <br>
        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_personal_sa" name="id_personal_sa"
            value="<?php echo $datosusuario['id_personal'] ?>">


    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-warning col-2" href="index.php?view=listar-asesoria-admin">Volver Atrás</a>
    </div>
</div>


<script>
(function() {

    document.getElementById('id_solicitud_asesoria_ra').addEventListener('change', onChangeAsesoria)
    document.getElementById('id_solicitud_asesoria_ra').value = document.getElementById('id_solicitud_asesoria_ra')
        .value;

    onChangeAsesoria({})

})()

function onChangeAsesoria(event) {

    var id_solicitud_asesoria = document.getElementById('id_solicitud_asesoria_ra').value;
    console.log(id_solicitud_asesoria)

    if (id_solicitud_asesoria && id_solicitud_asesoria > 1) {

        fetch("api.php/solicitud-asesoria/" + id_solicitud_asesoria, {
                method: "get"
            }).then(response => response.json())
            .then((datos) => {

                console.dir(datos)

                document.getElementById('id_solicitud_asesoria_ra').value = datos.id_solicitud_asesoria;
                document.getElementById('tipo_asesoria').value = datos.tipo_asesoria;
                document.getElementById('rol_cliente').value = datos.rol_cliente;
                document.getElementById('razon_social_cliente').value = datos.razon_social_cliente;
                document.getElementById('telefono_cliente').value = datos.telefono_cliente;
                document.getElementById('direccion_cliente').value = datos.direccion_cliente;
                document.getElementById('email_cliente').value = datos.email_cliente;
                document.getElementById('detalle_asesoria').value = datos.detalle_asesoria;

            })

    }

}





function respuestaAsesoria() {
    var respuesta_asesoria = document.getElementById("respuesta_asesoria").value;
    console.log(respuesta_asesoria)


    if (respuesta_asesoria == undefined || respuesta_asesoria == null || respuesta_asesoria.trim() == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Se debe de ingresar una respuesta a la asesoría',
        })
        return;

    }


    let formulario = new FormData(document.getElementById("reportar_asesoria"))
    fetch('index.php?view=respuesta-asesoria', {
        method: "post",
        body: formulario
    }).then((response) => {

        Swal.fire({
            title: 'Asesoria reportada exitosamente',
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