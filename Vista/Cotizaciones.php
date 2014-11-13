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
<h5>Estimado <?php echo $_SESSION['Persona']?> nos es grato entregarle la cotización para la construcci&oacute;n de <?php echo $_SESSION['descripcion'.$_SESSION['que']]?> 
    de <?php echo $_SESSION['metros'.$_SESSION['que']]?> m<?php echo $_SESSION['m2m3']?>  con los materiales seleccionados</h5>
<br/>
 
    <table class="table table-striped">
        <span class="form-control"><?php echo "Presupuesto Nº ".$_SESSION['id_presupuesto'.$_SESSION['que']].',&nbsp;realizado el d&iacute;a '.$_SESSION['fecha']?> </span>
        <thead>
            <tr>
                <th class="text-center">Item</th>
                <th class="text-center">Material</th>
                <th class="text-center">Descripci&oacute;n</th>
                <th class="text-center">Cantidad</th>
                <th class="text-center">Precio Unitario</th>
                <th class="text-center">Precio Total</th>
            </tr>
        </thead>
        <tbody>
            <?php if($_SESSION['que']=='Radier'){ include 'cotizacion_radier.php'   ; } ?>
            <?php if($_SESSION['que']=='Muro')  { include 'cotizacion_muro.php'     ; } ?>
            <?php if($_SESSION['que']=='Techo') { include 'cotizacion_techo.php'    ; } ?>
            <?php if($_SESSION['que']=='Casa')  {include 'cotizacion_casa.php'      ; } ?>
            <tr>
                <td colspan="6">&nbsp;</td>      
            </tr>  
            <tr>
                <td colspan="6">&nbsp;</td>      
            </tr> 

            <tr>
                <td colspan="4">&nbsp;</td>   
                <td class="text-right" colspan="1"><b>Total Presupuesto</b></td>
                <td class="text-right" colspan="1"><b>$ <?php echo $_SESSION['totalPresupuesto'.$_SESSION['que']]?></b></td>  
            </tr>  
            <tr>
                <td colspan="6"><b>Nota:</b> Cabe destacar que los valores presentados incluyen IVA. y debe considerar un 10% adicional del presupuesto cuyo monto asciende a $ <?php echo $_SESSION['total'.$_SESSION['que'].'10']?>.- pesos.</td>   
            </tr>   
            <tr>
                <td colspan="6">&nbsp;</td>   
            </tr>               
            <tr>
                <td colspan="4">&nbsp;</td>
                <td colspan="1"><button type="button" class="btn btn-primary">Enviar a E-mail <b class="glyphicon glyphicon-send"></b></button></td> 
                <td colspan="1"><button type="button" class="btn btn-primary" onclick="javascript:imprSelec('imprimir')">Imprimir <b class="glyphicon glyphicon-print"></b></button></td>   
            </tr>  

        </tbody>
    </table>
</div>
