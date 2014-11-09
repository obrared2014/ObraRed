<!-- cotización Radier-->

          <tr>
                <td class="text-right"><?php echo $_SESSION['idCementoRadier']?></td>
                <td class="text-left"><?php echo $_SESSION['nombreCementoRadier']?></td>
                <td class="text-left"><?php echo $_SESSION['CementoRadier']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadCementoRadier']?></td>
                <td class="text-right">$<?php echo $_SESSION['precioCementoRadier']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalCementoRadier']?></td>            
            </tr>
            <tr>
                <td class="text-right"><?php echo $_SESSION['idArenaRadier']?></td>
                <td class="text-left"><?php echo $_SESSION['nombreArenaRadier']?></td>
                <td class="text-left"><?php echo $_SESSION['ArenaRadier']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadArenaRadier']?> m3</td>
                <td class="text-right">$<?php echo $_SESSION['precioArenaRadier']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalArenaRadier']?></td>            
            </tr>     
            <tr>
                <td class="text-right"><?php echo $_SESSION['idRipioRadier']?></td>
                <td class="text-left"><?php echo $_SESSION['nombreRipioRadier']?></td>
                <td class="text-left"><?php echo $_SESSION['RipioRadier']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadRipioRadier']?> m3</td>
                <td class="text-right">$<?php echo $_SESSION['precioRipioRadier']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalRipioRadier']?></td>            
            </tr>     
            <tr>    
                <td colspan="6" class="text-center">Precio Total Radier&nbsp;$<?php echo $_SESSION['totalPresupuestoRadier']?>   </td>
            </tr>              
<!-- cotización muro-->

            <tr>
                <td class="text-right"><?php echo $_SESSION['idCementoMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['nombreCementoMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['cementoMuro']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadCementoMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['precioCementoMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalCementoMuro']?></td>            
            </tr>
            <tr>
                <td class="text-right"><?php echo $_SESSION['idArenaMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['nombreArenaMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['arenaMuro']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadArenaMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['precioArenaMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalArenaMuro']?></td>            
            </tr>
            <tr>
                <td class="text-right"><?php echo $_SESSION['idLadrillosMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['nombreLadrillosMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['ladrillosMuro']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadLadrillosMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['precioLadrillosMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalLadrillosMuro']?></td>            
            </tr>
            <tr>
                <td class="text-right"><?php echo $_SESSION['idPilaresMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['nombrePilaresMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['pilaresMuro']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadPilaresMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['precioPilaresMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalPilaresMuro']?></td>            
            </tr>
            <tr>
                <td class="text-right"><?php echo $_SESSION['idCadenasMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['nombreCadenasMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['cadenasMuro']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadCadenasMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['precioCadenasMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalCadenasMuro']?></td>            
            </tr>
            <tr>
                <?php if( $_SESSION['descripcionMuro']!='una Pandereta'){ ?>
                <td class="text-right"><?php echo $_SESSION['idPuertaMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['nombrePuertaMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['puertaMuro']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadPuertaMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['precioPuertaMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalPuertaMuro']?></td>            
                <?php } ?> 
            </tr>
            <tr>
                <?php if( $_SESSION['descripcionMuro']!='una Pandereta'){ ?>
                <td class="text-right"><?php echo $_SESSION['idVentanaMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['nombreVentanaMuro']?></td>
                <td class="text-left"><?php echo $_SESSION['ventanaMuro']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadVentanaMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['precioVentanaMuro']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalVentanaMuro']?></td>            
                <?php } ?> 
            <tr>    
                <td colspan="6" class="text-center">Precio Total Muro&nbsp;$<?php echo $_SESSION['totalPresupuestoMuro']?>   </td>
            </tr>                
<!-- cotización techo-->
            <tr>
                <td class="text-right"><?php echo $_SESSION['idTablaTecho']?></td>
                <td class="text-left"><?php echo $_SESSION['nombreTablaTecho']?></td>
                <td class="text-left"><?php echo $_SESSION['tablaTecho']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadTablaTecho']?></td>
                <td class="text-right">$<?php echo $_SESSION['precioTablaTecho']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalTablaTecho']?></td>            
            </tr>
            <tr>
                <td class="text-right"><?php echo $_SESSION['idPlanchaTecho']?></td>
                <td class="text-left"><?php echo $_SESSION['nombrePlanchaTecho']?></td>
                <td class="text-left"><?php echo $_SESSION['planchaTecho']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadPlanchaTecho']?> </td>
                <td class="text-right">$<?php echo $_SESSION['precioPlanchaTecho']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalPlanchaTecho']?></td>            
            </tr>     
            <tr>
                <td class="text-right"><?php echo $_SESSION['idFieltroTecho']?></td>
                <td class="text-left"><?php echo $_SESSION['nombreFieltroTecho']?></td>
                <td class="text-left"><?php echo $_SESSION['fieltroTecho']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadFieltroTecho']?> </td>
                <td class="text-right">$<?php echo $_SESSION['precioFieltroTecho']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalFieltroTecho']?></td>            
            </tr>                
            <tr>
                <td class="text-right"><?php echo $_SESSION['idClavoTecho']?></td>
                <td class="text-left"><?php echo $_SESSION['nombreClavoTecho']?></td>
                <td class="text-left"><?php echo $_SESSION['clavoTecho']?></td>
                <td class="text-right"><?php echo $_SESSION['cantidadClavoTecho']?> </td>
                <td class="text-right">$<?php echo $_SESSION['precioClavoTecho']?></td>
                <td class="text-right">$<?php echo $_SESSION['totalClavoTecho']?></td>            
            </tr>      
            <tr>    
                <td colspan="6" class="text-center">Precio Total Techumbre&nbsp;$<?php echo $_SESSION['totalPresupuestoTecho']?>   </td>
            </tr>  

