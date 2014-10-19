<?php

function obtienePresupuestoRadier(){
                 
                if(isset($_POST["idUsuario"])){
                    $idUsuario = $_POST["idUsuario"];
                }else{
                    $idUsuario=0;
                }
                
                $tipoPresupuesto=$_POST["construccion"];
                
                $unidadMedida=$_POST["unidadMedida"];
                $altoP=$_POST["alto"];
                $anchoP=$_POST["ancho"];
                $largoP=$_POST["largo"];
                //$idDetalle=$_POST["detalleMaterial1"];
                $idCemento=1;
                $idArena=2;
                $idRipio=3;
                $descripcion="Cálculo Radier";
//                $datos = mysql_query("call generar_presupuesto_radier($idUsuario,'$descripcion',$idCemento,$idArena,$idRipio,$altoP,$anchoP,$largoP,'$unidadMedida')");
//                if($row = mysql_fetch_array($datos)){
//                    session_start();
//                    $_SESSION['id_presupuesto'] = $row['id_presupuesto_radier'];
//                    $_SESSION['idPersona'] = $row['id_persona'];
//                    $_SESSION['descripcion'] = $row['descripcion_presupuesto'];
//                    $_SESSION['fecha'] = $row['fecha_presupuesto'];
//                    $_SESSION['alto'] = $row['alto'];
//                    $_SESSION['ancho'] = $row['ancho'];
//                    $_SESSION['largo'] = $row['largo'];
//                    $_SESSION['metrosCubicos'] = $row['metrosCubicos'];
//                    $_SESSION['idRegion'] = $row['id_region'];
//                    $_SESSION['idCiudad'] = $row['id_ciudad'];
//                    $_SESSION['idCemento'] = $row['id_cemento'];
//                    $_SESSION['idArena'] = $row['id_arena'];
//                    $_SESSION['idRipio'] = $row['id_ripio'];
//                    $_SESSION['precioCemento'] = $row['precio_cemento'];
//                    $_SESSION['precioArena'] = $row['precio_arena'];
//                    $_SESSION['precioRipio'] = $row['precio_ripio'];                    
//                    $_SESSION['cantidadCemento'] = $row['cantidad_cemento'];
//                    $_SESSION['cantidadArena'] = $row['cantidad_arena'];
//                    $_SESSION['cantidadRipio'] = $row['cantidad_ripio'];
//                    $_SESSION['totalCemento'] = $row['total_cemento'];
//                    $_SESSION['totalArena'] = $row['total_arena'];
//                    $_SESSION['totalRipio'] = $row['total_ripio'];
//                    $_SESSION['cantidadAgua'] = $row['cantidad_agua'];
//                    $_SESSION['totalPresupuesto'] = $row['total_presupuesto'];
//                    header("Location:../../Index.php?sec=Cotizacion");
//                }
                $datos = mysql_query("call crear_presupuesto_radier($idUsuario,'$tipoPresupuesto',$idCemento,$idArena,$idRipio,$altoP,$anchoP,$largoP,'$unidadMedida')");
                
                if($row = mysql_fetch_array($datos)){
                    session_start();
                    $_SESSION['id_presupuesto']     = $row['id'];
                    $_SESSION['Persona']            = $row['nombre'];
                    $_SESSION['fecha']              = $row['fecha'];
                    $_SESSION['descripcion']        = $row['tipo'];
                    $_SESSION['alto']               = $row['alto'];
                    $_SESSION['ancho']              = $row['ancho'];
                    $_SESSION['largo']              = $row['largo'];
                    $_SESSION['metrosCubicos']      = $row['metrosCubicos'];
                    $_SESSION['idRegion']           = $row['id_region'];
                    $_SESSION['idCiudad']           = $row['id_ciudad'];
                    $_SESSION['idCemento']          = 1;
                    $_SESSION['idArena']            = 2;
                    $_SESSION['idRipio']            = 3;    
                    $_SESSION['nombreCemento']      = $row['nombreCemento'];
                    $_SESSION['nombreArena']        = $row['nombreArena'];
                    $_SESSION['nombreRipio']        = $row['nombreRipio'];
                    $_SESSION['Cemento']            = $row['cemento'];
                    $_SESSION['Arena']              = $row['arena'];
                    $_SESSION['Ripio']              = $row['ripio'];
                    $_SESSION['precioCemento']      = number_format($row['cementoPrecio'],0,',','.');
                    $_SESSION['precioArena']        = number_format($row['arenaPrecio'],0,',','.');
                    $_SESSION['precioRipio']        = number_format($row['ripioPrecio'],0,',','.');
                    $_SESSION['cantidadCemento']    = number_format($row['cementoCantidad'],2,',',',');
                    $_SESSION['cantidadArena']      = number_format($row['arenaCantidad'],2,',',',');
                    $_SESSION['cantidadRipio']      = number_format($row['ripioCantidad'],2,',',',');
                    $_SESSION['totalCemento']       = number_format($row['totalCemento'],0,',','.');
                    $_SESSION['totalArena']         = number_format($row['totalArena'],0,',','.');
                    $_SESSION['totalRipio']         = number_format($row['totalRipio'],0,',','.');
                    $_SESSION['cantidadAgua']       = $row['aguaCantidad'];
                    $_SESSION['totalPresupuesto']   = number_format($row['precioTotal'],0,',','.');
                    header("Location:../../Index.php?sec=Cotizacion");
                }                
                
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

