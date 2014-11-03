<!-- cotización muro-->

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
 