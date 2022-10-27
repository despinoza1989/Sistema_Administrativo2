
<br><br><br>
<div class="card" style="margin: 1px 5em;">
        <h3 align="center" >Listado de Asesorías Generadas por Profesionales</h3>
        <table class="table table-sm">
            <tr class="table table-striped table-hover table-responsive-sm">
                <th>Razon Social</th>
                <th>Rol</th>
                <th>Dirección</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Detalle Asesoría</th>
                <th>Opciones</th>
            </tr>

            <?php foreach ($datos_asesoria as $row){ ?> 
           
                <tr>
                    <td><?php echo $row["razon_social_cliente"]?></td>
                    <td><?php echo $row["rol_cliente"]?></td>
                    <td><?php echo $row["direccion_cliente"]?></td>
                    <td><?php echo $row["email_cliente"]?></td>
                    <td><?php echo $row["telefono_cliente"]?></td>
                    <td><?php echo $row["detalle_asesoria"]?></td>
                   
 
                    <td>
                    <a href="index.php?view=respuesta-asesoria&id_solicitud_asesoria=<?php echo $row["id_solicitud_asesoria"]?>" class="btn btn-info btn-sm">Ver Solicitud</a>
                    </td>         
                </tr>

            <?php }?>
        </table>
</div>
<br><br><br><br><br>
