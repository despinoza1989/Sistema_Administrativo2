
<br><br><br>
<div class="card" style="margin: 1px 5em;">
        <h3 align="center" >Listado de Respuestas de Asesorías Generadas por Profesionales</h3>
        <table class="table table-sm">
            <tr class="table table-striped table-hover table-responsive-sm">
                <th>Razón Social</th>
                <th>Rol</th>
                <th>Dirección</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Nombre Profesional Que Entrega Respuesta</th>
                <th>Opción</th>
            </tr>

            <?php foreach ($datos_asesoria as $row){ ?> 
           
                <tr>
                    <td><?php echo $row["razon_social_cliente"]?></td>
                    <td><?php echo $row["rol_cliente"]?></td>
                    <td><?php echo $row["direccion_cliente"]?></td>
                    <td><?php echo $row["email_cliente"]?></td>
                    <td><?php echo $row["telefono_cliente"]?></td>
                    <td><?php echo $row["nombre_personal"]?> <?php echo $row["apellidos_personal"]?></td>
 
                    <td>
                    <a href="index.php?view=respuesta-asesoria-admin&id_respuesta_asesoria=<?php echo $row["id_respuesta_asesoria"]?>" class="btn btn-info btn-sm">Ver Respuesta</a>
                    </td>         
                </tr>

            <?php }?>
        </table>
</div>
<br><br><br><br><br>
