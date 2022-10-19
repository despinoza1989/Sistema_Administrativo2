<div class="card-body" style="margin: 2em 5em;">
    <h1> Crear Mejora</h1>
    <br>
    <br>
    <h2>Selección de Cliente</h2>
    <br>
    <form class="row g-3 needs-validation">

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
            <input type="text" class="form-control" id="ob_check_general" name="ob_check_general" disabled required>
        </div>
        <div class="col-md-4">
            <label for="doc_check_general" class="form-label">URL de Directorio de Documentos</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="doc_check_general">https://drive.google.com/drive</span>
                <input class="form-control" type="text" id="doc_check_general" name="doc_check_general"
                    aria-describedby="doc_check_general" disabled required>
            </div>
        </div>
        <div class="col-md-4">
            <label for="img_check_general" class="form-label">URL de Directorio de Imagénes</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="img_check_general">https://drive.google.com/drive</span>
                <input class="form-control" type="text" id="img_check_general" name="img_check_general"
                    aria-describedby="img_check_general" disabled required>
            </div>
        </div>
        <br>
        <h2> Proteccion </h2>
        <br>
        <div class="col-md-4">
            <label for="ob_check_proteccion" class="form-label">Observaciones Protección</label>
            <input type="text" class="form-control" id="ob_check_proteccion" name="ob_check_proteccion" disabled
                required>
        </div>
        <div class="col-md-4">
            <label for="doc_check_proteccion" class="form-label">URL de Directorio de Documentos</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="doc_check_proteccion">https://drive.google.com/drive</span>
                <input class="form-control" type="text" id="doc_check_proteccion" name="doc_check_proteccion"
                    aria-describedby="doc_check_proteccion" disabled required>
            </div>
        </div>
        <div class="col-md-4">
            <label for="img_check_proteccion" class="form-label">URL de Directorio de Imagénes</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="img_check_proteccion">https://drive.google.com/drive</span>
                <input class="form-control" type="text" id="img_check_proteccion" name="img_check_proteccion"
                    aria-describedby="img_check_proteccion" disabled required>
            </div>
        </div>
        <h2> Herramientas </h2>
        <br>
        <div class="col-md-4">
            <label for="ob_check_herramientas" class="form-label">Observaciones Herramientas</label>
            <input type="text" class="form-control" id="ob_check_herramientas" name="ob_check_herramientas" disabled
                required>
        </div>
        <div class="col-md-4">
            <label for="doc_check_herramientas" class="form-label">URL de Directorio de Documentos</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="doc_check_herramientas">https://drive.google.com/drive</span>
                <input class="form-control" type="text" id="doc_check_herramientas" name="doc_check_herramientas"
                    aria-describedby="doc_check_herramientas" disabled required>
            </div>
        </div>
        <div class="col-md-4">
            <label for="img_check_herramientas" class="form-label">URL de Directorio de Imagénes</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="img_check_herramientas">https://drive.google.com/drive</span>
                <input class="form-control" type="text" id="img_check_herramientas" name="img_check_herramientas"
                    aria-describedby="img_check_herramientas" disabled required>
            </div>
        </div>
        <h2> Maquinaria </h2>
        <br>
        <div class="col-md-4">
            <label for="ob_check_maquinaria" class="form-label">Observaciones Maquinaria</label>
            <input type="text" class="form-control" id="ob_check_maquinaria" name="ob_check_maquinaria" disabled
                required>
        </div>
        <div class="col-md-4">
            <label for="doc_check_maquinaria" class="form-label">URL de Directorio de Documentos</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="doc_check_maquinaria">https://drive.google.com/drive</span>
                <input class="form-control" type="text" id="doc_check_maquinaria" name="doc_check_maquinaria"
                    aria-describedby="doc_check_maquinaria" disabled required>
            </div>
        </div>
        <div class="col-md-4">
            <label for="img_check_maquinaria" class="form-label">URL de Directorio de Imagénes</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="img_check_maquinaria">https://drive.google.com/drive</span>
                <input class="form-control" type="text" id="img_check_maquinaria" name="img_check_maquinaria"
                    aria-describedby="img_check_maquinaria" disabled required>
            </div>
        </div>


    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-warning col-2" href="index.php?view=listado-mejora">Volver Atrás</a>
    </div>
</div>

<script>
(function() {

    document.getElementById('id_mejoras').addEventListener('change', onChangeDetalleMejoras)
    document.getElementById('id_mejoras').value = document.getElementById('id_mejoras').value;

    onChangeDetalleMejoras({})

})()

function onChangeDetalleMejoras(event) {

    var id_mejoras = document.getElementById('id_mejoras').value;


    if (id_mejoras && id_mejoras > 1) {

        fetch("api.php/mejoras/" + id_mejoras, {
                method: "get"
            }).then(response => response.json())
            .then((datos) => {

                //console.log(datos " Datos api")

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
</script>