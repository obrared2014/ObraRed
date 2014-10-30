<?php

    function obtienePresupuestoRadier(){             
        if(isset($_POST["idUsuario"])){
            $idUsuario = filter_input(INPUT_POST, "idUsuario");
        }else{
            $idUsuario=0;
        }

    //                filter_input_array(INPUT_POST) instead of $_POST;
        $tipoPresupuesto=filter_input(INPUT_POST, 'nombreConstruccion');
        $presupuestoRapido=filter_input(INPUT_POST, 'presupuestoRapido');
        $unidadMedida=filter_input(INPUT_POST, "unidadMedida");
        $altoP=filter_input(INPUT_POST, "alto");
        $anchoP=filter_input(INPUT_POST, "ancho");
        $largoP=filter_input(INPUT_POST, "largo");
        //$idDetalle=$_POST["detalleMaterial1"];
        $idCemento=1;
        $idArena=2;
        $idRipio=3;
        $descripcion="Cálculo Radier";
        if($presupuestoRapido!='SI'){
            $consulta="call crear_presupuesto_radier($idUsuario,'$tipoPresupuesto',$idCemento,$idArena,$idRipio,$altoP,$anchoP,$largoP,'$unidadMedida')";
        }else{
            $consulta="call crear_presupuesto_radier_rapido($idUsuario,'$tipoPresupuesto',$altoP,$anchoP,$largoP,'$unidadMedida')";
        }

        $datos = mysql_query($consulta);

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
            $_SESSION['cantidadCemento']    = number_format($row['cementoCantidad'],2,',','.');
            $_SESSION['cantidadArena']      = number_format($row['arenaCantidad'],2,',','.');
            $_SESSION['cantidadRipio']      = number_format($row['ripioCantidad'],2,',','.');
            $_SESSION['totalCemento']       = number_format($row['totalCemento'],0,',','.');
            $_SESSION['totalArena']         = number_format($row['totalArena'],0,',','.');
            $_SESSION['totalRipio']         = number_format($row['totalRipio'],0,',','.');
            $_SESSION['cantidadAgua']       = $row['aguaCantidad'];
            $_SESSION['totalPresupuesto']   = number_format($row['precioTotal'],0,',','.');
            header("Location:../../Index.php?sec=Cotizacion");
        }                
 
    }
    function obtienePresupuestoTecho(){             
        if(isset($_POST["idUsuario"])){
            $idUsuario = filter_input(INPUT_POST, "idUsuario");
        }else{
            $idUsuario=0;
        }

    //                filter_input_array(INPUT_POST) instead of $_POST;
        $tipoPresupuesto=filter_input(INPUT_POST, 'nombreConstruccion');
        $presupuestoRapido=filter_input(INPUT_POST, 'presupuestoRapido');
        $unidadMedida=filter_input(INPUT_POST, "unidadMedida");
        $anchoP=filter_input(INPUT_POST, "ancho");
        $largoP=filter_input(INPUT_POST, "largo");
        $aguas=filter_input(INPUT_POST, "aguas");
        $zona=filter_input(INPUT_POST, "zona_geografica");
        if($zona=='Norte'){
            $pendiente=0.20;
        }
        if($zona=='Centro'){
            $pendiente=0.27;
        }
        if($zona=='Sur'){
            $pendiente=0.35;
        }       
        
        if($unidadMedida=='C'){
            $anchoP=$anchoP/100;
            $largoP=$largoP/100;
        }
//        $idCemento=1;
//        $idArena=2;
//        $idRipio=3;
//        $descripcion="Cálculo Radier";
        if($presupuestoRapido!='SI'){//falta hacer el presupuesto avanzado
            $consulta="call crear_presupuesto_techo($idUsuario,'$tipoPresupuesto',$idCemento,$idArena,$idRipio,$altoP,$anchoP,$largoP,'$unidadMedida')";
        }else{
            $consulta="call crear_presupuesto_techo_rapido($idUsuario,'$tipoPresupuesto',$anchoP,$largoP,$pendiente,$aguas)";
        }

        $datos = mysql_query($consulta);
//
        if($row = mysql_fetch_array($datos)){
            session_start();
            $_SESSION['id_presupuesto']     = $row['id'];
            $_SESSION['Persona']            = $row['nombre'];
            $_SESSION['fecha']              = $row['fecha'];
            $_SESSION['descripcion']        = $row['tipo'];
            $_SESSION['ancho']              = $row['ancho'];
            $_SESSION['largo']              = $row['largo'];
            $_SESSION['aguas']              = $row['aguas'];
            $_SESSION['metrosCuadrados']    = $row['metrosCuadrados'];
            $_SESSION['idRegion']           = $row['id_region'];
            $_SESSION['idCiudad']           = $row['id_ciudad'];
            $_SESSION['idTabla']           = 1;
            $_SESSION['idPlancha']         = 2;
            $_SESSION['idFieltro']          = 3;    
            $_SESSION['idClavo']           = 4;    
            $_SESSION['nombreTabla']        = $row['nombreTabla'];
            $_SESSION['nombrePlancha']      = $row['nombrePlancha'];
            $_SESSION['nombreFieltro']      = $row['nombreFieltro'];
            $_SESSION['nombreClavo']        = $row['nombreClavo'];
            $_SESSION['tabla']              = $row['tabla'];
            $_SESSION['plancha']            = $row['plancha'];
            $_SESSION['fieltro']            = $row['fieltro'];
            $_SESSION['clavo']              = $row['clavo'];
            $_SESSION['precioTabla']        = number_format($row['tablaPrecio'],0,',','.');
            $_SESSION['precioPlancha']      = number_format($row['planchaPrecio'],0,',','.');
            $_SESSION['precioFieltro']      = number_format($row['fieltroPrecio'],0,',','.');
            $_SESSION['precioClavo']        = number_format($row['clavoPrecio'],0,',','.');
            $_SESSION['cantidadTabla']      = number_format($row['tablaCantidad'],2,',',',');
            $_SESSION['cantidadPlancha']    = number_format($row['planchaCantidad'],2,',',',');
            $_SESSION['cantidadFieltro']    = number_format($row['fieltroCantidad'],2,',',',');
            $_SESSION['cantidadClavo']      = number_format($row['clavoCantidad'],2,',',',');
            $_SESSION['totalTabla']         = number_format($row['totalTablas'],0,',','.');
            $_SESSION['totalPlancha']       = number_format($row['totalPlanchas'],0,',','.');
            $_SESSION['totalFieltro']       = number_format($row['totalFieltro'],0,',','.');
            $_SESSION['totalClavo']         = number_format($row['totalClavos'],0,',','.');
            $_SESSION['totalPresupuesto']   = number_format($row['precioTotal'],0,',','.');
            header("Location:../../Index.php?sec=Cotizacion2");
        }                
 
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

