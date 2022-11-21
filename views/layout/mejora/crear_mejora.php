<div class="card-body" style="margin: 2em 5em;">
    <h1> Crear Mejora</h1>
    <br>
    <br>
    <h2>Datos de Cliente</h2>
    <br>
    <form id="registro_mejora" class="row g-3 needs-validation">

        <input type="hidden" id="id_check_list" name="id_check_list"
            value="<?php echo $datos_check_list['id_check_list'] ?>">

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

        <!-- COL 1 -->
        <div class="col-md-12">
            <div class="card border-danger">
                <div class="card-header text-center text-danger">
                    <strong>Importante</strong>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Links y Observaciones</h5>
                    <p class="card-text">En caso de que no existan mayores observaciones en base al
                        <strong>Check-List</strong>, favor escribir en los recuadros de link de <strong>documentos,
                            imágenes y observaciones generales</strong> el texto <strong>"sin observaciones".</strong>
                    </p>
                </div>
            </div>
        </div>

        <br>
        <br>

        <!-- COL 2 -->
        <h2>Ingreso de datos Mejoras</h2>
        <br>
        <div class="col-md-3">
            <label for="fecha_check_list" class="form-label">Fecha Check-List</label>
            <input type="datetime-local" class="form-control" id="fecha_check_list" name="fecha_check_list" disabled
                required>
        </div>
        <br>
        <h3> General </h3>
        <br>
        <div class="col-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="senaleticas" name="senaleticas" disabled required>
                <label class="form-check-label" for="senaleticas">
                    Señaleticas
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="estado_contratos" name="estado_contratos" disabled
                    required>
                <label class="form-check-label" for="estado_contratos">
                    Estado de contratos
                </label>
            </div>


            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="estado_extintores" name="estado_extintores" disabled
                    required>
                <label class="form-check-label" for="estado_extintores">
                    Estado de extintores
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="instalaciones_electricas"
                    name="instalaciones_electricas" disabled required>
                <label class="form-check-label" for="instalaciones_electricas">
                    Instalaciones eléctricas
                </label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="instalaciones_sanitarias"
                    name="instalaciones_sanitarias" disabled required>
                <label class="form-check-label" for="instalaciones_sanitarias">
                    Instalaciones sanitarias
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="libro_asistencia" name="libro_asistencia" disabled
                    required>
                <label class="form-check-label" for="libro_asistencia">
                    Libro de asistencia
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="alarma_incendios" name="alarma_incendios" disabled
                    required>
                <label class="form-check-label" for="alarma_incendios">
                    Alarma de incendios
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="alumbrado_emergencia" name="alumbrado_emergencia"
                    disabled required>
                <label class="form-check-label" for="alumbrado_emergencia">
                    Alumbrado de emergencia
                </label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="salidas_emergencia" name="salidas_emergencia"
                    disabled required>
                <label class="form-check-label" for="salidas_emergencia">
                    Salidas de emergencia
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="documentacion_trabajador"
                    name="documentacion_trabajador" disabled required>
                <label class="form-check-label" for="documentacion_trabajador">
                    Documentación trabajador
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="agua_potable" name="agua_potable" disabled required>
                <label class="form-check-label" for="agua_potable">
                    Agua potable
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="centro_mutual" name="centro_mutual" disabled
                    required>
                <label class="form-check-label" for="centro_mutual">
                    Centro mutual
                </label>
            </div>
        </div>
        <div class="col-md-12">
            <label for="obs_check_general" class="form-label">Observación General del Check-List</label>
            <textarea type="text" class="form-control" id="obs_check_general" name="obs_check_general" rows="3" required
                style="height: 200px;" disabled required></textarea>
        </div>
        <div class="col-md-6">
            <label for="doc_check_general" class="form-label">URL de Directorio de Documentos</label>
            <div class="input-group has-validation">
                <span class="input-group-text">https://nma.com/drive</span>
                <input class="form-control" type="text" id="doc_check_general" name="doc_check_general"
                    aria-describedby="doc_check_general">
            </div>
        </div>
        <div class="col-md-6">
            <label for="img_check_general" class="form-label">URL de Directorio de Imagénes</label>
            <div class="input-group has-validation">
                <span class="input-group-text">https://nma.com/drive</span>
                <input class="form-control" type="text" id="img_check_general" name="img_check_general"
                    aria-describedby="img_check_general">
            </div>
        </div>
        <div class="col-md-12">
            <label for="ob_check_general" class="form-label">Observación General sobre documentos e imágenes</label>
            <textarea type="text" class="form-control" id="ob_check_general" name="ob_check_general" rows="3" required
                style="height: 200px;" required></textarea>
        </div>
        <br>
        <h2> Proteccion </h2>
        <br>
        <div class="col-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="protectores_auditivos" name="protectores_auditivos"
                    disabled required>
                <label class="form-check-label" for="protectores_auditivos">
                    Protectores auditivos
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="casco_seguridad" name="casco_seguridad" disabled
                    required>
                <label class="form-check-label" for="defaucasco_seguridadltCheck2">
                    Casco de seguridad
                </label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="zapato_seguridad" name="zapato_seguridad" disabled
                    required>
                <label class="form-check-label" for="zapato_seguridad">
                    Zapatos de seguridad
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="guantes_protectores" name="guantes_protectores"
                    disabled required>
                <label class="form-check-label" for="guantes_protectores">
                    Guantes protectores
                </label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gafas_seguridad" name="gafas_seguridad" disabled
                    required>
                <label class="form-check-label" for="gafas_seguridad">
                    Gafas de seguridad
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="mascarilla_respiratoria"
                    name="mascarilla_respiratoria" disabled required>
                <label class="form-check-label" for="mascarilla_respiratoria">
                    Mascarilla respiratoria
                </label>
            </div>
        </div>
        <div class="col-md-12">
            <label for="obs_check_proteccion" class="form-label">Observación Protección del Check-List</label>
            <textarea type="text" class="form-control" id="obs_check_proteccion" name="obs_check_proteccion" rows="3"
                required style="height: 200px;" disabled required></textarea>
        </div>
        <div class="col-md-6">
            <label for="doc_check_proteccion" class="form-label">URL de Directorio de Documentos</label>
            <div class="input-group has-validation">
                <span class="input-group-text">https://nma.com/drive</span>
                <input class="form-control" type="text" id="doc_check_proteccion" name="doc_check_proteccion"
                    aria-describedby="doc_check_proteccion">
            </div>
        </div>
        <div class="col-md-6">
            <label for="img_check_proteccion" class="form-label">URL de Directorio de Imagénes</label>
            <div class="input-group has-validation">
                <span class="input-group-text">https://nma.com/drive</span>
                <input class="form-control" type="text" id="img_check_proteccion" name="img_check_proteccion"
                    aria-describedby="img_check_proteccion">
            </div>
        </div>
        <div class="col-md-12">
            <label for="ob_check_proteccion" class="form-label">Observación General sobre documentos e imágenes</label>
            <textarea type="text" class="form-control" id="ob_check_proteccion" name="ob_check_proteccion" rows="3"
                required style="height: 200px;" required></textarea>
        </div>
        <!-- COL 2 -->
        <h2> Herramientas </h2>
        <br>
        <div class="col-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="herramientas_adecuadas"
                    name="herramientas_adecuadas" disabled required>
                <label class="form-check-label" for="herramientas_adecuadas">
                    Herramientas adecuadas
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="inspeccion_materiales" name="inspeccion_materiales"
                    disabled required>
                <label class="form-check-label" for="inspeccion_materiales">
                    Inspección materiales
                </label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="cableado_herramientas" name="cableado_herramientas"
                    disabled required>
                <label class="form-check-label" for="cableado_herramientas">
                    Cableado de herramientas
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="proteccion_herramientas"
                    name="proteccion_herramientas" disabled required>
                <label class="form-check-label" for="proteccion_herramientas">
                    Protección de herramientas
                </label>
            </div>
        </div>
        <div class="col-md-12">
            <label for="obs_check_herramientas" class="form-label">Observación Herramientas del Check-List</label>
            <textarea type="text" class="form-control" id="obs_check_herramientas" name="obs_check_herramientas"
                rows="3" required style="height: 200px;" disabled required></textarea>
        </div>
        <div class="col-md-6">
            <label for="doc_check_herramientas" class="form-label">URL de Directorio de Documentos</label>
            <div class="input-group has-validation">
                <span class="input-group-text">https://nma.com/drive</span>
                <input class="form-control" type="text" id="doc_check_herramientas" name="doc_check_herramientas"
                    aria-describedby="doc_check_herramientas">
            </div>
        </div>
        <div class="col-md-6">
            <label for="img_check_herramientas" class="form-label">URL de Directorio de Imagénes</label>
            <div class="input-group has-validation">
                <span class="input-group-text">https://nma.com/drive</span>
                <input class="form-control" type="text" id="img_check_herramientas" name="img_check_herramientas"
                    aria-describedby="img_check_herramientas">
            </div>
        </div>
        <div class="col-md-12">
            <label for="ob_check_herramientas" class="form-label">Observación General sobre documentos e
                imágenes</label>
            <textarea type="text" class="form-control" id="ob_check_herramientas" name="ob_check_herramientas" rows="3"
                required style="height: 200px;" required></textarea>
        </div>
        <h2> Maquinaria </h2>
        <br>
        <div class="col-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="luces_maquinarias" name="luces_maquinarias" disabled
                    required>
                <label class="form-check-label" for="luces_maquinarias">
                    Luces de maquinarias
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="estanque_combustible" name="estanque_combustible"
                    disabled required>
                <label class="form-check-label" for="estanque_combustible">
                    Estanque de combustible
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="motor_maquinaria" name="motor_maquinaria" disabled
                    required>
                <label class="form-check-label" for="motor_maquinaria">
                    Motor de maquinaria
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="frenos_maquinaria" name="frenos_maquinaria" disabled
                    required>
                <label class="form-check-label" for="frenos_maquinaria">
                    Frenos de maquinaria
                </label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="boton_emergencia_maq" name="boton_emergencia_maq"
                    disabled required>
                <label class="form-check-label" for="boton_emergencia_maq">
                    Boton de emergencia maquinaria
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="esp_tecnicas_maq" name="esp_tecnicas_maq" disabled
                    required>
                <label class="form-check-label" for="esp_tecnicas_maq">
                    Especies tecnicas maquinaria
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="insepeccion_maquinaria"
                    name="insepeccion_maquinaria" disabled required>
                <label class="form-check-label" for="insepeccion_maquinaria">
                    Inspección maquinaria
                </label>
            </div>
        </div>
        <div class="col-md-12">
            <label for="obs_check_maquinaria" class="form-label">Observación Maquinaria del Check-List</label>
            <textarea type="text" class="form-control" id="obs_check_maquinaria" name="obs_check_maquinaria" rows="3"
                required style="height: 200px;" disabled required></textarea>
        </div>
        <div class="col-md-6">
            <label for="doc_check_maquinaria" class="form-label">URL de Directorio de Documentos</label>
            <div class="input-group has-validation">
                <span class="input-group-text">https://nma.com/drive</span>
                <input class="form-control" type="text" id="doc_check_maquinaria" name="doc_check_maquinaria"
                    aria-describedby="doc_check_maquinaria">
            </div>
        </div>
        <div class="col-md-6">
            <label for="img_check_maquinaria" class="form-label">URL de Directorio de Imagénes</label>
            <div class="input-group has-validation">
                <span class="input-group-text">https://nma.com/drive</span>
                <input class="form-control" type="text" id="img_check_maquinaria" name="img_check_maquinaria"
                    aria-describedby="img_check_maquinaria">
            </div>
        </div>
        <div class="col-md-12">
            <label for="ob_check_maquinaria" class="form-label">Observación General sobre documentos e imágenes</label>
            <textarea type="text" class="form-control" id="ob_check_maquinaria" name="ob_check_maquinaria" rows="3"
                required style="height: 200px;" required></textarea>
        </div>

        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_check_list_m" name="id_check_list_m" value="">
        <input type="hidden" id="id_cliente_m" name="id_cliente_m" value="">
        <input type="hidden" id="nombre_personal" name="nombre_personal" value="">
        <input type="hidden" id="apellidos_personal" name="apellidos_personal" value="">


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

    document.getElementById('id_check_list').addEventListener('change', onChangeCheckList)
    document.getElementById('id_check_list').value = document.getElementById('id_check_list').value;

    onChangeCheckList({})
    getDetallecheckList()


})()

