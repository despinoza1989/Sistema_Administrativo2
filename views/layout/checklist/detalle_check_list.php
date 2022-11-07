<div class="card-body" style="margin: 2em 5em;">
    <h1> Lista de Check </h1>
    <br>
    <br>
    <h2> Profesional a Cargo</h2>
    <br>
    <form id="registro_check" class="row g-3 needs-validation">

        <input type="hidden" id="id_check_list" name="id_check_list" value="<?php echo $datos_check_list['id_check_list'] ?>">

        <div class="container">
            <div class="row">
                <!-- ROW -->

                <div class="col-md-6">
                    <label for="rut_personal" class="form-label">Rut</label>
                    <input type="text" class="form-control" id="rut_personal" name="rut_personal"
                         disabled required>
                </div>
                <div class="col-md-3">
                    <label for="nombre_personal" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre_personal" name="nombre_personal"
                         disabled required>
                    <div class="valid-feedback">
                        Favor de introducir un nombre Valido
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="apellidos_personal" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos_personal" name="apellidos_personal"
                         disabled required>
                    <div class="valid-feedback">
                        Favor de introducir un apellido Valido
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="telefono_personal" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono_personal" name="telefono_personal"
                         disabled required>
                    <div class="invalid-feedback">
                        Favor de introducir un telefono valido
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="email_personal" class="form-label">Correo</label>
                    <input type="text" class="form-control" id="email_personal" name="email_personal"
                        change="onChangeRol"  disabled required>
                    <div class="invalid-feedback">
                        Favor de introducir un correo Valido
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <h2>Selección de Cliente</h2>
                <br>

                <div class="col-md-6">
                    <label for="rol_cliente" class="form-label">Rol</label>
                    <input class="form-control" id="rol_cliente" name="rol_cliente"
                         disabled required>
                    <div class="invalid-feedback">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="razon_social_cliente" class="form-label">Razón Social</label>
                    <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente"
                        disabled required>
                    <div class="invalid-feedback">
                        Favor de escoger una opcion valida
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="telefono_cliente" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" disabled
                        required>
                    <div class="invalid-feedback">
                        Favor de introducir un telefono Valido
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="direccion_cliente" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" disabled
                        required>
                    <div class="invalid-feedback">
                        Favor de introducir una direccion Valido
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="email_cliente" class="form-label">E-mail</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" id="email_cliente" name="email_cliente"
                            aria-describedby="inputGroupPrepend" disabled required>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- COL 1 -->


                    <div class="mb-2">
                        <label for="fecha_check_list" class="form-label">Fecha Check-List</label>
                        <input type="datetime-local" class="form-control" id="fecha_check_list" name="fecha_check_list"
                            disabled required>
                    </div>
                </div>
                <br>
                <h2>Chequeos Generales </h2>

            </div><!-- COL 1 -->
            <br>
            <div class="col-5">
                <!-- COL 2 -->

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="senaleticas" name="senaleticas" disabled
                        required>
                    <label class="form-check-label" for="senaleticas">
                        Señaleticas
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="estado_contratos" name="estado_contratos"
                        disabled required>
                    <label class="form-check-label" for="estado_contratos">
                        Estado de contratos
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="estado_extintores" name="estado_extintores"
                        disabled required>
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

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="instalaciones_sanitarias"
                        name="instalaciones_sanitarias" disabled required>
                    <label class="form-check-label" for="instalaciones_sanitarias">
                        Instalaciones sanitarias
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="libro_asistencia" name="libro_asistencia"
                        disabled required>
                    <label class="form-check-label" for="libro_asistencia">
                        Libro de asistencia
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="alarma_incendios" name="alarma_incendios"
                        disabled required>
                    <label class="form-check-label" for="alarma_incendios">
                        Alarma de incendios
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="alumbrado_emergencia"
                        name="alumbrado_emergencia" disabled required>
                    <label class="form-check-label" for="alumbrado_emergencia">
                        Alumbrado de emergencia
                    </label>
                </div>

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
                    <input class="form-check-input" type="checkbox" id="agua_potable" name="agua_potable" disabled
                        required>
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
                <br>
                <div class="mb-2">
                    <label for="obs_check_general" class="form-label">Observación Chequeo General</label>
                    <textarea type="text" class="form-control" id="obs_check_general" name="obs_check_general" rows="3"
                        required style="height: 200px;" disabled required></textarea>
                </div>
                <br>
                <h2>Chequeos de Protección </h2>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="protectores_auditivos"
                        name="protectores_auditivos" disabled required>
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

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="zapato_seguridad" name="zapato_seguridad"
                        disabled required>
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

                <br>
                <div class="mb-2">
                    <label for="obs_check_proteccion" class="form-label">Observación Chequeo Protección</label>
                    <textarea type="text" class="form-control" id="obs_check_proteccion" name="obs_check_proteccion"
                        rows="3" required style="height: 200px;" disabled required></textarea>
                </div>

                <br>
                <h2>Chequeos de Herramientas </h2>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="herramientas_adecuadas"
                        name="herramientas_adecuadas" disabled required>
                    <label class="form-check-label" for="herramientas_adecuadas">
                        Herramientas adecuadas
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="inspeccion_materiales"
                        name="inspeccion_materiales" disabled required>
                    <label class="form-check-label" for="inspeccion_materiales">
                        Inspección materiales
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="cableado_herramientas"
                        name="cableado_herramientas" disabled required>
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

                <br>
                <div class="mb-2">
                    <label for="obs_check_herramientas" class="form-label">Observación Chequeo Herramientas</label>
                    <textarea type="text" class="form-control" id="obs_check_herramientas" name="obs_check_herramientas"
                        rows="3" required style="height: 200px;" disabled required></textarea>
                </div>
                <br>
                <h2>Chequeos de Maquinarias </h2>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="luces_maquinarias" name="luces_maquinarias"
                        disabled required>
                    <label class="form-check-label" for="luces_maquinarias">
                        Luces de maquinarias
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="estanque_combustible"
                        name="estanque_combustible" disabled required>
                    <label class="form-check-label" for="estanque_combustible">
                        Estanque de combustible
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="motor_maquinaria" name="motor_maquinaria"
                        disabled required>
                    <label class="form-check-label" for="motor_maquinaria">
                        Motor de maquinaria
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="frenos_maquinaria" name="frenos_maquinaria"
                        disabled required>
                    <label class="form-check-label" for="frenos_maquinaria">
                        Frenos de maquinaria
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="boton_emergencia_maq"
                        name="boton_emergencia_maq" disabled required>
                    <label class="form-check-label" for="boton_emergencia_maq">
                        Boton de emergencia maquinaria
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="esp_tecnicas_maq" name="esp_tecnicas_maq"
                        disabled required>
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

                <br>
                <div class="mb-2">
                    <label for="obs_check_maquinaria" class="form-label">Observación Chequeo Maquinaria</label>
                    <textarea type="text" class="form-control" id="obs_check_maquinaria" name="obs_check_maquinaria"
                        rows="3" required style="height: 200px;" disabled required></textarea>
                </div>
                <br>

            </div><!-- / COL 2 -->

        </div><!-- ROW -->

        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_personal_ckl" name="id_personal_ckl"
            value="<?php echo $datosusuario['id_personal']?>">


    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-warning col-2" href="index.php?view=listado-check-list">Volver Atrás</a>
    </div>
