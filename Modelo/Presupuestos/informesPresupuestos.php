<?php
function traeInformePresupuestos($nombre,$tipo,$metros,$m2o3,$idPersona){
    //$nombre=$_SESSION['nombre'].' '.$_SESSION['ap_paterno'];
  $link = @mysql_connect("localhost", "root","root")
      or die ("Error al conectar a la base de datos.");
  @mysql_select_db("db_obrared", $link)
      or die ("Error al conectar a la base de datos.");
  $query = "SELECT *  " .
      "FROM (select @f1:=".$idPersona." p) param, db_obrared.v_presupuesto_".strtolower($tipo)." " .
	  "WHERE nombre='".$nombre."'"." and precioTotal".$tipo.">'0'".
	  "order by precioTotal".$tipo."";
  $result = mysql_query($query);
  $numero = 0;
  while($row = mysql_fetch_array($result))
  {
    $numero++;  
    echo "<tr><td width=\"5%\"><font face=\"verdana\">" . 
	    $numero . "</font></td>";
    echo "<td width=\"10%\" style=\"text-align: center;\"><font face=\"verdana\">" . 
	    $row["fecha".$tipo.""] . "</font></td>";
    echo "<td width=\"20%\"><font face=\"verdana\">Cotizaci&oacute;n para " . 
	    $row["tipo"] .' de '.$row["$metros"].' '.$m2o3.''. "</font></td>";
    echo "<td  class='text-right' width=\"10%\"><font face=\"verdana\">" . 
	    '$'. number_format($row['precioTotal'.$tipo.''],0,',','.')."</font></td>";    
    echo "<td width=\"15%\" align=\"center\"><font face=\"verdana\"><a href=\"javascript:mostrarPresupuesto(".$row["id"].",'".$tipo."');\"> 
	    <button type='button' class='btn btn-success '>Click para ver</button></a></font></td></tr>";    
    
  } 
    echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Cantidad de Presupuestos: " . $numero . 
         "</b></font></td></tr>";
  mysql_free_result($result);
  mysql_close($link);
}
function mostrarPresupuestoMuro($idPresupuesto){
//        $idPresupuesto=474;
        $link = @mysql_connect("localhost", "root","root")
            or die ("Error al conectar a la base de datos.");
        @mysql_select_db("db_obrared", $link)
            or die ("Error al conectar a la base de datos.");
        
        $consulta="call mostrarPresupuestoMuro(".$idPresupuesto.")";

        $datos = mysql_query($consulta);
//
        if($row = mysql_fetch_array($datos)){
//            session_start();
            $_SESSION['que']                        = 'Muro';
            $_SESSION['m2m3']                       = '2';
            $_SESSION['id_presupuestoMuro']         = $row['id'];
            $_SESSION['Persona']                    = $row['nombre'];
            $_SESSION['fecha']                      = $row['fechaMuro'];
            $_SESSION['descripcionMuro']            = $row['tipoMuro'];
            $_SESSION['altoMuro']           = $row['alto'];
            $_SESSION['anchoMuro']          = $row['ancho'];
            $_SESSION['largoMuro']          = $row['largo'];            
            $_SESSION['metrosMuro']= $row['metrosCuadrados'];
//            $_SESSION['idRegion']           = $row['id_region'];
//            $_SESSION['idCiudad']           = $row['id_ciudad'];
            $_SESSION['idCementoMuro']      = 1;
            $_SESSION['idArenaMuro']        = 2;
            $_SESSION['idLadrillosMuro']    = 3;    
            $_SESSION['idPilaresMuro']      = 4;    
            $_SESSION['idCadenasMuro']      = 5;    
            $_SESSION['idPuertaMuro']       = 6;    
            $_SESSION['idVentanaMuro']      = 7;    
            $_SESSION['nombreCementoMuro']  = $row['nombreCementoMuro'];
            $_SESSION['nombreArenaMuro']    = $row['nombreArenaMuro'];
            $_SESSION['nombreLadrillosMuro']= $row['nombreLadrilloMuro'];
            $_SESSION['nombrePilaresMuro']  = $row['nombrePilarMuro'];
            $_SESSION['nombreCadenasMuro']      = $row['nombreCadenaMuro'];
            $_SESSION['nombrePuertaMuro']      = $row['nombrePuertaMuro'];
            $_SESSION['nombreVentanaMuro']      = $row['nombreVentanaMuro'];
            $_SESSION['cementoMuro']        = $row['cementoMuro'];
            $_SESSION['arenaMuro']          = $row['arenaMuro'];
            $_SESSION['ladrillosMuro']      = $row['ladrilloMuro'];
            $_SESSION['pilaresMuro']        = $row['pilarMuro'];
            $_SESSION['cadenasMuro']        = $row['cadenaMuro'];
            $_SESSION['puertaMuro']        = $row['puertaMuro'];
            $_SESSION['ventanaMuro']        = $row['ventanaMuro'];
            $_SESSION['precioCementoMuro']  = number_format($row['cementoPrecioMuro'],0,',','.');
            $_SESSION['precioArenaMuro']    = number_format($row['arenaPrecioMuro'],0,',','.');
            $_SESSION['precioLadrillosMuro']= number_format($row['ladrilloPrecioMuro'],0,',','.');
            $_SESSION['precioPilaresMuro']  = number_format($row['pilarPrecioMuro'],0,',','.');
            $_SESSION['precioCadenasMuro']  = number_format($row['cadenaPrecioMuro'],0,',','.');
            $_SESSION['precioPuertaMuro']  = number_format($row['puertaPrecioMuro'],0,',','.');
            $_SESSION['precioVentanaMuro']  = number_format($row['ventanaPrecioMuro'],0,',','.');
            $_SESSION['cantidadCementoMuro']    = number_format($row['cementoCantidadMuro'],2,',','.');
            $_SESSION['cantidadArenaMuro']      = number_format($row['arenaCantidadMuro'],2,',','.');
            $_SESSION['cantidadLadrillosMuro']  = number_format($row['ladrilloCantidadMuro'],2,',','.');
            $_SESSION['cantidadPilaresMuro']    = number_format($row['pilarCantidadMuro'],2,',','.');
            $_SESSION['cantidadCadenasMuro']    = number_format($row['cadenaCantidadMuro'],2,',','.');
            $_SESSION['cantidadPuertaMuro']    = number_format($row['puertaCantidadMuro'],2,',','.');
            $_SESSION['cantidadVentanaMuro']    = number_format($row['ventanaCantidadMuro'],2,',','.');
            $_SESSION['totalCementoMuro']       = number_format($row['totalCementoMuro'],0,',','.');
            $_SESSION['totalArenaMuro']         = number_format($row['totalArenaMuro'],0,',','.');
            $_SESSION['totalLadrillosMuro']     = number_format($row['totalLadrillosMuro'],0,',','.');
            $_SESSION['totalPilaresMuro']       = number_format($row['totalPilaresMuro'],0,',','.');
            $_SESSION['totalCadenasMuro']       = number_format($row['totalCadenasMuro'],0,',','.');
            $_SESSION['totalPuertaMuro']       = number_format($row['totalPuertaMuro'],0,',','.');
            $_SESSION['totalVentanaMuro']       = number_format($row['totalVentanaMuro'],0,',','.');
            $_SESSION['totalPresupuestoMuro']       = number_format($row['precioTotalMuro'],0,',','.');
            $diezPorCiento   = $row['precioTotalMuro']*0.10;
            $_SESSION['totalMuro10']   = number_format($diezPorCiento,0,',','.');               
            echo ("<script>window.location='Index.php?sec=Cotizacion';</script>");
        } 
         mysql_free_result($datos);
        mysql_close($link);
}
function mostrarPresupuestoRadier($idPresupuesto){
//        $idPresupuesto=474;
        $link = @mysql_connect("localhost", "root","root")
            or die ("Error al conectar a la base de datos.");
        @mysql_select_db("db_obrared", $link)
            or die ("Error al conectar a la base de datos.");
        
        $consulta="call mostrarPresupuestoRadier(".$idPresupuesto.")";

        $datos = mysql_query($consulta);
//
        if($row = mysql_fetch_array($datos)){
//            session_start();
            $_SESSION['que']                        = 'Radier';
            $_SESSION['m2m3']                       = '3';
            $_SESSION['id_presupuestoRadier']       = $row['id'];
            $_SESSION['Persona']                    = $row['nombre'];
            $_SESSION['fecha']                      = $row['fechaRadier'];
            $_SESSION['descripcionRadier']          = $row['tipo'];
            $_SESSION['altoRadier']                 = $row['alto'];
            $_SESSION['anchoRadier']              = $row['ancho'];
            $_SESSION['largoRadier']              = $row['largo'];
            $_SESSION['metrosRadier']               = $row['metrosCubicos'];
//            $_SESSION['idRegionRadier']           = $row['id_region'];
//            $_SESSION['idCiudadRadier']           = $row['id_ciudad'];
            $_SESSION['idCementoRadier']          = 1;
            $_SESSION['idArenaRadier']            = 2;
            $_SESSION['idRipioRadier']            = 3;    
            $_SESSION['nombreCementoRadier']      = $row['nombreCementoRadier'];
            $_SESSION['nombreArenaRadier']        = $row['nombreArenaRadier'];
            $_SESSION['nombreRipioRadier']        = $row['nombreRipioRadier'];
            $_SESSION['CementoRadier']            = $row['cementoRadier'];
            $_SESSION['ArenaRadier']              = $row['arenaRadier'];
            $_SESSION['RipioRadier']              = $row['ripioRadier'];
            $_SESSION['precioCementoRadier']      = number_format($row['cementoPrecioRadier'],0,',','.');
            $_SESSION['precioArenaRadier']        = number_format($row['arenaPrecioRadier'],0,',','.');
            $_SESSION['precioRipioRadier']        = number_format($row['ripioPrecioRadier'],0,',','.');
            $_SESSION['cantidadCementoRadier']    = number_format($row['cementoCantidadRadier'],2,',','.');
            $_SESSION['cantidadArenaRadier']      = number_format($row['arenaCantidadRadier'],2,',','.');
            $_SESSION['cantidadRipioRadier']      = number_format($row['ripioCantidadRadier'],2,',','.');
            $_SESSION['totalCementoRadier']       = number_format($row['totalCementoRadier'],0,',','.');
            $_SESSION['totalArenaRadier']         = number_format($row['totalArenaRadier'],0,',','.');
            $_SESSION['totalRipioRadier']         = number_format($row['totalRipioRadier'],0,',','.');
            $_SESSION['cantidadAguaRadier']       = $row['aguaCantidadRadier'];
            $_SESSION['totalPresupuestoRadier']   = number_format($row['precioTotalRadier'],0,',','.');
            $diezPorCiento   = $row['precioTotalRadier']*0.10;
            $_SESSION['totalRadier10']   = number_format($diezPorCiento,0,',','.');                   
            echo ("<script>window.location='Index.php?sec=Cotizacion';</script>");
        } 
         mysql_free_result($datos);
        mysql_close($link);
}
function mostrarPresupuestoTecho($idPresupuesto){
//        $idPresupuesto=474;
        $link = @mysql_connect("localhost", "root","root")
            or die ("Error al conectar a la base de datos.");
        @mysql_select_db("db_obrared", $link)
            or die ("Error al conectar a la base de datos.");
        
        $consulta="call mostrarPresupuestoTecho(".$idPresupuesto.")";
        

        $datos = mysql_query($consulta);
//
        if($row = mysql_fetch_array($datos)){
//            session_start();
            $_SESSION['que']                        ='Techo';
            $_SESSION['m2m3']                       = '2';
            $_SESSION['id_presupuestoTecho']     = $row['id'];
            $_SESSION['Persona']            = $row['nombre'];
            $_SESSION['fecha']              = $row['fechaTecho'];
            $_SESSION['descripcionTecho']        = $row['tipo'];
            $_SESSION['anchoTecho']              = $row['ancho'];
            $_SESSION['largoTecho']              = $row['largo'];
            $_SESSION['aguasTecho']              = $row['aguas'];
            $_SESSION['metrosTecho']    = $row['metrosCuadrados'];
//            $_SESSION['idRegionTecho']           = $row['id_region'];
//            $_SESSION['idCiudadTecho']           = $row['id_ciudad'];
            $_SESSION['idTablaTecho']           = 1;
            $_SESSION['idPlanchaTecho']         = 2;
            $_SESSION['idFieltroTecho']          = 3;    
            $_SESSION['idClavoTecho']           = 4;    
            $_SESSION['nombreTablaTecho']        = $row['nombreTablaTecho'];
            $_SESSION['nombrePlanchaTecho']      = $row['nombrePlanchaTecho'];
            $_SESSION['nombreFieltroTecho']      = $row['nombreFieltroTecho'];
            $_SESSION['nombreClavoTecho']        = $row['nombreClavoTecho'];
            $_SESSION['tablaTecho']              = $row['tablaTecho'];
            $_SESSION['planchaTecho']            = $row['planchaTecho'];
            $_SESSION['fieltroTecho']            = $row['fieltroTecho'];
            $_SESSION['clavoTecho']              = $row['clavoTecho'];
            $_SESSION['precioTablaTecho']        = number_format($row['tablaPrecioTecho'],0,',','.');
            $_SESSION['precioPlanchaTecho']      = number_format($row['planchaPrecioTecho'],0,',','.');
            $_SESSION['precioFieltroTecho']      = number_format($row['fieltroPrecioTecho'],0,',','.');
            $_SESSION['precioClavoTecho']        = number_format($row['clavoPrecioTecho'],0,',','.');
            $_SESSION['cantidadTablaTecho']      = number_format($row['tablaCantidadTecho'],2,',','.');
            $_SESSION['cantidadPlanchaTecho']    = number_format($row['planchaCantidadTecho'],2,',','.');
            $_SESSION['cantidadFieltroTecho']    = number_format($row['fieltroCantidadTecho'],2,',','.');
            $_SESSION['cantidadClavoTecho']      = number_format($row['clavoCantidadTecho'],2,',','.');
            $_SESSION['totalTablaTecho']         = number_format($row['totalTablasTecho'],0,',','.');
            $_SESSION['totalPlanchaTecho']       = number_format($row['totalPlanchasTecho'],0,',','.');
            $_SESSION['totalFieltroTecho']       = number_format($row['totalFieltroTecho'],0,',','.');
            $_SESSION['totalClavoTecho']         = number_format($row['totalClavosTecho'],0,',','.');
            $_SESSION['totalPresupuestoTecho']   = number_format($row['precioTotalTecho'],0,',','.');
            $diezPorCiento   = $row['precioTotalTecho']*0.10;
            $_SESSION['totalTecho10']   = number_format($diezPorCiento,0,',','.');
            echo ("<script>window.location='Index.php?sec=Cotizacion';</script>");
        }   
                 mysql_free_result($datos);
        mysql_close($link);
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

