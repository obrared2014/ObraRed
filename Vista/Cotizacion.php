<!-- cotización -->
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="?sec=Inicio">Inicio</a></li>
            <li><a href="?sec=Presupuesto">Presupuesto</a></li>
            <li class="active">Calcular</li>
        </ol>
    </div>
</div>
<div style="overflow: auto;" id="imprimir">
<h4>Estimado <?php echo $_SESSION['Persona']?> Nos es grato entregarle la cotización para la construcci&oacute;n de un <?php echo $_SESSION['descripcion']?> 
    de <?php echo $_SESSION['metrosCubicos']?> m3 con los materiales seleccionados</h4>
<br/>
    <table class="table table-striped">
        <span class="form-control"><?php echo "PRESUPUESTO Nº ".$_SESSION['id_presupuesto']?></span>
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
                <td><?php echo $_SESSION['nombreCemento']?></td>
                <td><?php echo $_SESSION['Cemento']?></td>
                <td><?php echo $_SESSION['cantidadCemento']?></td>
                <td>$<?php echo $_SESSION['precioCemento']?></td>
                <td>$<?php echo $_SESSION['totalCemento']?></td>            
            </tr>
            <tr>
                <td><?php echo $_SESSION['idArena']?></td>
                <td><?php echo $_SESSION['nombreArena']?></td>
                <td><?php echo $_SESSION['Arena']?></td>
                <td><?php echo $_SESSION['cantidadArena']?> m3</td>
                <td>$<?php echo $_SESSION['precioArena']?></td>
                <td>$<?php echo $_SESSION['totalArena']?></td>            
            </tr>     
            <tr>
                <td><?php echo $_SESSION['idRipio']?></td>
                <td><?php echo $_SESSION['nombreRipio']?></td>
                <td><?php echo $_SESSION['Ripio']?></td>
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
                <td colspan="1"><button type="button" class="btn btn-primary" onclick="javascript:imprSelec('imprimir')">Imprimir <b class="glyphicon glyphicon-print"></b></button></td>   
            </tr>  
        </tbody>
    </table>
</div>
