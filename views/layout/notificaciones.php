<br><br>
<center><h1> Notificaciones </h1></center>
<br>
<div class="list-group" style="margin: 1px 5em;">
    <?php  
        foreach ($datos as $key => $notificacion) {

            //echo $notificacion['mensaje_notificacion'];
        
    ?>
        <a href="JavaScript:checkNotificacion(<?php echo $notificacion['id_notificaciones']?>)" class="list-group-item  <?php echo ($notificacion['estado_notificacion']==1)? 'list-group-item-secondary': 'list-group-item-action' ?>">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><?php echo $this->getTitulo($notificacion['tipo_notificacion'])?></h5>
                <small class="text-muted"><?php echo  $notificacion['fecha_notificacion']?></small>
            </div>
            <p class="mb-1"><?php echo  $notificacion['mensaje_notificacion']?></p>
        </a>
    <?php 
        }
    ?>

</div>
<br><br><br>

<script>


    function checkNotificacion(id_notificaciones) {

        fetch('api.php/notificaciones/' + id_notificaciones, {
            method: "GET",
            headers: {
                'Content-Type': 'application/json'
            }
        }).then(response=>response.json())
        .then((data) => {

            console.log(data)
            //GENERAR LINK AL HACER CLICK
            //index.php?view=detalle-check-list-admin&id_check_list=12
            /*if(data.tipo_notificacion=='crear_checklist'){
                location.href="index.php?view=detalle-check-list-admin&id_check_list="+data.custom_option_id;
            }*/

        /*mas acciones a realizar*/
        })

        fetch('api.php/notificaciones/' + id_notificaciones, {
                method: "PUT",
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({})
            }).then((response) => {})

    }

    
</script>


