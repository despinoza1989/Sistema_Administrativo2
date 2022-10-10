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
                window.location.href = "index.php?view=usuario-activos&id_estado="+id
            }
        })
    }
</script>


<br><br><br>
<div class="card" style="margin: 1px 5em;">
        <h3 align="center" >Clientes Activos</h3>
        <table class="table table-sm">
            <tr class="table table-striped table-hover table-responsive-sm">
                <th>Nombre de Usuario</th>
                <th>Rut/Rol</th>
                <th>Nombre/Razón Social</th>
                <th>Email</th>
                <th>Estado</th>
                <th>Opción</th>
            </tr>

            <?php foreach ($datos as $row){ ?>
           
                <tr>
                    <td><?php echo $row["usuario_cliente"]?></td>
                    <td><?php echo $row["rol_cliente"]?></td>
                    <td><?php echo $row["razon_social_cliente"]?></td>
                    <td><?php echo $row["email_cliente"]?></td>
                    <td>
                        <?php 
                            if ($row["estado_usuario_cliente"]==1) {
                                echo "Activo";
                            } else {
                                echo "Inactivo";
                            }                        
                        ?>
                    </td>
                    <td>
                        <a href="index.php?view=modificar-cliente&id_cliente=<?php echo $row["id_cliente"]?>" class="btn btn-info btn-sm">Modificar</a>
                        <a href="javascript:desactivarUsuario(<?php echo $row["id_cliente"]?>)"  class="btn btn-danger btn-sm">Desactivar</a>
                    </td>         
                </tr>

            <?php }?>
        </table>
</div>
<br><br><br><br><br>
