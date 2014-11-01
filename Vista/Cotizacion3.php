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
<h4>Estimado <?php echo $_SESSION['Persona']?> Nos es grato entregarle la cotización para la construcci&oacute;n de <?php echo $_SESSION['descripcionMuro']?> 
    , para cubrir <?php echo $_SESSION['metrosCuadradosMuro']?> m2 con los materiales seleccionados</h4>
<br/>
    <table class="table table-striped">
        <span class="form-control"><?php echo "PRESUPUESTO Nº ".$_SESSION['id_presupuestoMuro']?></span>
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
                <td><?php echo $_SESSION['idCementoMuro']?></td>
                <td><?php echo $_SESSION['nombreCementoMuro']?></td>
                <td><?php echo $_SESSION['cementoMuro']?></td>
                <td><?php echo $_SESSION['cantidadCementoMuro']?></td>
                <td>$<?php echo $_SESSION['precioCementoMuro']?></td>
                <td>$<?php echo $_SESSION['totalCementoMuro']?></td>            
            </tr>
            <tr>
                <td><?php echo $_SESSION['idArenaMuro']?></td>
                <td><?php echo $_SESSION['nombreArenaMuro']?></td>
                <td><?php echo $_SESSION['arenaMuro']?></td>
                <td><?php echo $_SESSION['cantidadArenaMuro']?></td>
                <td>$<?php echo $_SESSION['precioArenaMuro']?></td>
                <td>$<?php echo $_SESSION['totalArenaMuro']?></td>            
            </tr>
            <tr>
                <td><?php echo $_SESSION['idLadrillosMuro']?></td>
                <td><?php echo $_SESSION['nombreLadrillosMuro']?></td>
                <td><?php echo $_SESSION['ladrillosMuro']?></td>
                <td><?php echo $_SESSION['cantidadLadrillosMuro']?></td>
                <td>$<?php echo $_SESSION['precioLadrillosMuro']?></td>
                <td>$<?php echo $_SESSION['totalLadrillosMuro']?></td>            
            </tr>
            <tr>
                <td><?php echo $_SESSION['idPilaresMuro']?></td>
                <td><?php echo $_SESSION['nombrePilaresMuro']?></td>
                <td><?php echo $_SESSION['pilaresMuro']?></td>
                <td><?php echo $_SESSION['cantidadPilaresMuro']?></td>
                <td>$<?php echo $_SESSION['precioPilaresMuro']?></td>
                <td>$<?php echo $_SESSION['totalPilaresMuro']?></td>            
            </tr>
            <tr>
                <td><?php echo $_SESSION['idCadenasMuro']?></td>
                <td><?php echo $_SESSION['nombreCadenasMuro']?></td>
                <td><?php echo $_SESSION['cadenasMuro']?></td>
                <td><?php echo $_SESSION['cantidadCadenasMuro']?></td>
                <td>$<?php echo $_SESSION['precioCadenasMuro']?></td>
                <td>$<?php echo $_SESSION['totalCadenasMuro']?></td>            
            </tr>
            <tr>
                <?php if( $_SESSION['descripcionMuro']!='una Pandereta'){ ?>
                <td><?php echo $_SESSION['idPuertaMuro']?></td>
                <td><?php echo $_SESSION['nombrePuertaMuro']?></td>
                <td><?php echo $_SESSION['puertaMuro']?></td>
                <td><?php echo $_SESSION['cantidadPuertaMuro']?></td>
                <td>$<?php echo $_SESSION['precioPuertaMuro']?></td>
                <td>$<?php echo $_SESSION['totalPuertaMuro']?></td>            
                <?php } ?> 
            </tr>
            <tr>
                <?php if( $_SESSION['descripcionMuro']!='una Pandereta'){ ?>
                <td><?php echo $_SESSION['idVentanaMuro']?></td>
                <td><?php echo $_SESSION['nombreVentanaMuro']?></td>
                <td><?php echo $_SESSION['ventanaMuro']?></td>
                <td><?php echo $_SESSION['cantidadVentanaMuro']?></td>
                <td>$<?php echo $_SESSION['precioVentanaMuro']?></td>
                <td>$<?php echo $_SESSION['totalVentanaMuro']?></td>            
                <?php } ?> 
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
