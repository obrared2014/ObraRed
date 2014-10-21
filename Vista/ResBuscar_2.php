<div class="row">
    <div class="col-lg-12">
        <div class="col-lg-7">
           <?php
           include_once './Controlador/Busqueda_P/Busqueda_Principal.php';
                $id_region = filter_input(INPUT_POST, 'region');
                $id_comuna = filter_input(INPUT_POST, 'comuna');
                $eleccion  = filter_input(INPUT_POST, 'elegir');
                $tipo      = filter_input(INPUT_POST, 'tipo_busqueda');
                
                $D_Comuna = Traer_Datos_Comuna($id_comuna);
                while ($fila = mysql_fetch_array($D_Comuna)) 
                {
                     $LatC = $fila['latComuna'];
                     $lonC=$fila['longComuna'];
                }

                if($eleccion=='1')//eligio materiales
                    {
                        $tipo_material=  Trae_Nombre_Tipo_Material($tipo);
                        $result=  Trae_Local_x_Tipo_Material($id_region, $id_comuna, $tipo);
                        echo Mostrar_Tipo_Busqueda($eleccion).' '.$tipo_material.' en '.Mostrar_Comuna($id_comuna).'  '.Mostrar_Region($id_region).'<br>';           
                        $i=0;
                        $icono='icon1';
                        while ($fila = mysql_fetch_array($result)) 
                        {                           
                            $coordenadas_locales[$i]=array($fila['nombre'],$fila['latLocal'],$fila['lonLocal'],$icono,$i);
                            echo '--> '.$fila['nombre'].' --> '.$fila['latLocal'].' -->  '.$fila['lonLocal'].'<br>';
                            $i++;
                        }
                    }
                if($eleccion=='2')//eligio locales
                    {
                        $nombre_tipo=  Trae_Nombre_Tipo_Local($tipo);
                        $result=  Trae_Local_x_Tipo_Local($id_region, $id_comuna, $tipo);
                        echo 'mostrando tipo de local '.$nombre_tipo.'<br>';
                        $i=0;
                        while ($fila = mysql_fetch_array($result)) 
                        {
                            $coordenadas_locales[$i]=array($fila['nombre'],$fila['latLocal'],$fila['lonLocal']);
                            echo '--> '.$fila['nombre'].' --> '.$fila['latLocal'].' -->  '.$fila['lonLocal'].'<br>';
                            $i++;                          
                        }
                    }
                    //===============================================
                    echo '<h3>recorriendo array coordenada</h3><br>';
                    for ($index1 = 0; $index1 < count($coordenadas_locales); $index1++) {
                        for ($index2 = 0; $index2 < 5; $index2++) {
                            echo $coordenadas_locales[$index1][$index2];
                        }
                        echo '<br>';
                    }
                    //================================================
                
?> 
        </div>
        
        
        <div class="col-lg-5">
            <!--style="width:400px;height:400px"-->
            <div id="capa-mapa" ></div>
        </div>
       
    </div>
</div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript">
     function inicializar_mapa() {
        var mapOptions = {
          center: new google.maps.LatLng(<?php echo $LatC ?>, <?php echo $lonC ?>),
          zoom: 12,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
        var map = new google.maps.Map(document.getElementById("capa-mapa"),
            mapOptions);
<?php
    for ($index = 0; $index < count($coordenadas_locales); $index++){

        echo 'var pos = new google.maps.LatLng('.$coordenadas_locales[$index][1].','.$coordenadas_locales[$index][2].');';
        echo 'var marker = new google.maps.Marker({
            position: pos,
            map: map,
            title:"'.$coordenadas_locales[$index][0].'",
            animation: google.maps.Animation.DROP
        });';
}

  
?>            
      }
    
    inicializar_mapa();
</script>
      <style>
        html, body,#capa-mapa {
          width: 400px;  
          height: 400px;
/*          margin: 20px;
          padding: 100px*/
        }
      </style>



    