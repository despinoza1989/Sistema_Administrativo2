<br><br><br>
<div class="card" style="margin: 1px 5em;">
        <h3 align="center" >Asignación de Clientes</h3>
        <table class="table table-sm">
            <tr class="table table-striped table-hover table-responsive-sm">
                <th>Rol Cliente</th>
                <th>Razón Socila Cliente</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Dirección</th>
            </tr>

            <?php foreach ($datos_asignación as $row){ ?>
           
                <tr>
                    <td><?php echo $row["rol_cliente"]?></td>
                    <td><?php echo $row["razon_social_cliente"]?></td>
                    <td><?php echo $row["telefono_cliente"]?></td>
                    <td><?php echo $row["email_cliente"]?></td>
                    <td><?php echo $row["direccion_cliente"]?></td>
      
                </tr>

            <?php }?>
        </table>
</div>
<br><br><br><br><br>
