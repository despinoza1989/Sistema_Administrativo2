<div class="card-body" style="margin: 2em 5em;">
    <h1> Crear Mejora</h1>
    <br>
    <br>
    <h2> General </h2>
    <br>
    <form id="registro_mejora" class="row g-3 needs-validation">
        <div class="col-md-4">
            <label for="obs_check_general" class="form-label">Observaciones General</label>
            <input type="text" class="form-control" id="obs_check_general" name="obs_check_general" placeholder="Ingrese detalle de la observación" required>
        </div>
        <div class="col-md-4">
            <label for="doc_check_general" class="form-label">Adjuntar documento</label>
            <input class="form-control" type="file" id="doc_check_general" name="doc_check_general" multiple>
        </div>
        <div class="col-md-4">
            <label for="img_check_general" class="form-label">Adjuntar imagen</label>
            <input class="form-control" type="file" id="img_check_general" name="img_check_general" multiple>
        </div>

          <br>
    <h2> Proteccion </h2>
    <br>
    <div class="col-md-4">
            <label for="obs_check_proteccion" class="form-label">Observaciones Protección</label>
            <input type="text" class="form-control" id="obs_check_proteccion" name="obs_check_proteccion" placeholder="Ingrese detalle de la observación" required>
        </div>
        <div class="col-md-4">
            <label for="doc_check_proteccion" class="form-label">Adjuntar documento</label>
            <input class="form-control" type="file" id="doc_check_proteccion" name="doc_check_proteccion" multiple>
        </div>
        <div class="col-md-4">
            <label for="img_check_proteccion" class="form-label">Adjuntar imagen</label>
            <input class="form-control" type="file" id="img_check_proteccion" name="img_check_proteccion" multiple>
        </div>

        <h2> Herramientas </h2>
    <br>
    <div class="col-md-4">
            <label for="obs_check_herramientas" class="form-label">Observaciones Herramientas</label>
            <input type="text" class="form-control" id="obs_check_herramientas" name="obs_check_herramientas" placeholder="Ingrese detalle de la observación" required>
        </div>
        <div class="col-md-4">
            <label for="doc_check_herramientas" class="form-label">Adjuntar documento</label>
            <input class="form-control" type="file" id="doc_check_herramientas" name="doc_check_herramientas" multiple>
        </div>
        <div class="col-md-4">
            <label for="img_check_herramientas" class="form-label">Adjuntar imagen</label>
            <input class="form-control" type="file" id="img_check_herramientas" name="img_check_herramientas" multiple>
        </div>

        <h2> Maquinaria </h2>
    <br>
    <div class="col-md-4">
            <label for="obs_check_maquinaria" class="form-label">Observaciones Maquinaria</label>
            <input type="text" class="form-control" id="obs_check_maquinaria" name="obs_check_maquinaria" placeholder="Ingrese detalle de la observación" required>
        </div>
        <div class="col-md-4">
            <label for="doc_check_maquinaria" class="form-label">Adjuntar documento</label>
            <input class="form-control" type="file" id="doc_check_maquinaria" name="doc_check_maquinaria" multiple>
        </div>
        <div class="col-md-4">
            <label for="img_check_maquinaria" class="form-label">Adjuntar imagen</label>
            <input class="form-control" type="file" id="img_check_maquinaria" name="img_check_maquinaria" multiple>
        </div>


        <input type="hidden" id="accion" name="accion" value="registrar">
        <input type="hidden" id="id_check_list_m" name="id_check_list_m" value="1">
        <input type="hidden" id="id_cliente_m" name="id_cliente_m" value="1">
        

    </form>
    <br>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary col-2" onclick="registrarMejora()">Generar Mejora</button>
        <button class="btn btn-warning col-2" onclick="location.reload()">Limpiar</button>
    </div>
</div>

<script>
    function registrarMejora(){
        var obs_check_general=document.getElementById("obs_check_general").value;
        var doc_check_general=document.getElementById("doc_check_general").value;
        var img_check_general=document.getElementById("img_check_general").value;
        var obs_check_proteccion=document.getElementById("obs_check_proteccion").value;
        var doc_check_proteccion=document.getElementById("doc_check_proteccion").value;
        var img_check_proteccion=document.getElementById("img_check_proteccion").value;
        var obs_check_herramientas=document.getElementById("obs_check_herramientas").value;
        var doc_check_herramientas=document.getElementById("doc_check_herramientas").value;
        var img_check_herramientas=document.getElementById("img_check_herramientas").value;
        var obs_check_maquinaria=document.getElementById("obs_check_maquinaria").value;
        var doc_check_maquinaria=document.getElementById("doc_check_maquinaria").value;
        var img_check_maquinaria=document.getElementById("img_check_maquinaria").value;

        
        if(obs_check_general==undefined || obs_check_general==null || obs_check_general.trim()=="" ){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Se debe completar el campo de Observacion General',                
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
            /*acciones a realizar*/     
        }).then((data) => {
            /*mas acciones a realizar*/
        })
        
    }

    

</script>