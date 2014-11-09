
<table align="center" border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt">
<tr>        
    <td colspan="4" class="text-center"><b>PRESUPUESTOS PARA MURO</b></td>
</tr>

<tr>
<td class="text-center"><font face="verdana"><b>Nº</b></font></td>
<td class="text-center"><font face="verdana"><b>Fecha</b></font></td>
<td class="text-center"><font face="verdana"><b>Detalle</b></font></td>
<td class="text-center"><font face="verdana"><b>Precio Total</b></font></td>
</tr>

<?php  
    include './Modelo/Presupuestos/informesPresupuestos.php';
    $nombre=$_SESSION['nombre'].' '.$_SESSION['ap_paterno'];
    traeInformePresupuestos($nombre,'Muro','metrosCuadrados','m2');
?>
</table>
<br/>
<table align="center" border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt">
<tr>        
    <td colspan="4" class="text-center"><b>PRESUPUESTOS PARA TECHO</b></td>
</tr>

<tr>        
<td class="text-center"><font face="verdana"><b>Nº</b></font></td>
<td class="text-center"><font face="verdana"><b>Fecha</b></font></td>
<td class="text-center"><font face="verdana"><b>Detalle</b></font></td>
<td class="text-center"><font face="verdana"><b>Precio Total</b></font></td>
</tr>

<?php  

    $nombre=$_SESSION['nombre'].' '.$_SESSION['ap_paterno'];
    traeInformePresupuestos($nombre,'Techo','metrosCuadrados','m2');
?>
</table>
<br/>
<table align="center" border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt">
<tr>        
    <td colspan="4" class="text-center"><b>PRESUPUESTOS PARA RADIER</b></td>
</tr>
    
<tr>
<td class="text-center"><font face="verdana"><b>Nº</b></font></td>
<td class="text-center"><font face="verdana"><b>Fecha</b></font></td>
<td class="text-center"><font face="verdana"><b>Detalle</b></font></td>
<td class="text-center"><font face="verdana"><b>Precio Total</b></font></td>
</tr>

<?php  

    $nombre=$_SESSION['nombre'].' '.$_SESSION['ap_paterno'];
    traeInformePresupuestos($nombre,'Radier','metrosCubicos','m3');
?>
</table>
