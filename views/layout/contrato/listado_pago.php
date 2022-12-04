<br><br><br>
<div class="card" style="margin: 1px 5em;">
        <h3 align="center" >Estado de Pago Clientes</h3>
        <table class="table table-sm">
            <tr class="table table-striped table-hover table-responsive-sm">
                <th>Rol</th>
                <th>Razón Social</th>
                <th>Monto de Pago</th>
                <th>Estado del Pago</th>
                <th>Fecha de Vencimiento</th>
                <th>Fecha de Pago</th>
            </tr>

            <?php foreach ($datos_pago as $row){ ?>
           
                <tr>
                    <td><?php echo $row["rol_cliente"]?></td>
                    <td><?php echo $row["razon_social_cliente"]?></td>
                    <td>$<?php echo $row["monto_pago"]?></td>
                    <td><?php 
                            if($row["estado_pago"]==0){
                                echo "Pago no realizado";
                            } else {
                                echo "Pago realizado";
                            }                             
                        ?>
                    </td>
                    <td><?php echo $row["fecha_vencimiento"]?></td>
                    <td><?php 
                            if($row["fecha_pago"]==null) {
                                echo "Pago pendiente";
                            } else {
                                echo $row["fecha_pago"];
                            }
                        ?>
                    </td>    
                </tr>

            <?php }?>
        </table>
</div>
<br><br><br><br><br>
