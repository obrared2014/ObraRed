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
        $descripcion="Cálculo Radier";
        if($presupuestoRapido!='SI'){
            $idCemento=filter_input(INPUT_POST, 'detalleCemento');
            $idArena=filter_input(INPUT_POST, 'detalleArena');
            $idRipio=filter_input(INPUT_POST, 'detalleRipio');
            
            $consulta="call crear_presupuesto_radier($idUsuario,'$tipoPresupuesto',$idCemento,$idArena,$idRipio,$altoP,$anchoP,$largoP,'$unidadMedida')";
        }else{
            $consulta="call crear_presupuesto_radier_rapido($idUsuario,'$tipoPresupuesto',$altoP,$anchoP,$largoP,'$unidadMedida',0)";
        }

        $datos = mysql_query($consulta);

        if($row = mysql_fetch_array($datos)){
            session_start();
            $_SESSION['que']                        = 'Radier';
            $_SESSION['m2m3']                       = '3';
            $_SESSION['id_presupuestoRadier']       = $row['id'];
            $_SESSION['Persona']                    = $row['nombre'];
            $_SESSION['fecha']                      = $row['fechaRadier'];
            $_SESSION['descripcionRadier']          = $row['tipo'];
            $_SESSION['altoRadier']                 = $row['alto'];
            $_SESSION['anchoRadier']              = $row['ancho'];
            $_SESSION['largoRadier']              = $row['largo'];
            $_SESSION['metrosRadier']             = $row['metrosCubicos'];
            $_SESSION['idRegionRadier']           = $row['id_region'];
            $_SESSION['idCiudadRadier']           = $row['id_ciudad'];
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
        if($presupuestoRapido!='SI'){
            $idClavos=filter_input(INPUT_POST, "detalleClavo");
            $idFieltro=filter_input(INPUT_POST, "detalleFieltro");
            $idZinc=filter_input(INPUT_POST, "detallePlancha");
            $idTabla=filter_input(INPUT_POST, "detalleTabla");
            
            $consulta="call crear_presupuesto_techo($idUsuario,'$tipoPresupuesto',$anchoP,$largoP,$pendiente,$aguas,$idClavos,$idFieltro,$idZinc,$idTabla)";
        }else{
            $consulta="call crear_presupuesto_techo_rapido($idUsuario,'$tipoPresupuesto',$anchoP,$largoP,$pendiente,$aguas,0)";
        }

        $datos = mysql_query($consulta);
//
        if($row = mysql_fetch_array($datos)){
            session_start();
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
            $_SESSION['idRegionTecho']           = $row['id_region'];
            $_SESSION['idCiudadTecho']           = $row['id_ciudad'];
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
        $altoP=filter_input(INPUT_POST, "alto");
        $anchoP=filter_input(INPUT_POST, "ancho");
        $largoP=filter_input(INPUT_POST, "largo");
        $tipoMuro=filter_input(INPUT_POST, "tipo_muro");
        
        if($unidadMedida=='C'){
            $altoP=$altoP/100;
            $anchoP=$anchoP/100;
            $largoP=$largoP/100;
        }
//        $idCemento=1;
//        $idArena=2;
//        $idRipio=3;
//        $descripcion="Cálculo Radier";
        if($presupuestoRapido!='SI'){//falta hacer el presupuesto avanzado
//            id_persona int,nombre_tipo_construccion varchar(50), alto float, ancho float,largo float, tipoMuro varchar(30),id_arena int,id_cadenas int,id_cemento int,id_ladrillos int,id_pilares int,id_puerta int,id_ventana int
            $idArena=filter_input(INPUT_POST, 'detalleArena');
            $idCadena=filter_input(INPUT_POST, 'detalleCadena');
            $idCemento=filter_input(INPUT_POST, 'detalleCemento');
            $idLadrillo=filter_input(INPUT_POST, 'detalleLadrillo');
            $idPilar=filter_input(INPUT_POST, 'detallePilar');
            
            if($tipoMuro!='Pandereta'){
            $idPuerta=filter_input(INPUT_POST, 'detallePuerta');
            $idVentana=filter_input(INPUT_POST, 'detalleVentana');
            }else{
                $idPuerta=0;
                $idVentana=0; 
            }
            
            $consulta="call crear_presupuesto_muro($idUsuario,'$tipoPresupuesto',$altoP,$anchoP,$largoP,'$tipoMuro',$idArena,$idCadena,$idCemento,$idLadrillo,$idPilar,$idPuerta,$idVentana)";
        }else{
            $consulta="call crear_presupuesto_muro_rapido($idUsuario,'$tipoPresupuesto',$altoP,$anchoP,$largoP,'$tipoMuro',0)";
        }

        $datos = mysql_query($consulta);
//
        if($row = mysql_fetch_array($datos)){
            session_start();
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
            header("Location:../../Index.php?sec=Cotizacion");
        }                
 
    }
    function obtienePresupuestoCasa(){    

        if(isset($_POST["idUsuario"])){
            $idUsuario = filter_input(INPUT_POST, "idUsuario");
        }else{
            $idUsuario=0;
        }

    //                filter_input_array(INPUT_POST) instead of $_POST;
        $unidadMedida=filter_input(INPUT_POST, "unidadMedida");
        $altoP=filter_input(INPUT_POST, "alto");
        $anchoP=filter_input(INPUT_POST, "ancho");
        $largoP=filter_input(INPUT_POST, "largo");
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
            $altoP=$altoP/100;
            $anchoP=$anchoP/100;
            $largoP=$largoP/100;
        }
//        $idCemento=1;
//        $idArena=2;
//        $idRipio=3;
//        $descripcion="Cálculo Radier";
        $consulta="insert into tbl_presupuesto_casa values (0)";
        mysql_query($consulta);
        $idCasa=mysql_insert_id();
//(id_persona int,alto float, ancho float, largo float, unidadMedida varchar(1),pendiente float,idPresupuestoCasa int)        
        $consulta2="call crear_presupuesto_casa($idUsuario,$altoP,$anchoP,$largoP,'$unidadMedida',$pendiente,$idCasa)";
        $datos = mysql_query($consulta2);
        mysql_free_result($datos);
        $consulta="call traerPresupuestoCasa($idCasa)";
        $datosCasa = mysql_query($consulta);
        if($row = mysql_fetch_array($datosCasa)){
            session_start();
            $_SESSION['que']                        = 'Casa';
            $_SESSION['m2m3']                       = '2';
            $_SESSION['metrosCasa']                 = $anchoP*$largoP;
            $_SESSION['descripcionCasa']            = 'una Casa';
            $_SESSION['id_presupuestoCasa']         = $idCasa;
            $_SESSION['Persona']                    = $row['nombre'];
            $_SESSION['fecha']                      = date($row['fechaMuro']);
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
            $_SESSION['idCementoMuro']      = 4;
            $_SESSION['idArenaMuro']        = 5;
            $_SESSION['idLadrillosMuro']    = 6;    
            $_SESSION['idPilaresMuro']      = 7;    
            $_SESSION['idCadenasMuro']      = 8;    
            $_SESSION['idPuertaMuro']       = 9;    
            $_SESSION['idVentanaMuro']      = 10;    
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
            $_SESSION['idTablaTecho']           = 11;
            $_SESSION['idPlanchaTecho']         = 12;
            $_SESSION['idFieltroTecho']          = 13;    
            $_SESSION['idClavoTecho']           = 14;    
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
            $_SESSION['totalPresupuestoCasa']   = number_format(($row['precioTotalTecho']+$row['precioTotalMuro']+$row['precioTotalRadier']),0,',','.'); 
            $diezPorCiento   = ($row['precioTotalTecho']+$row['precioTotalMuro']+$row['precioTotalRadier'])*0.10;
            $_SESSION['totalCasa10']   = number_format($diezPorCiento,0,',','.');   
            header("Location:../../Index.php?sec=Cotizacion");
        }   
    }
    

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