function onChangeCheckList(event) {

    var id_check_list = document.getElementById('id_check_list').value;
    console.log(id_check_list)

    if (id_check_list && id_check_list > 1) {

        fetch("api.php/check-list/" + id_check_list, {
                method: "get"
            }).then(response => response.json())
            .then((datos) => {

                console.dir(datos)
                document.getElementById('id_check_list_m').value = datos.id_check_list;
                document.getElementById('id_cliente_m').value = datos.id_cliente_ckl;
                document.getElementById('rol_cliente').value = datos.rol_cliente;
                document.getElementById('razon_social_cliente').value = datos.razon_social_cliente;
                document.getElementById('telefono_cliente').value = datos.telefono_cliente;
                document.getElementById('direccion_cliente').value = datos.direccion_cliente;
                document.getElementById('email_cliente').value = datos.email_cliente;

                document.getElementById('fecha_check_list').value = datos.fecha_check_list;
                document.getElementById('obs_check_general').value = datos.obs_check_general;
                document.getElementById('obs_check_proteccion').value = datos.obs_check_proteccion;
                document.getElementById('obs_check_herramientas').value = datos.obs_check_herramientas;
                document.getElementById('obs_check_maquinaria').value = datos.obs_check_maquinaria;
                document.getElementById('nombre_personal').value = datos.nombre_personal;
                document.getElementById('apellidos_personal').value = datos.apellidos_personal;

            })

    }

}

