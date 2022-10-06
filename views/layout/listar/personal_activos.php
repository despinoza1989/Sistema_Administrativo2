

<script>
    function desactivarUsuario(id) {
        Swal.fire({
            "title":"¿Estás seguro de desactivar al usuario?",
            "text":"Este no podra acceder al sistema",
            "icon":"question",
            "showCancelButton": true,
            "cancelButtonText":"Cancelar",
            "confirmButtonText":"Aceptar",
            "confirmButtonColor":"#dc3545"
        })
        .then(function(result) {
            if(result.isConfirmed) {
                window.location.href = "index.php?view=personal-activos&id_estado="+id
            }
        })
    }
</script>


<br><br><br>
<div class="card" style="margin: 1px 5em;">
        <h3 align="center" >Personal Activos</h3>
        <table class="table table-sm">
            <tr class="table table-striped table-hover table-responsive-sm">
                <th>Nombre de Usuario</th>
                <th>Rut</th>
                <th>Email</th>
                <th>Genero</th>
                <th>Estado Civil</th>
                <th>Tipo de Usuario</th>
                <th>Estado</th>
                <th>Opción</th>
            </tr>

            <?php foreach ($datos as $row){ ?>
           
                <tr>
                    <td><?php echo $row["usuario_personal"]?></td>
                    <td><?php echo $row["rut_personal"]?></td>
                    <td><?php echo $row["email_personal"]?></td>
                    <td><?php echo $row["tipo_genero"]?></td>
                    <td><?php echo $row["tipo_estado_civil"]?></td>
                    <td><?php echo $row["tipo_usuario"]?></td>
                    <td>
                        <?php 
                            if ($row["estado_usuario_personal"]==1) {
                                echo "Activo";
                            } else {
                                echo "Inactivo";
                            }                        
                        ?>
                    </td>
                    <td>
                        <a href="{% url 'modificar_usuario' u.id %}" class="btn btn-info btn-sm">Modificar</a>
                        <a href="javascript:desactivarUsuario(<?php echo $row["id_personal"]?>)"  class="btn btn-danger btn-sm">Desactivar</a>
                    </td>         
                </tr>

            <?php }?>
        </table>
</div>
<br><br><br><br><br>
