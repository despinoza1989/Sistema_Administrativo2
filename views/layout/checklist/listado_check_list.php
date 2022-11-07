<br><br><br>
<div class="card" style="margin: 1px 5em;">
        <h3 align="center" >Listado Check-List</h3>
        <table class="table table-sm">
            <tr class="table table-striped table-hover table-responsive-sm">
                <th>Rut Profesional</th>
                <th>Nombre Profesional</th>
                <th>Apellidos Profesional</th>                
                <th>Rol Cliente</th>
                <th>Razón Social Cliente</th>
                <th>Fecha/Hora Check-List</th>
                <th>Observación General</th>
                <th>Opciones</th>
            </tr>

            <?php foreach ($datos as $row){ ?>
           
                <tr>
                    <td><?php echo $row["rut_personal"]?></td>
                    <td><?php echo $row["nombre_personal"]?></td>
                    <td><?php echo $row["apellidos_personal"]?></td>
                    <td><?php echo $row["rol_cliente"]?></td>
                    <td><?php echo $row["razon_social_cliente"]?></td>
                    <td><?php echo $row["fecha_check_list"]?></td>
                    <td><?php echo $row["obs_check_general"]?></td>
                    <td>
                        <a href="index.php?view=detalle-check-list&id_check_list=<?php echo $row["id_check_list"]?>" class="btn btn-info btn-sm">Ver Detalle</a>
                        <a href="#" class="btn btn-warning">Modificar</a>
                    </td>         
                </tr>

            <?php }?>
        </table>
</div>
<br><br><br><br><br>