function getDetallecheckList() {

    var id_check_list = document.getElementById('id_check_list').value;
    console.log(id_check_list)
    console.log('getDetallecheckList')

    if (id_check_list && id_check_list > 0) {

        fetch("api.php/detalle-check-list/id-check-list/" + id_check_list, {
                method: "get"
            }).then(response => response.json())
            .then((datos) => {

                console.dir(datos)

                for (const key in datos) {
                    document.getElementById(datos[key].nombre_item).checked = (datos[key].valor_item == 1);
                }

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

        //Mensaje Cliente
        crearNotificacion("Se ah generado una mejora en base al Check-List creado el: " + document.getElementById('fecha_check_list').value.replace('T', ' '), 0, 1, document.getElementById('id_cliente_m').value, 0, "crear_mejora")

        //Mensaje Administrativo
        fetch("api.php/personal_administrativo", {
                method: "get"
            }).then(response => response.json())
            .then((datos) => {

                console.dir(datos)

                for (const key in datos) {

                    crearNotificacion("El Profesional " + document.getElementById('nombre_personal').value + " " + document.getElementById('apellidos_personal').value + " a generado una mejora en base al Check-List creado el: " + document.getElementById('fecha_check_list').value.replace('T', ' ') + " para el cliente " + document.getElementById('razon_social_cliente').value, 0, 0, datos[key].id_personal, 0, "crear_mejora")

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