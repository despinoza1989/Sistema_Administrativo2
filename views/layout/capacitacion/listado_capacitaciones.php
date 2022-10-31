
<div class="card" style="margin: 1px 5em;">
        <h3 align="center" >Listado de Capacitaciones</h3>
        <table class="table table-sm">
            <tr class="table table-striped table-hover table-responsive-sm">
                <th>Nombre Capacitacion</th>
                <th>Fecha de Realización de Capacitacion</th>
                <th>Razón Social Cliente</th>
                <th>Teléfono Cliente</th>
                <th>Email Cliente</th>
                <th>Personal a Capacitar</th>
                <th>Opción</th>
            </tr>

            <?php foreach ($datos_capacitaciones as $row){ ?> 
           
                <tr>
                    <td><?php echo $row["nombre_capacitacion"]?></td>
                    <td><?php echo $row["fecha_capacitacion"]?></td>
                    <td><?php echo $row["razon_social_cliente"]?></td>
                    <td><?php echo $row["telefono_cliente"]?></td>
                    <td><?php echo $row["email_cliente"]?></td>
                    <td><?php echo $row["tipo_personal_capacitacion"]?></td>
                
                    <td>
                        <a href="index.php?view=detalle-capacitaciones&id_crear_capacitacion=<?php echo $row["id_crear_capacitacion"]?>" class="btn btn-success btn-sm">Ver Detalle</a>
                        <a href="index.php?view=modificar-capacitaciones&id_crear_capacitacion=<?php echo $row["id_crear_capacitacion"]?>" class="btn btn-info btn-sm">Modificar</a>
                    </td>  
                </tr>

            <?php }?>
        </table>
</div>
<br><br><br><br><br>
