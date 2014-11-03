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
    de  <?php echo $_SESSION['aguas']?> Aguas, para cubrir <?php echo $_SESSION['metrosCuadrados']?> m2 con los materiales seleccionados</h4>
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
                <td><?php echo $_SESSION['idTabla']?></td>
                <td><?php echo $_SESSION['nombreTabla']?></td>
                <td><?php echo $_SESSION['tabla']?></td>
                <td><?php echo $_SESSION['cantidadTabla']?></td>
                <td>$<?php echo $_SESSION['precioTabla']?></td>
                <td>$<?php echo $_SESSION['totalTabla']?></td>            
            </tr>
            <tr>
                <td><?php echo $_SESSION['idPlancha']?></td>
                <td><?php echo $_SESSION['nombrePlancha']?></td>
                <td><?php echo $_SESSION['plancha']?></td>
                <td><?php echo $_SESSION['cantidadPlancha']?> </td>
                <td>$<?php echo $_SESSION['precioPlancha']?></td>
                <td>$<?php echo $_SESSION['totalPlancha']?></td>            
            </tr>     
            <tr>
                <td><?php echo $_SESSION['idFieltro']?></td>
                <td><?php echo $_SESSION['nombreFieltro']?></td>
                <td><?php echo $_SESSION['fieltro']?></td>
                <td><?php echo $_SESSION['cantidadFieltro']?> </td>
                <td>$<?php echo $_SESSION['precioFieltro']?></td>
                <td>$<?php echo $_SESSION['totalFieltro']?></td>            
            </tr>                
            <tr>
                <td><?php echo $_SESSION['idClavo']?></td>
                <td><?php echo $_SESSION['nombreClavo']?></td>
                <td><?php echo $_SESSION['clavo']?></td>
                <td><?php echo $_SESSION['cantidadClavo']?> </td>
                <td>$<?php echo $_SESSION['precioClavo']?></td>
                <td>$<?php echo $_SESSION['totalClavo']?></td>            
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
