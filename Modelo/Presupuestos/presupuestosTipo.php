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
            $_SESSION['que']                        = 'Radier';
            $_SESSION['m2m3']                       = '3';
            $_SESSION['id_presupuestoRadier']       = $row['id'];
            $_SESSION['Persona']                    = $row['nombre'];
            $_SESSION['fecha']                      = $row['fecha'];
            $_SESSION['descripcionRadier']          = $row['tipo'];
            $_SESSION['altoRadier']                 = $row['alto'];
            $_SESSION['anchoRadier']              = $row['ancho'];
            $_SESSION['largoRadier']              = $row['largo'];
            $_SESSION['metrosRadier']      = $row['metrosCubicos'];
            $_SESSION['idRegionRadier']           = $row['id_region'];
            $_SESSION['idCiudadRadier']           = $row['id_ciudad'];
            $_SESSION['idCementoRadier']          = 1;
            $_SESSION['idArenaRadier']            = 2;
            $_SESSION['idRipioRadier']            = 3;    
            $_SESSION['nombreCementoRadier']      = $row['nombreCemento'];
            $_SESSION['nombreArenaRadier']        = $row['nombreArena'];
            $_SESSION['nombreRipioRadier']        = $row['nombreRipio'];
            $_SESSION['CementoRadier']            = $row['cemento'];
            $_SESSION['ArenaRadier']              = $row['arena'];
            $_SESSION['RipioRadier']              = $row['ripio'];
            $_SESSION['precioCementoRadier']      = number_format($row['cementoPrecio'],0,',','.');
            $_SESSION['precioArenaRadier']        = number_format($row['arenaPrecio'],0,',','.');
            $_SESSION['precioRipioRadier']        = number_format($row['ripioPrecio'],0,',','.');
            $_SESSION['cantidadCementoRadier']    = number_format($row['cementoCantidad'],2,',','.');
            $_SESSION['cantidadArenaRadier']      = number_format($row['arenaCantidad'],2,',','.');
            $_SESSION['cantidadRipioRadier']      = number_format($row['ripioCantidad'],2,',','.');
            $_SESSION['totalCementoRadier']       = number_format($row['totalCemento'],0,',','.');
            $_SESSION['totalArenaRadier']         = number_format($row['totalArena'],0,',','.');
            $_SESSION['totalRipioRadier']         = number_format($row['totalRipio'],0,',','.');
            $_SESSION['cantidadAguaRadier']       = $row['aguaCantidad'];
            $_SESSION['totalPresupuestoRadier']   = number_format($row['precioTotal'],0,',','.');
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
            $_SESSION['que']                        ='Techo';
            $_SESSION['m2m3']                       = '2';
            $_SESSION['id_presupuestoTecho']     = $row['id'];
            $_SESSION['Persona']            = $row['nombre'];
            $_SESSION['fecha']              = $row['fecha'];
            $_SESSION['descripcionTecho']        = $row['tipo'];
            $_SESSION['anchoTecho']              = $row['ancho'];
            $_SESSION['largoTecho']              = $row['largo'];
            $_SESSION['aguasTecho']              = $row['aguas'];
            $_SESSION['metrosTecho']    = $row['metrosCuadrados'];
            $_SESSION['idRegionTecho']           = $row['id_region'];
            $_SESSION['idCiudadTecho']           = $row['id_ciudad'];
            $_SESSION['idTablaTecho']           = 1;
            $_SESSION['idPlanchaTecho']         = 2;
            $_SESSION['idFieltroTecho']          = 3;    
            $_SESSION['idClavoTecho']           = 4;    
            $_SESSION['nombreTablaTecho']        = $row['nombreTabla'];
            $_SESSION['nombrePlanchaTecho']      = $row['nombrePlancha'];
            $_SESSION['nombreFieltroTecho']      = $row['nombreFieltro'];
            $_SESSION['nombreClavoTecho']        = $row['nombreClavo'];
            $_SESSION['tablaTecho']              = $row['tabla'];
            $_SESSION['planchaTecho']            = $row['plancha'];
            $_SESSION['fieltroTecho']            = $row['fieltro'];
            $_SESSION['clavoTecho']              = $row['clavo'];
            $_SESSION['precioTablaTecho']        = number_format($row['tablaPrecio'],0,',','.');
            $_SESSION['precioPlanchaTecho']      = number_format($row['planchaPrecio'],0,',','.');
            $_SESSION['precioFieltroTecho']      = number_format($row['fieltroPrecio'],0,',','.');
            $_SESSION['precioClavoTecho']        = number_format($row['clavoPrecio'],0,',','.');
            $_SESSION['cantidadTablaTecho']      = number_format($row['tablaCantidad'],2,',','.');
            $_SESSION['cantidadPlanchaTecho']    = number_format($row['planchaCantidad'],2,',','.');
            $_SESSION['cantidadFieltroTecho']    = number_format($row['fieltroCantidad'],2,',','.');
            $_SESSION['cantidadClavoTecho']      = number_format($row['clavoCantidad'],2,',','.');
            $_SESSION['totalTablaTecho']         = number_format($row['totalTablas'],0,',','.');
            $_SESSION['totalPlanchaTecho']       = number_format($row['totalPlanchas'],0,',','.');
            $_SESSION['totalFieltroTecho']       = number_format($row['totalFieltro'],0,',','.');
            $_SESSION['totalClavoTecho']         = number_format($row['totalClavos'],0,',','.');
            $_SESSION['totalPresupuestoTecho']   = number_format($row['precioTotal'],0,',','.');
            header("Location:../../Index.php?sec=Cotizacion");
        }                
 
    }
    function obtienePresupuestoMuro(){             
        if(isset($_POST["idUsuario"])){
            $idUsuario = filter_input(INPUT_POST, "idUsuario");
        }else{
            $idUsuario=0;
        }

    //                filter_input_array(INPUT_POST) instead of $_POST;
        $tipoPresupuesto=filter_input(INPUT_POST, 'nombreConstruccion');
        $presupuestoRapido=filter_input(INPUT_POST, 'presupuestoRapido');
        $unidadMedida=filter_input(INPUT_POST, "unidadMedida");
        $alto=filter_input(INPUT_POST, "alto");
        $anchoP=filter_input(INPUT_POST, "ancho");
        $largoP=filter_input(INPUT_POST, "largo");
        $tipoMuro=filter_input(INPUT_POST, "tipo_muro");
        
        if($unidadMedida=='C'){
            $anchoP=$anchoP/100;
            $largoP=$largoP/100;
        }
//        $idCemento=1;
//        $idArena=2;
//        $idRipio=3;
//        $descripcion="Cálculo Radier";
        if($presupuestoRapido!='SI'){//falta hacer el presupuesto avanzado
            $consulta="call crear_presupuesto_muro($idUsuario,'$tipoPresupuesto',$idCemento,$idArena,$idRipio,$altoP,$anchoP,$largoP,'$unidadMedida')";
        }else{
            $consulta="call crear_presupuesto_muro_rapido($idUsuario,'$tipoPresupuesto',$alto,$anchoP,$largoP,'$tipoMuro')";
        }

        $datos = mysql_query($consulta);
//
        if($row = mysql_fetch_array($datos)){
            session_start();
            $_SESSION['que']                        = 'Muro';
            $_SESSION['m2m3']                       = '2';
            $_SESSION['id_presupuestoMuro']         = $row['id'];
            $_SESSION['Persona']                    = $row['nombre'];
            $_SESSION['fecha']                      = $row['fecha'];
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
            $_SESSION['nombreCementoMuro']  = $row['nombreCemento'];
            $_SESSION['nombreArenaMuro']    = $row['nombreArena'];
            $_SESSION['nombreLadrillosMuro']= $row['nombreLadrillo'];
            $_SESSION['nombrePilaresMuro']  = $row['nombrePilar'];
            $_SESSION['nombreCadenasMuro']      = $row['nombreCadena'];
            $_SESSION['nombrePuertaMuro']      = $row['nombrePuerta'];
            $_SESSION['nombreVentanaMuro']      = $row['nombreVentana'];
            $_SESSION['cementoMuro']        = $row['cemento'];
            $_SESSION['arenaMuro']          = $row['arena'];
            $_SESSION['ladrillosMuro']      = $row['ladrillo'];
            $_SESSION['pilaresMuro']        = $row['pilar'];
            $_SESSION['cadenasMuro']        = $row['cadena'];
            $_SESSION['puertaMuro']        = $row['puerta'];
            $_SESSION['ventanaMuro']        = $row['ventana'];
            $_SESSION['precioCementoMuro']  = number_format($row['cementoPrecio'],0,',','.');
            $_SESSION['precioArenaMuro']    = number_format($row['arenaPrecio'],0,',','.');
            $_SESSION['precioLadrillosMuro']= number_format($row['ladrilloPrecio'],0,',','.');
            $_SESSION['precioPilaresMuro']  = number_format($row['pilarPrecio'],0,',','.');
            $_SESSION['precioCadenasMuro']  = number_format($row['cadenaPrecio'],0,',','.');
            $_SESSION['precioPuertaMuro']  = number_format($row['puertaPrecio'],0,',','.');
            $_SESSION['precioVentanaMuro']  = number_format($row['ventanaPrecio'],0,',','.');
            $_SESSION['cantidadCementoMuro']    = number_format($row['cementoCantidad'],2,',','.');
            $_SESSION['cantidadArenaMuro']      = number_format($row['arenaCantidad'],2,',','.');
            $_SESSION['cantidadLadrillosMuro']  = number_format($row['ladrilloCantidad'],2,',','.');
            $_SESSION['cantidadPilaresMuro']    = number_format($row['pilarCantidad'],2,',','.');
            $_SESSION['cantidadCadenasMuro']    = number_format($row['cadenaCantidad'],2,',','.');
            $_SESSION['cantidadPuertaMuro']    = number_format($row['puertaCantidad'],2,',','.');
            $_SESSION['cantidadVentanaMuro']    = number_format($row['ventanaCantidad'],2,',','.');
            $_SESSION['totalCementoMuro']       = number_format($row['totalCemento'],0,',','.');
            $_SESSION['totalArenaMuro']         = number_format($row['totalArena'],0,',','.');
            $_SESSION['totalLadrillosMuro']     = number_format($row['totalLadrillos'],0,',','.');
            $_SESSION['totalPilaresMuro']       = number_format($row['totalPilares'],0,',','.');
            $_SESSION['totalCadenasMuro']       = number_format($row['totalCadenas'],0,',','.');
            $_SESSION['totalPuertaMuro']       = number_format($row['totalPuerta'],0,',','.');
            $_SESSION['totalVentanaMuro']       = number_format($row['totalVentana'],0,',','.');
            $_SESSION['totalPresupuestoMuro']       = number_format($row['precioTotal'],0,',','.');
            header("Location:../../Index.php?sec=Cotizacion");
        }                
 
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

