
<div class="card" style="margin: 1px 5em;">
        <h3 align="center" >Listado de Capacitaciones</h3>
        <table class="table table-sm">
            <tr class="table table-striped table-hover table-responsive-sm">
                <th>Nombre Capacitacion</th>
                <th>Fecha Capacitacion</th>
                <th>Nombre Personal</th>
                <th>Email Personal</th>
                <th>Tipo Personal a Capacitar</th>
            </tr>

            <?php foreach ($datos_asignacion as $row){ ?> 
           
                <tr>
                    <td><?php echo $row["nombre_capacitacion"]?></td>
                    <td><?php echo $row["fecha_capacitacion"]?></td>
                    <td><?php echo $row["nombre_personal"]?></td>
                    <td><?php echo $row["email_personal"]?></td>
                    <td><?php echo $row["tipo_personal_capacitacion"]?></td>
                   
                    <td>
                     
                         

                    </td>
                    <td>
                    <a href="index.php?view=crear-capacitacion" class="btn btn-info btn-sm">Ver Solicitud</a>
                    </td>         
                </tr>

            <?php }?>
        </table>
</div>
<br><br><br><br><br>