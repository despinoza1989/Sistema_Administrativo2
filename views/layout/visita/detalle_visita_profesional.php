 <!-- BARRA DE MENUS LATERAL-->
 <div class="card-body" style="margin: 2em 5em;">
     <h1> Detalle Visita en Terreno</h1>
     <br>
     <br>
     <h2> Datos Profesional a Cargo</h2>
     <br>
     <form class="row g-3 needs-validation">

         <input type="hidden" id="id_visita_terreno" name="id_visita_terreno" value="<?php echo $datos_visita['id_visita_terreno']?>">

         <div class="col-md-6">
             <label for="rut_personal" class="form-label">Rut</label>
             <input type="text" class="form-control" id="rut_personal" name="rut_personal" disabled required>
         </div>
         <div class="col-md-3">
             <label for="nombre_personal" class="form-label">Nombre</label>
             <input type="text" class="form-control" id="nombre_personal" name="nombre_personal" disabled required>
             <div class="valid-feedback">
                 Favor de introducir un nombre Valido
             </div>
         </div>
         <div class="col-md-3">
             <label for="apellidos_personal" class="form-label">Apellidos</label>
             <input type="text" class="form-control" id="apellidos_personal" name="apellidos_personal" disabled
                 required>
             <div class="valid-feedback">
                 Favor de introducir un apellido Valido
             </div>
         </div>
         <div class="col-md-6">
             <label for="telefono_personal" class="form-label">Telefono</label>
             <input type="text" class="form-control" id="telefono_personal" name="telefono_personal" disabled required>
             <div class="invalid-feedback">
                 Favor de introducir un telefono valido
             </div>
         </div>
         <div class="col-md-6">
             <label for="email_personal" class="form-label">Correo</label>
             <input type="text" class="form-control" id="email_personal" name="email_personal" disabled required>
             <div class="invalid-feedback">
                 Favor de introducir un correo Valido
             </div>
         </div>
         <br>
         <br>
         <h2>Datos de Cliente</h2>
         <br>

         <div class="col-md-6">
             <label for="rol_cliente" class="form-label">Rol</label>
             <input class="form-control" id="rol_cliente" name="rol_cliente" disabled required>
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
             <label for="fecha_visita" class="form-label">Fecha Visita</label>
             <input type="datetime-local" class="form-control" id="fecha_visita" name="fecha_visita" disabled required>
             <div class="invalid-feedback">
                 Favor de introducir una fecha valida
             </div>
         </div>
         <div class="col-md-6">
             <label for="motivo_visita" class="form-label">Motivo Visita</label>
             <textarea type="text" class="form-control" rows="10" cols="40" id="motivo_visita" name="motivo_visita"
                 disabled></textarea>
             <div class="invalid-feedback">
             </div>
         </div>

         <input type="hidden" id="id_personal_vt" name="id_personal_vt" value="<?php echo $datosusuario['id_personal']?>">
         <input type="hidden" id="id_cliente_vt" name="id_cliente_vt" value="1">

     </form>
     <br>
     <br>
     <div class="d-grid gap-2 d-md-flex justify-content-md-end">
         <a class="btn btn-warning col-2" href="index.php?view=listado-visita-cliente">Volver Atrás</a>
     </div>
 </div>

 <script>

(function() {

document.getElementById('id_visita_terreno').addEventListener('change', onChangeDetalleVisitaTerrenoProfesional)
document.getElementById('id_visita_terreno').value = document.getElementById('id_visita_terreno').value;

onChangeDetalleVisitaTerrenoProfesional({})

})()

function onChangeDetalleVisitaTerrenoProfesional(event) {

    var id_visita_terreno=document.getElementById('id_visita_terreno').value;
    console.log(id_visita_terreno)

    if (id_visita_terreno && id_visita_terreno > 1) {

        fetch("api.php/visita-terreno/" + id_visita_terreno, {
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
                
            document.getElementById('fecha_visita').value = datos.fecha_visita;
            document.getElementById('motivo_visita').value = datos.motivo_visita;


        })

    }

}
</script>






































