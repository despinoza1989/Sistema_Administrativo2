
<div class="card" style="margin: 1px 5em;">
        <h3 align="center" >Listado de Capacitaciones</h3>
        <table class="table table-sm">
            <tr class="table table-striped table-hover table-responsive-sm">
                <th>Nombre Solicitud Capacitacion</th>
                <th>Fecha Solicitud Capacitacion</th>
                <th>Rol Cliente</th>
                <th>Razon Social</th>
                <th>telefono Cliente</th>
                <th>Direccion Cliente</th>
                <th>Tipo Personal a Capacitar</th>
                <th>Opción</th>
            </tr>

            <?php foreach ($datos_solicitudes as $row){ ?> 
           
                <tr>
                    <td><?php echo $row["nombre_solicitud_capacitacion"]?></td>
                    <td><?php echo $row["fecha_solicitud_capacitacion"]?></td>
                    <td><?php echo $row["rol_cliente"]?></td>
                    <td><?php echo $row["razon_social_cliente"]?></td>
                    <td><?php echo $row["telefono_cliente"]?></td>
                    <td><?php echo $row["direccion_cliente"]?></td>
                    <td><?php echo $row["tipo_personal_capacitacion"]?></td>
                   
                    <td>
                    <a href="index.php?view=crear-capacitacioncs&id_solicitud_capacitacion-<?php echo $row["id_solicitud_capacitacion"] ?>" class="btn btn-info btn-sm">Ver Solicitud</a>
                    </td>
                             
                </tr>

            <?php }?>
        </table>
</div>
<br><br><br><br><br>
