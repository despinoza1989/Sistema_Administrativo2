<div class="card-body" style="margin: 2em 5em;">
    <center><h1>Registro de Contrato</h1></center>
    <br>

    <form id="registro_contrato" class="row g-3 needs-validation" novalidate>
        <h2> Datos del Cliente </h2>
        <div class="col-md-6">
            <label for="id_cliente_c" class="form-label">Rol</label>
            <select class="form-select" id="id_cliente_c" name="id_cliente_c" required>
                <option selected disabled value="">Seleccione el Rol del cliente</option>
                <?php foreach ($datos_cliente as $row){ ?>
                <option value="<?php echo $row["id_cliente"] ?>"><?php echo $row["rol_cliente"] ?></option>
                <?php } ?>
            </select>
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
               
        <div class="col-md-3">
            <label for="id_tipo_documento_c" class="form-label">Tipo Documento</label>
            <select class="form-select" id="id_tipo_documento_c" name="id_tipo_documento_c" required>
                <option selected disabled value="">Seleccione el Tipo de Documento</option>
                <?php foreach ($datos_documento as $row){ ?>
                <option value="<?php echo $row["id_tipo_documento"] ?>"><?php echo $row["tipo_documento"] ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="col-md-2">
            <label for="monto_plan" class="form-label">Monto del Plan</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">$</span>
                <input type="text" class="form-control" id="monto_plan" name="monto_plan"
                    aria-describedby="inputGroupPrepend" disabled required>
            </div>
        </div>
        <div class="col-md-2">
            <label for="fecha_inicio_c" class="form-label">Fecha de Inicio del Contrato</label>
            <input type="date" class="form-control" id="fecha_inicio_c" name="fecha_inicio_c" required>
        </div>

        <div class="col-md-2">
            <label for="fecha_fin_c" class="form-label">Fecha de Término del Contrato</label>
            <input type="date" class="form-control" id="fecha_fin_c" name="fecha_fin_c" required>
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

    </form>
    <br><br><br>


    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="registrarContrato()">Registrar Contrato</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
</div>

<script>


    (function() {

        document.getElementById('id_cliente_c').addEventListener('change', onChangeIdCliente)

    })()

    function onChangeIdCliente(event) {

        var id_cliente = document.getElementById('id_cliente_c').value;

        if (id_cliente && id_cliente > 0) {

            fetch("api.php/cliente/" + id_cliente, {
                    method: "get"
                }).then(response => response.json())
                .then((datos) => {

                    console.dir(datos)

                    //document.getElementById('id_cliente_c').value = datos.id_cliente;
                    document.getElementById('tipo_rubro').value = datos.tipo_rubro;
                    document.getElementById('razon_social_cliente').value = datos.razon_social_cliente;
                    document.getElementById('telefono_cliente').value = datos.telefono_cliente;
                    document.getElementById('direccion_cliente').value = datos.direccion_cliente;
                    document.getElementById('email_cliente').value = datos.email_cliente;

                })

        }

    }

    (function() {

    document.getElementById('id_plan_servicio_c').addEventListener('change', onChangePlan)

    })()

    function onChangePlan(event) {

    var id_plan_servicio = document.getElementById('id_plan_servicio_c').value;

    if (id_plan_servicio && id_plan_servicio > 0) {

        fetch("api.php/plan-servicio/" + id_plan_servicio, {
                method: "get"
            }).then(response => response.json())
            .then((datos) => {

                console.dir(datos)                
                document.getElementById('descripcion_plan').value = datos.descripcion_plan;
                document.getElementById('monto_plan').value = datos.monto_plan;
                document.getElementById('direccion_cliente').value = datos.direccion_cliente;
                document.getElementById('email_cliente').value = datos.email_cliente;

            })

    }

    }

    var lista_id_cliente=[];

    (function(){

        fetch("api.php/contrato", {
                method: "get"            
            }).then(response=>response.json())
            .then((datos)=>{

                lista_id_cliente = datos;
                console.log(datos)


            })
    })() 

    function registrarContrato(){

        var fecha_inicio_c=document.getElementById("fecha_inicio_c").value;
        var fecha_fin_c=document.getElementById("fecha_fin_c").value;
        var dia_pago=document.getElementById("dia_pago").value;
        var id_cliente_c=document.getElementById("id_cliente_c").value;
        var id_plan_servicio_c=document.getElementById("id_plan_servicio_c").value;
        var id_tipo_documento_c=document.getElementById("id_tipo_documento_c").value;
        
        
        

        console.log(id_plan_servicio_c, id_cliente_c, id_tipo_documento_c, fecha_inicio_c, fecha_fin_c, dia_pago)

        if(id_cliente_c==undefined || id_cliente_c==null || id_cliente_c.trim()==""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe seleccionar el Rol del Cliente',                
                })            
            return;

        }

        var id_cliente_existe = lista_id_cliente.filter(cliente=>cliente.id_cliente_c==id_cliente_c).length>0;
        console.log (id_cliente_existe, "ID Existe")
        console.log (lista_id_cliente, "Lista ID")
        if( id_cliente_existe == true ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El Cliente ya tiene contrato generado',                
                })            
            return;

        }

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

        if(fecha_fin_c==undefined || fecha_fin_c==null || fecha_fin_c.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe establecer la Fecha de Término del Contrato',                
                })            
            return;

        }

        var fecha_fin = new Date(fecha_fin_c);
        var fecha_inicio = new Date(fecha_inicio_c);
        var dias_milisegundos = fecha_fin.getTime() - fecha_inicio.getTime();
        var dias_diferencia = dias_milisegundos / (1000 * 60 * 60 * 24)

        console.log(fecha_inicio, 'Fecha Inicio')
        console.log(fecha_fin, 'Fecha Fin')
        console.log(dias_milisegundos, 'diferencia milisegundos')
        console.log(dias_diferencia, 'diferencia dias')

        if (dias_diferencia < 30) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'La fecha debe ser mayor o igual a 30 días',
            })
            return;
        }
        
        if(dia_pago==undefined || dia_pago==null || dia_pago.trim()==""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe ingresar el Día de Pago',                
                })            
            return;

        }

        let formulario = new FormData(document.getElementById("registro_contrato"))
        
        fetch('index.php?view=contrato', {
            method: "post",
            body: formulario
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