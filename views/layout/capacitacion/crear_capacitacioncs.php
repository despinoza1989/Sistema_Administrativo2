<div class="card-body" style="margin: 2em 5em;">
    <h1> Crear Capacitación Con Solicitud</h1>
    <br>
    <br>
    <form id="crear_capacitacioncs" class="row g-3 needs-validation">

        <input type="hidden" id="id_solicitud_capacitacion" name="id_solicitud_capacitacion" value="<?php echo $datos_solicitud_capacitacion['id_solicitud_capacitacion'] ?>">
        
        <h2>Cliente a Capacitar</h2>
        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <input type="text" class="form-control" id="rol_cliente" name="rol_cliente" disabled
                required>
            <div class="invalid-feedback">
                Favor de escoger una opcion valida
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
            <div class="invalid-feedback">
                Favor de introducir un telefono Valido
            </div>
        </div>
        <div class="col-md-6">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" disabled required>
            <div class="invalid-feedback">
                Favor de introducir una direccion Valido
            </div>
        </div>
        <br>
        <br>
        <h2>Datos Solicitud</h2>

        <div class="col-md-6">
            <label for="nombre_solicitud_capacitacion" class="form-label">Nombre Capacitación</label>
            <input type="text" class="form-control" id="nombre_solicitud_capacitacion" name="nombre_solicitud_capacitacion" disabled required>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="col-md-6">
            <label for="fecha_solicitud_capacitacion" class="form-label">Fecha Capacitacion</label>
            <input type="date" class="form-control" id="fecha_solicitud_capacitacion" name="fecha_solicitud_capacitacion" disabled  required>
            <div class="invalid-feedback">
                Favor de introducir una fecha valida
            </div>
        </div>
        <div class="col-md-6">
            <label for="tipo_personal_capacitacion" class="form-label">Tipo Personal a Capacitar</label>
            <input type="text" class="form-control" id="tipo_personal_capacitacion" name="tipo_personal_capacitacion" disabled
                required>
            <div class="invalid-feedback">
                Favor de escoger una opcion valida
            </div>
        </div>
        <div class="col-md-6">
            <label for="link_capacitacion" class="form-label">URL de Directorio de Archivos</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="link_capacitacion">https://drive.google.com/drive</span>
                <input type="text" class="form-control" id="link_capacitacion" name="link_capacitacion"
                    aria-describedby="link_capacitacion">
            </div>
        </div>


        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_personal_cc" name="id_personal_cc" value="<?php echo $datosusuario['id_personal'] ?>">
    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="crearCapacitacioncs()">Crear Capacitacion</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
</div>
<script>



    (function(){

    document.getElementById('id_solicitud_capacitacion').addEventListener('change', onChangeCapacitacion)
    document.getElementById('id_solicitud_capacitacion').value = document.getElementById('id_solicitud_capacitacion').value;

    onChangeCapacitacion({})

    })()

    function onChangeCapacitacion(event){

        var id_solicitud_capacitacion= document.getElementById('id_solicitud_capacitacion').value;
        //console.log(id_solicitud_capacitacion)

        if(id_solicitud_capacitacion && id_solicitud_capacitacion>1){

            fetch("api.php/solicitud-capacitacion/" + id_solicitud_capacitacion, {
                method: "get"            
            }).then(response=>response.json())
            .then((datos)=>{

                console.log(datos)

                document.getElementById('id_solicitud_capacitacion').value=datos.id_solicitud_capacitacion;
                document.getElementById('nombre_solicitud_capacitacion').value=datos.nombre_solicitud_capacitacion;
                document.getElementById('fecha_solicitud_capacitacion').value=datos.fecha_solicitud_capacitacion;
                document.getElementById('tipo_personal_capacitacion').value=datos.tipo_personal_capacitacion;
                document.getElementById('rol_cliente').value=datos.rol_cliente;
                document.getElementById('razon_social_cliente').value=datos.razon_social_cliente;
                document.getElementById('telefono_cliente').value=datos.telefono_cliente;
                document.getElementById('direccion_cliente').value=datos.direccion_cliente;


            })

        }

    }




    function crearCapacitacioncs() {
        var link_capacitacion = document.getElementById("link_capacitacion").value;
        console.log(link_capacitacion)

        



        let formulario = new FormData(document.getElementById("crear_capacitacioncs"))
        fetch('index.php?view=crear-capacitacioncs', {
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

