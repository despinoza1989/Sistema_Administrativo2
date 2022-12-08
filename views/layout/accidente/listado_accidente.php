<br><br><br>
<div class="card" style="margin: 1px 5em;">
    <div class="table-responsive">
        <h3 align="center">Listado Reporte de Accidentes</h3>
        <table class="table table-sm">
            <tr>
                <th>Razón Social</th>
                <th>Rol</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Dirección</th>
                <th>Fecha Accidente</th>
                <th>Cantidad de Personas</th>

            </tr>

            <?php foreach ($datos as $row){ ?>

            <tr>
                <td><?php echo $row["razon_social_cliente"]?></td>
                <td><?php echo $row["rol_cliente"]?></td>
                <td><?php echo $row["telefono_cliente"]?></td>
                <td><?php echo $row["email_cliente"]?></td>
                <td><?php echo $row["direccion_cliente"]?></td>
                <td><?php echo $row["fecha_accidente"]?></td>
                <td><?php echo $row["cantidad_personas"]?></td>

            </tr>

            <?php }?>
        </table>
    </div>
</div>
<br><br><br><br><br>