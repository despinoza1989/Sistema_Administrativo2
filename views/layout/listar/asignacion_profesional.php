<br><br><br>
<div class="card" style="margin: 1px 5em;">
        <h3 align="center" >Asignación de Profesionales a Clientes</h3>
        <table class="table table-sm">
            <tr class="table table-striped table-hover table-responsive-sm">
                <th>Rut</th>
                <th>Nombre del Profesional</th>
                <th>Apellidos del Profesional</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>|</th>
                <th>Rol Cliente</th>
                <th>Razón Socila Cliente</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Dirección</th>
                <th>Opción</th>
            </tr>

            <?php foreach ($datos_asignación as $row){ ?>
           
                <tr>
                    <td><?php echo $row["rut_personal"]?></td>
                    <td><?php echo $row["nombre_personal"]?></td>
                    <td><?php echo $row["apellidos_personal"]?></td>
                    <td><?php echo $row["telefono_personal"]?></td>
                    <td><?php echo $row["email_personal"]?></td>
                    <td>|</td>
                    <td><?php echo $row["rol_cliente"]?></td>
                    <td><?php echo $row["razon_social_cliente"]?></td>
                    <td><?php echo $row["telefono_cliente"]?></td>
                    <td><?php echo $row["email_cliente"]?></td>
                    <td><?php echo $row["direccion_cliente"]?></td>
                    <td>
                        <a href="{% url 'modificar_usuario' u.id %}" class="btn btn-info btn-sm">Modificar Asignación</a>
                    </td>         
                </tr>

            <?php }?>
        </table>
</div>
<br><br><br><br><br>