</div>

<script>
(function() {

    document.getElementById('id_check_list').addEventListener('change', onChangeDetallecheckList)
    document.getElementById('id_check_list').value = document.getElementById('id_check_list').value;

    onChangeDetallecheckList({})

})()

function onChangeDetallecheckList(event) {

    var id_check_list = document.getElementById('id_check_list').value;
    console.log(id_check_list)

    if (id_check_list && id_check_list > 1) {

        fetch("api.php/check-list/" + id_check_list, {
                method: "get"
            }).then(response => response.json())
            .then((datos) => {

                console.dir(datos)

                document.getElementById('rut_personal').value = datos.rut_personal;
                document.getElementById('nombre_personal').value = datos.nombre_personal;
                document.getElementById('apellidos_personal').value = datos.apellidos_personal;
                document.getElementById('telefono_personal').value = datos.telefono_personal;
                document.getElementById('email_personal').value = datos.email_personal;

                document.getElementById('rol_cliente').value = datos.rol_cliente;
                document.getElementById('razon_social_cliente').value = datos.razon_social_cliente;
                document.getElementById('telefono_cliente').value = datos.telefono_cliente;
                document.getElementById('direccion_cliente').value = datos.direccion_cliente;
                document.getElementById('email_cliente').value = datos.email_cliente;

                document.getElementById('fecha_check_list').value = datos.fecha_check_list;

                document.getElementById('obs_check_general').value = datos.obs_check_general;
        


            })

    }

}
</script>