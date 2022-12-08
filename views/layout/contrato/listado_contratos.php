<br><br><br>
<div class="card" style="margin: 1px 5em;">
    <div class="table-responsive">
        <h3 align="center">Listado de Contratos Clientes</h3>
        <table class="table table-sm">
            <tr>
                <th>Rol</th>
                <th>Razón Social</th>
                <th>Fecha Inicio Contrato</th>
                <th>Fecha Termino Contrato</th>
                <th>Estado de Contrato</th>
                <th>Opción</th>
            </tr>

            <?php foreach ($datos_contrato as $row){ ?>

            <tr>
                <td><?php echo $row["rol_cliente"]?></td>
                <td><?php echo $row["razon_social_cliente"]?></td>
                <td><?php echo $row["fecha_inicio_c"]?>
                <td><?php echo $row["fecha_fin_c"]?></td>
                <td><?php 
                            if($row["finalizado"]==0){
                                echo "Contrato Vigente";
                            } else {
                                echo "Contrato Vencido";
                            }
                         ?>
                </td>
                <td>
                    <a href="index.php?view=actualizar-contrato&id_contrato=<?php echo $row["id_contrato"]?>"
                        class="btn btn-info btn-sm">Actualizar Contrato</a>
                </td>
            </tr>

            <?php }?>
        </table>
    </div>
</div>
<br><br><br><br><br>