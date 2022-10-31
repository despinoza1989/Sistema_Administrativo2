<div class="card-body" style="margin: 2em 5em;">
    <h1> Detalle de Capacitación </h1>
    <br>
    <br>
    <h2> Profesional </h2>
    <br>
    <form id="crear_capacitacion" class="row g-3 needs-validation">

        <input type="hidden" id="id_crear_capacitacion" name="id_crear_capacitacion" value="<?php echo $datos_capacitacion['id_crear_capacitacion'] ?>">

        <div class="col-md-6">
            <label for="rut_personal" class="form-label">Rut</label>
            <input type="text" class="form-control" id="rut_personal" name="rut_personal" disabled required>
        </div>
        <div class="col-md-6">
            <label for="nombre_personal" class="form-label">Nombre Personal</label>
            <input type="text" class="form-control" id="nombre_personal" name="nombre_personal" disabled required>
        </div>
        <div class="col-md-6">
            <label for="apellidos_personal" class="form-label">Apellido Personal</label>
            <input type="text" class="form-control" id="apellidos_personal" name="apellidos_personal" disabled required>
        </div>
        <div class="col-md-6">
            <label for="telefono_personal" class="form-label">Teléfono Personal</label>
            <input type="text" class="form-control" id="telefono_personal" name="telefono_personal" disabled required>
        </div>

        <div class="col-md-6">
            <label for="email_personal" class="form-label">Email Personal</label>
            <input type="text" class="form-control" id="email_personal" name="email_personal" disabled required>
        </div>

        <br>
        <br>
        <h2>Cliente a Capacitar</h2>
        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <input type="text" class="form-control" id="rol_cliente" name="rol_cliente" disabled required>
        </div>
        <div class="col-md-6">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente" disabled required>
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
                <input type="text" class="form-control" id="email_cliente" name="email_cliente" aria-describedby="inputGroupPrepend" disabled required>
            </div>
        </div>
        <br><br>
        <h2>Datos de Capacitación</h2>
        <div class="col-md-6">
            <label for="nombre_capacitacion" class="form-label">Nombre Capacitación</label>
            <input type="text" class="form-control" id="nombre_capacitacion" name="nombre_capacitacion" disabled required>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="col-md-6">
            <label for="fecha_capacitacion" class="form-label">Fecha a Realizar Capacitación</label>
            <input type="date" class="form-control" id="fecha_capacitacion" name="fecha_capacitacion"  disabled required>
        </div>
        <div class="col-md-6">
            <label for="tipo_personal_capacitacion" class="form-label">Tipo Personal a Capacitar</label>
            <input type="text" class="form-control" id="tipo_personal_capacitacion" name="tipo_personal_capacitacion" disabled required>
        </div>
        <div class="col-md-6">
            <label for="link_capacitacion" class="form-label">URL de Directorio de Archivos</label>
            <div class="input-group has-validation">
                <span class="input-group-text" >https://nma.com/drive</span>
                <input type="text" class="form-control" id="link_capacitacion" name="link_capacitacion" aria-describedby="link_capacitacion" disabled >
            </div>
        </div>

        <input type="hidden" id="accion" name="accion" value="registrar">

    </form>

</div>
<script>

    (function(){

    document.getElementById('id_crear_capacitacion').addEventListener('change', onChangeDetalleCapacitacion)
    document.getElementById('id_crear_capacitacion').value = document.getElementById('id_crear_capacitacion').value;
        
    onChangeDetalleCapacitacion({})
    })()

    function onChangeDetalleCapacitacion(event){

    var id_crear_capacitacion= document.getElementById('id_crear_capacitacion').value;

        if(id_crear_capacitacion && id_crear_capacitacion>0){

            fetch("api.php/detalle-capacitacion/" + id_crear_capacitacion, {
                method: "get"            
            }).then(response=>response.json())
            .then((datos)=>{

                console.dir(datos)

                document.getElementById('nombre_capacitacion').value=datos.nombre_capacitacion;
                document.getElementById('fecha_capacitacion').value=datos.fecha_capacitacion;
                document.getElementById('rut_personal').value=datos.rut_personal;
                document.getElementById('nombre_personal').value=datos.nombre_personal;
                document.getElementById('apellidos_personal').value=datos.apellidos_personal;
                document.getElementById('telefono_personal').value=datos.telefono_personal;
                document.getElementById('email_personal').value=datos.email_personal;
                document.getElementById('tipo_personal_capacitacion').value=datos.tipo_personal_capacitacion;  
                document.getElementById('rol_cliente').value=datos.rol_cliente;
                document.getElementById('razon_social_cliente').value=datos.razon_social_cliente;
                document.getElementById('telefono_cliente').value=datos.telefono_cliente;
                document.getElementById('direccion_cliente').value=datos.direccion_cliente;
                document.getElementById('email_cliente').value=datos.email_cliente;
                document.getElementById('link_capacitacion').value=datos.link_capacitacion;
            })

        }

    }

</script>
