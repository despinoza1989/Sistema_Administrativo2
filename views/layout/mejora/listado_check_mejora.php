<br><br><br>
<div class="card" style="margin: 1px 5em;">
    <div class="table-responsive">
        <h3 align="center">Listado Check-List para la creación de una Mejora</h3>
        <table class="table table-sm">
            <tr>

                <th>Rut Profesional</th>
                <th>Nombre Profesional</th>
                <th>Apellidos Profesional</th>
                <th>|</th>
                <th>Rol Cliente</th>
                <th>Razón Social Cliente</th>
                <th>Fecha/Hora Check-List</th>
                <th>Opciones</th>
            </tr>

            <?php foreach ($datos_check as $row){ ?>

            <tr>

                <td><?php echo $row["rut_personal"]?></td>
                <td><?php echo $row["nombre_personal"]?></td>
                <td><?php echo $row["apellidos_personal"]?></td>
                <td>|</td>
                <td><?php echo $row["rol_cliente"]?></td>
                <td><?php echo $row["razon_social_cliente"]?></td>
                <td><?php echo $row["fecha_check_list"]?></td>

                <td>
                    <a href="index.php?view=crear-mejora&id_check_list=<?php echo $row["id_check_list"]?>"
                        class="btn btn-primary btn-sm">Crear Mejora</a>
                </td>
            </tr>

            <?php }?>
        </table>
    </div>
</div>
<br><br><br><br><br>