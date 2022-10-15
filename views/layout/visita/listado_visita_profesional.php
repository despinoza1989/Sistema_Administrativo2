
<br><br><br>
<div class="card" style="margin: 1px 5em;">
        <h3 align="center" >Listado de Visitas Profesional</h3>
        <table class="">
            <tr class="table table-striped table-hover table-responsive-sm">
                <th>Fecha/Hora Visita</th>
                <th>Motivo</th>
                <th>Rol Cliente</th>
                <th>Razón Social Cliente</th>
                <th>Rut Profesional</th>
                <th>Nombre Profesional</th>
                <th>Apellidos Profesional</th>
            </tr>
            
            <?php foreach ($dato_asignacion as $row){ ?>
           
           <tr>
               <td><?php echo $row["fecha_visita"]?></td>
               <td><?php echo $row["motivo_visita"]?></td>
               <td><?php echo $row["rol_cliente"]?></td>
               <td><?php echo $row["razon_social_cliente"]?></td>
               <td><?php echo $row["rut_personal"]?></td>
               <td><?php echo $row["nombre_personal"]?></td>
               <td><?php echo $row["apellidos_personal"]?></td>
               <td>
                   <a href="#" class="btn btn-info btn-sm">Ver Detalle</a>
               </td>         
           </tr>

            <?php }?>
        
        </table>
</div>
<br><br><br><br><br>
