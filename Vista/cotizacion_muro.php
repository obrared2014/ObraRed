<!-- cotización muro-->

            <tr>
                <td class="text-center"><?php echo $_SESSION['idCementoMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['nombreCementoMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['cementoMuro']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadCementoMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['precioCementoMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalCementoMuro']?></td>            
            </tr>
            <tr>
                <td class="text-center"><?php echo $_SESSION['idArenaMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['nombreArenaMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['arenaMuro']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadArenaMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['precioArenaMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalArenaMuro']?></td>            
            </tr>
            <tr>
                <td class="text-center"><?php echo $_SESSION['idLadrillosMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['nombreLadrillosMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['ladrillosMuro']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadLadrillosMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['precioLadrillosMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalLadrillosMuro']?></td>            
            </tr>
            <tr>
                <td class="text-center"><?php echo $_SESSION['idPilaresMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['nombrePilaresMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['pilaresMuro']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadPilaresMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['precioPilaresMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalPilaresMuro']?></td>            
            </tr>
            <tr>
                <td class="text-center"><?php echo $_SESSION['idCadenasMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['nombreCadenasMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['cadenasMuro']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadCadenasMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['precioCadenasMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalCadenasMuro']?></td>            
            </tr>
            <tr>
                <?php if( $_SESSION['descripcionMuro']!='una Pandereta'){ ?>
                <td class="text-center"><?php echo $_SESSION['idPuertaMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['nombrePuertaMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['puertaMuro']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadPuertaMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['precioPuertaMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalPuertaMuro']?></td>            
                <?php } ?> 
            </tr>
            <tr>
                <?php if( $_SESSION['descripcionMuro']!='una Pandereta'){ ?>
                <td class="text-center"><?php echo $_SESSION['idVentanaMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['nombreVentanaMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['ventanaMuro']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadVentanaMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['precioVentanaMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalVentanaMuro']?></td>            
                <?php } ?> 
 