<?php
    require './Modelo/Presupuestos/informesPresupuestos.php'; 
    $idPres=filter_input(INPUT_GET, "idPres");
    $tipo=filter_input(INPUT_GET, "tipo");
    if($tipo=='Muro'){
        mostrarPresupuestoMuro($idPres);
    }elseif($tipo=='Radier'){
        mostrarPresupuestoRadier($idPres);
    }elseif($tipo=='Techo'){
        mostrarPresupuestoTecho($idPres);
    }elseif($tipo=='Casa'){
        mostrarPresupuestoCasa($idPres);
    }       
    
    ?>


