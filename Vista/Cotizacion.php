<!-- cotización -->
<div style="overflow: auto;">
<h4>Nos es grato entregarle la cotización para la construcci&oacute;n de un Cobertizo de 12 m2 con los materiales seleccionados</h4>
<br/>
    <table class="table table-striped">
        <?php echo "PRESUPUESTO Nº".$_SESSION['id_presupuesto']?>
        <thead>
            <tr>
                <th>Item</th>
                <th>Material</th>
                <th>Descripci&oacute;n</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Precio Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $_SESSION['idCemento']?></td>
                <td>Cemento</td>
                <td>Cemento de 42,5 Kilos</td>
                <td><?php echo $_SESSION['cantidadCemento']?></td>
                <td>$<?php echo $_SESSION['precioCemento']?></td>
                <td>$<?php echo $_SESSION['totalCemento']?></td>            
            </tr>
            <tr>
                <td><?php echo $_SESSION['idArena']?></td>
                <td>Arena</td>
                <td>Arena Gruesa</td>
                <td><?php echo $_SESSION['cantidadArena']?> m3</td>
                <td>$<?php echo $_SESSION['precioArena']?></td>
                <td>$<?php echo $_SESSION['totalArena']?></td>            
            </tr>     
            <tr>
                <td><?php echo $_SESSION['idRipio']?></td>
                <td>Ripio</td>
                <td>Ripio</td>
                <td><?php echo $_SESSION['cantidadRipio']?> m3</td>
                <td>$<?php echo $_SESSION['precioRipio']?></td>
                <td>$<?php echo $_SESSION['totalRipio']?></td>            
            </tr>               
            <tr>
                <td colspan="6">&nbsp;</td>      
            </tr>  
            <tr>
                <td colspan="6">&nbsp;</td>      
            </tr>  
            <tr>
                <td colspan="4">&nbsp;</td>   
                <td>Total</td>
                <td>$<?php echo $_SESSION['totalPresupuesto']?></td>  
            </tr>  
            <tr>
                <td colspan="6">Cabe destacar que los valores presentados incluyen iva y se obtienen en base al promedio del precio en 3 empresas del rubro de la construcción.</td>   
            </tr>   
            <tr>
                <td colspan="4">&nbsp;</td>
                <td colspan="1"><button type="button" class="btn btn-primary">Enviar a E-mail <b class="glyphicon glyphicon-send"></b></button></td> 
                <td colspan="1"><button type="button" class="btn btn-primary" onclick="javascript:window.print()">Imprimir <b class="glyphicon glyphicon-print"></b></button></td>   
            </tr>  
        </tbody>
    </table>
</div>
