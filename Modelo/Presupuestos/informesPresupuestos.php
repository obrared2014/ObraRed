<?php
function traeInformePresupuestos($nombre,$tipo,$metros,$m2o3){
    //$nombre=$_SESSION['nombre'].' '.$_SESSION['ap_paterno'];
  $link = @mysql_connect("localhost", "root","root")
      or die ("Error al conectar a la base de datos.");
  @mysql_select_db("db_obrared", $link)
      or die ("Error al conectar a la base de datos.");
  $query = "SELECT *  " .
      "FROM db_obrared.v_presupuesto_".strtolower($tipo)." " .
	  "WHERE nombre='".$nombre."'"." and precioTotal".$tipo.">'0'".
	  "order by precioTotal".$tipo."";
  $result = mysql_query($query);
  $numero = 0;
  while($row = mysql_fetch_array($result))
  {
    $numero++;  
    echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
	    $numero . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["fecha".$tipo.""] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["tipo"] .' de '.$row["$metros"].' '.$m2o3.''. "</font></td>";
    echo "<td  class='text-right' width=\"25%\"><font face=\"verdana\">" . 
	    '$'. number_format($row['precioTotal'.$tipo.''],0,',','.')."</font></td></tr>";    
    
  } 
    echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Cantidad de Presupuestos: " . $numero . 
         "</b></font></td></tr>";
  mysql_free_result($result);
  mysql_close($link);
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

