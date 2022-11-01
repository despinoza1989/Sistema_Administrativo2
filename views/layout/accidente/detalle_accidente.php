<div class="card-body" style="margin: 2em 5em;">
    <h2> Datos de la Empresa </h2>
    <br>
    <form id="registro_cliente" class="row g-3 needs-validation">
        <div class="col-md-6">
            <label for="rol_cliente" class="form-label">Rol</label>
            <input type="text" class="form-control" id="rol_cliente" name="rol_cliente" disabled  required>
        </div>

        <div class="col-md-6">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente" disabled  required>
        </div>

        <div class="col-md-6">
            <label for="tipo_rubro" class="form-label">Rubro</label>
            <input type="text" class="form-control" id="tipo_rubro" name="tipo_rubro" disabled  required>
        </div>

        <div class="col-md-3">
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

        <br><br><br>
        <h2>Detalle del Accidente</h2>
        <br><br><br>
        
        <div class="col-md-3">
            <div class="mb-2">
                <label for="cantidad_personas" class="form-label">Cantidad de Personas Involucradas</label>
                <input type="text" class="form-control" id="cantidad_personas" name="cantidad_personas" disabled required>
            </div>

            <div class="mb-2">
                <label for="fecha_accidente" class="form-label">Fecha del Accidente</label>
                <input type="date" class="form-control" id="fecha_accidente" name="fecha_accidente" disabled required>
            </div>
        </div>        
            <div class="col-md-6">
                <label for="detalle_accidente" class="form-label" >Detalles del Accidente</label>
                <textarea type="text" class="form-control" id="detalle_accidente" name="detalle_accidente" rows="3" required style="height: 300px;" disabled></textarea>
        </div>

        <input type="hidden" id="id_reporte_accidente" name="id_reporte_accidente" value="<?php echo $datos['id_reporte_accidente'] ?>">

    </form>

</div>


    <script>

(function(){

document.getElementById('id_reporte_accidente').addEventListener('change', onChangeRut);

onChangeRut({})

})()

function onChangeRut(event){

    var id_reporte_accidente= document.getElementById('id_reporte_accidente').value;
    
    console.log(id_reporte_accidente)

    if(id_reporte_accidente && id_reporte_accidente>1){

        fetch("api.php/reporte-accidente/" + id_reporte_accidente, {
            method: "get"            
        }).then(response=>response.json())
        .then((datos)=>{

            document.getElementById("id_reporte_accidente").value=datos.id_reporte_accidente;
            document.getElementById("rol_cliente").value=datos.rol_cliente;
            document.getElementById('razon_social_cliente').value=datos.razon_social_cliente;
            document.getElementById('tipo_rubro').value=datos.tipo_rubro;
            document.getElementById('telefono_cliente').value=datos.telefono_cliente;
            document.getElementById('direccion_cliente').value=datos.direccion_cliente;
            document.getElementById('email_cliente').value=datos.email_cliente;
            document.getElementById("cantidad_personas").value=datos.cantidad_personas;
            document.getElementById("fecha_accidente").value=datos.fecha_accidente;
            document.getElementById("detalle_accidente").value=datos.detalle_accidente;

        })

    }
}


</script>