<div class="card-body" style="margin: 2em 5em;">
    <center><h1>Actualizar de Contrato</h1></center>
    <br>

    <form id="actualizar_contrato" class="row g-3 needs-validation" novalidate>
        <h2> Datos del Cliente </h2>
        <div class="col-md-6">
        <label for="rol_cliente" class="form-label">Rol</label>
            <input type="text" class="form-control" id="rol_cliente" name="rol_cliente" value="" disabled required>
        </div>

        <div class="col-md-6">
            <label for="tipo_rubro" class="form-label">Rubro</label>
            <input type="text" class="form-control" id="tipo_rubro" name="tipo_rubro" value="" disabled required>
        </div>

        <div class="col-md-6">
            <label for="razon_social_cliente" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social_cliente" name="razon_social_cliente" disabled
                value="" required>
        </div>

        <div class="col-md-6">
            <label for="email_cliente" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="email_cliente" name="email_cliente"
                    aria-describedby="inputGroupPrepend" disabled required>
            </div>
        </div>

        <div class="col-md-6">
            <label for="direccion_cliente" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" disabled required>
        </div>

        <div class="col-md-3">
            <label for="telefono_cliente" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" disabled required>
        </div>
        <br><br>          
        <h2>Datos para Contrato</h2>

        <div class="col-md-2">
            <label for="id_plan_servicio_c" class="form-label">Tipo Plan</label>
            <select class="form-select" id="id_plan_servicio_c" name="id_plan_servicio_c" required>
                <option selected disabled value="">Seleccione el Tipo de Plan</option>
                <?php foreach ($datos_plan as $row){ ?>
                <option value="<?php echo $row["id_plan_servicio"] ?>"><?php echo $row["nombre_plan"] ?></option>
                <?php } ?>
            </select>
        </div>
               
        <div class="col-md-2">
            <label for="id_tipo_documento_c" class="form-label">Tipo Documento</label>
            <select class="form-select" id="id_tipo_documento_c" name="id_tipo_documento_c" required>
                <option selected disabled value="">Seleccione el Tipo de Documento</option>
                <?php foreach ($datos_documento as $row){ ?>
                <option value="<?php echo $row["id_tipo_documento"] ?>"><?php echo $row["tipo_documento"] ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="col-md-1">
            <label for="monto_plan" class="form-label">Monto del Plan</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">$</span>
                <input type="text" class="form-control" id="monto_plan" name="monto_plan"
                    aria-describedby="inputGroupPrepend" disabled required>
            </div>
        </div>
        <div class="col-md-2">
            <label for="fecha_inicio_c" class="form-label">Fecha de Incio del Contrato</label>
            <input type="date" class="form-control" id="fecha_inicio_c" name="fecha_inicio_c" required>
        </div>

        <div class="col-md-2">
            <label for="fecha_fin_c" class="form-label">Fecha de Fin del Contrato</label>
            <input type="date" class="form-control" id="fecha_fin_c" name="fecha_fin_c" disabled required>
        </div>

        <div class="col-md-2">
            <label for="cantidad_meses" class="form-label">Cant. Meses de Vigencias</label>
            <input type="number" class="form-control" id="cantidad_meses" name="cantidad_meses" maxlength="2" min="1" max="12" required>
        </div>

        <div class="col-md-1">
            <label for="dia_pago" class="form-label">Día de Pago</label>
            <input type="text" class="form-control" id="dia_pago" name="dia_pago" required>
        </div>

        <div class="col-md-12">
            <label for="descripcion_plan" class="form-label">Descripción del Plan</label>
            <input type="text" class="form-control" id="descripcion_plan" name="descripcion_plan" disabled required>
        </div>


        <br><br><br><br>

        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_contrato" name="id_contrato" value="<?php echo $datos_contrato['id_contrato'] ?>">
        <input type="hidden" id="finalizado" name="finalizado" value="">
        <input type="hidden" id="id_cliente_c" name="id_cliente_c" value="">

    </form>
    <br><br><br>


    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="actualizarContrato()">Actualizar Contrato</button>

    </div>
</div>

<script>


    (function() {

        document.getElementById('id_contrato').addEventListener('change', onChangeIdContrato)

        onChangeIdContrato({})

    })()

    function onChangeIdContrato(event) {

        var id_contrato = document.getElementById('id_contrato').value;

        if (id_contrato && id_contrato > 0) {

            fetch("api.php/contrato/" + id_contrato, {
                    method: "get"
                }).then(response => response.json())
                .then((datos) => {

                    console.dir(datos)
                    document.getElementById('id_contrato').value = datos.id_contrato;
                    document.getElementById('id_cliente_c').value = datos.id_cliente_c;
                    document.getElementById('rol_cliente').value = datos.rol_cliente;
                    document.getElementById('tipo_rubro').value = datos.tipo_rubro;
                    document.getElementById('razon_social_cliente').value = datos.razon_social_cliente;
                    document.getElementById('email_cliente').value = datos.email_cliente;
                    document.getElementById('direccion_cliente').value = datos.direccion_cliente;
                    document.getElementById('telefono_cliente').value = datos.telefono_cliente;

                    
                    document.getElementById('finalizado').value = datos.finalizado;
                    document.getElementById('id_plan_servicio_c').value = datos.id_plan_servicio_c;
                    document.getElementById('id_tipo_documento_c').value = datos.id_tipo_documento_c;
                    document.getElementById('monto_plan').value = datos.monto_plan;
                    document.getElementById('fecha_inicio_c').value = datos.fecha_inicio_c;
                    document.getElementById('fecha_fin_c').value = datos.fecha_fin_c;
                    document.getElementById('dia_pago').value = datos.dia_pago;
                    document.getElementById('descripcion_plan').value = datos.descripcion_plan;
                    
                    

                })

        }

    }

    
    function actualizarContrato(){

        var fecha_inicio_c=document.getElementById("fecha_inicio_c").value;
        var fecha_fin_c=document.getElementById("fecha_fin_c").value;
        var cantidad_meses=document.getElementById("cantidad_meses").value;
        var dia_pago=document.getElementById("dia_pago").value;
        var id_cliente_c=document.getElementById("id_cliente_c").value;
        var id_plan_servicio_c=document.getElementById("id_plan_servicio_c").value;
        var id_tipo_documento_c=document.getElementById("id_tipo_documento_c").value;
        

        if(id_plan_servicio_c==undefined || id_plan_servicio_c==null || id_plan_servicio_c.trim()==""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se seleccionar un Tipo de Plan',                
                })            
            return;

        }

        if(id_tipo_documento_c==undefined || id_tipo_documento_c==null || id_tipo_documento_c.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe seleccionar el Tipo de Documento',                
                })            
            return;
        }


        if(fecha_inicio_c==undefined || fecha_inicio_c==null || fecha_inicio_c.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe establecer la Fecha de Inicio del Contrato',                
                })            
            return;

        }

        if(fecha_inicio_c<fecha_fin_c ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Contrato Aun Vigente',                
                })            
            return;

        }

        if(cantidad_meses==undefined || cantidad_meses==null || cantidad_meses.trim()=="" || cantidad_meses>12){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El contrato no puede ser por una vigencia mayor a los 12 Meses',                
                })            
            return;

        }

        

        var fecha_inicio = new Date(fecha_inicio_c);
        fecha_inicio.setHours(fecha_inicio.getHours() + 3);
        var fecha_fin = new Date(fecha_inicio_c);
        fecha_fin.setHours(fecha_fin.getHours() + 3);
        fecha_fin.setMonth(fecha_fin.getMonth() + (new Number(cantidad_meses)));
        
        console.log(fecha_inicio, 'fecha inicio');
        console.log(fecha_fin, 'fecha fin');
        
        var pago_servicio=[];

        for (let index = 0; index < (new Number(cantidad_meses)); index++) {

            var fecha_vencimiento=new Date(fecha_inicio_c);

            fecha_vencimiento.setHours(fecha_vencimiento.getHours() + 3);
            fecha_vencimiento.setMonth(fecha_vencimiento.getMonth() + (index + 1));            
            fecha_vencimiento.setDate(dia_pago);
            
            pago_servicio.push({
                estado_pago:0,
                monto_pago:document.getElementById("monto_plan").value,
                fecha_vencimiento:fecha_vencimiento.toISOString(),
                id_contrato_ps:0,
            })
        }
        
        if(dia_pago==undefined || dia_pago==null || dia_pago.trim()==""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar el Día de Pago',                
                })            
            return;

        }

        let request = {

            accion: 'crear',

            contrato: {

                fecha_inicio_c: fecha_inicio.toISOString(),
                fecha_fin_c: fecha_fin.toISOString(),
                dia_pago: dia_pago,
                id_cliente_c: id_cliente_c,
                id_plan_servicio_c: id_plan_servicio_c,
                id_tipo_documento_c: id_tipo_documento_c,
                
            },

            pago_servicio: pago_servicio,

        }


        let formulario = new FormData(document.getElementById("actualizar_contrato"))
        
        fetch('api.php/contrato', {
            method: "post",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(request)
        }).then((response) => {
            console.log(response)
            Swal.fire({
                title: 'Contrato registrado exitosamente',
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