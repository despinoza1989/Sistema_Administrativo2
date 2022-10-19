
<br><br><br>
<div class="card" style="margin: 1px 5em;">
        <h3 align="center" >Listado de Mejoras</h3>
        <table class="table table-sm">
            <tr class="table table-striped table-hover table-responsive-sm">
                <th>Observación General</th>
                <th>Fecha/Hora Check-List</th>
                <th>Rol Cliente</th>
                <th>Razón Social Cliente</th>
                <th>Opciones</th>
            </tr>
            
            <?php foreach ($datos_mejora as $row){ ?>
           
           <tr>
               <td><?php echo $row["obs_check_general"]?></td>
               <td><?php echo $row["fecha_check_list"]?></td>
               <td><?php echo $row["rol_cliente"]?></td>
               <td><?php echo $row["razon_social_cliente"]?></td>
               <td>
                   <a href="index.php?view=detalle-mejora" class="btn btn-info btn-sm">Ver Detalle</a>
                   <a href="index.php?view=crear-mejora" class="btn btn-success btn-sm">Crear Mejora</a>
               </td>         
           </tr>

            <?php }?>
        
        </table>
</div>
<br><br><br><br><br>
