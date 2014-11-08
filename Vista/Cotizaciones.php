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
<h4>Estimado <?php echo $_SESSION['Persona']?> nos es grato entregarle la cotización para la construcci&oacute;n de <?php echo $_SESSION['descripcion'.$_SESSION['que']]?> 
    de <?php echo $_SESSION['metros'.$_SESSION['que']]?> m<?php echo $_SESSION['m2m3']?>  con los materiales seleccionados</h4>
<br/>
 
    <table class="table table-striped">
        <span class="form-control"><?php echo $_SESSION['fecha'].'&nbsp;'."PRESUPUESTO Nº ".$_SESSION['id_presupuesto'.$_SESSION['que']]?> </span>
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
            <?php if($_SESSION['que']=='Radier'){ include 'cotizacion_radier.php'; } ?>
            <?php if($_SESSION['que']=='Muro'){ include 'cotizacion_muro.php'; } ?>
            <?php if($_SESSION['que']=='Techo'){ include 'cotizacion_techo.php'; } ?>
            <?php if($_SESSION['que']=='Casa'){ 
                include 'cotizacion_casa.php'; 
            } ?>
            <tr>
                <td colspan="6">&nbsp;</td>      
            </tr>  
            <tr>
                <td colspan="6">&nbsp;</td>      
            </tr> 

            <tr>
                <td colspan="4">&nbsp;</td>   
                <td>Total</td>
                <td>$<?php echo $_SESSION['totalPresupuesto'.$_SESSION['que']]?></td>  
            </tr>  
            <tr>
                <td colspan="6">Cabe destacar que los valores presentados incluyen iva.</td>   
            </tr>   
            <tr>
                <td colspan="4">&nbsp;</td>
                <td colspan="1"><button type="button" class="btn btn-primary">Enviar a E-mail <b class="glyphicon glyphicon-send"></b></button></td> 
                <td colspan="1"><button type="button" class="btn btn-primary" onclick="javascript:imprSelec('imprimir')">Imprimir <b class="glyphicon glyphicon-print"></b></button></td>   
            </tr>  

        </tbody>
    </table>
</div>
