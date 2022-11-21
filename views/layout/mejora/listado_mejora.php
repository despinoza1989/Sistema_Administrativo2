<br><br><br>
<div class="card" style="margin: 1px 5em;">
    <h3 align="center">Listado de Mejoras</h3>
    <table class="table table-sm">
        <tr class="table table-striped table-hover table-responsive-sm">
            <th>Fecha/Hora Check-List</th>
            <th>Rol Cliente</th>
            <th>Razón Social Cliente</th>
            <th>Dirección Cliente</th>
            <th>Email Cliente</th>
            <th>Teléfono Cliente</th>
            <th>Opciones</th>
        </tr>

        <?php foreach ($datos_mejora as $row){ ?>

        <tr>
            <td><?php echo $row["fecha_check_list"]?></td>
            <td><?php echo $row["rol_cliente"]?></td>
            <td><?php echo $row["razon_social_cliente"]?></td>
            <td><?php echo $row["direccion_cliente"]?></td>
            <td><?php echo $row["email_cliente"]?></td>
            <td><?php echo $row["telefono_cliente"]?></td>
            <td>
                <a href="index.php?view=detalle-mejora&id_mejoras=<?php echo $row["id_mejoras"]?>" class="btn btn-info btn-sm">Ver Detalle</a>
                <a href="index.php?view=modificar-mejora&id_mejoras=<?php echo $row["id_mejoras"]?>" class="btn btn-warning btn-sm">Modificar Mejora</a> 
            </td>
        </tr>

        <?php }?>

    </table>
</div>
<br><br><br><br><br>