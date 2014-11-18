<!-- cotización -->
<div class="row" id="ocultar_uno">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="?sec=Inicio">Inicio</a></li>
            <li><a href="?sec=Presupuesto">Presupuesto</a></li>
            <li class="active">Calcular</li>
        </ol>
    </div>
</div>
<div class="bg print"></div>
<div style="overflow: auto;">
    <h5>Estimado <?php echo $_SESSION['Persona']?> nos es grato entregarle un presupuesto para la construcci&oacute;n de <?php echo $_SESSION['descripcion'.$_SESSION['que']]?> 
        de <?php echo $_SESSION['metros'.$_SESSION['que']]?> m<?php echo $_SESSION['m2m3']?>  con los siguientes materiales</h5>
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
                <td colspan="6"><b>Nota:</b> Los valores presentados incluyen IVA. y debe considerar un 10% adicional del presupuesto cuyo monto asciende a $ <?php echo $_SESSION['total'.$_SESSION['que'].'10']?>.- pesos.</td>   
            </tr>   
            <tr>
                <td colspan="6">&nbsp;</td>   
            </tr>               
            <tr id="ocultar_dos">
                <td colspan="4">&nbsp;</td>
                <td colspan="1"><button type="button" class="btn btn-primary">Enviar a E-mail <b class="glyphicon glyphicon-send"></b></button></td> 
                <td colspan="1"><button type="button" class="btn btn-primary" onclick="window.print();">Imprimir <b class="glyphicon glyphicon-print"></b></button></td>   
            </tr>  

        </tbody>
    </table>
</div>
<style type="text/css">
    .bg {
        background-image: url(img/LOGO_2.png);
        width: 224px; 
        height: 78px;
        display: none;
    }
</style>
<style type="text/css" media="print">
    @media print {
    #ocultar_uno {display: none;}
    #ocultar_dos {display: none;}
    }
    .bg.print {
        display: list-item;
        list-style-image: url(img/LOGO_2.png);
        list-style-position: inside;
    } 
</style>
