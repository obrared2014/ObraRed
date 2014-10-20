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
// creamos un array con la información de todos los puntos:
// su nombre, latitud, longitud,
// el icono que le queramos asignar (ver más adelante)
// y un html totalmente personalizable a vuestro gusto, incluyendo imágenes y enlaces
    <?php
$k=0;
for ($index = 0; $index < count($coordenadas_locales); $index++) 
{?>
    var misPuntos=[
        ["<?php echo $coordenadas_locales[$index][0]; ?>","<?php echo $coordenadas_locales[$index][1]; ?>","<?php echo $coordenadas_locales[$index][2]; ?>","icon3","<div><?php echo $coordenadas_locales[$index][0]; ?></div>"],
        ];
<?php 
 $k++;
 } ?>                                         

//var misPuntos = [
//    ["local 1 est", "-33.457305", "-70.687440", "icon1", "<div>html</div>"],
//    ["Plaça Catalunya", "-33.457305", "-70.691962", "icon2", "<div>html</div>"],
//    ["Estación de Sants", "-33.463054", "-70.705083", "icon3", "<div>html</div>"],
//];

function inicializaGoogleMaps() {
    // Coordenadas del centro de nuestro recuadro principal
    var x =<?php echo $LatC ?> ;//41.389624;
    var y = <?php echo $lonC ?> ;//2.15988563537;

    var mapOptions = {
        zoom: 12,
        center: new google.maps.LatLng(x, y),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    var map = new google.maps.Map(document.getElementById("capa-mapa"), mapOptions);
    setGoogleMarkers(map,misPuntos);
}

var markers = Array();
var infowindowActivo = false;
function setGoogleMarkers(map, locations) {
    // Definimos los iconos a utilizar con sus medidas
    var icon1 = new google.maps.MarkerImage(
        "http://www.vinx.info/uploads/editor/map-green.png",
        new google.maps.Size(20, 30)
    );
    var icon2 = new google.maps.MarkerImage(
        "http://www.vinx.info/uploads/editor/map-orange.png",
        new google.maps.Size(20, 30)
    );
    var icon3 = new google.maps.MarkerImage(
        "http://www.vinx.info/uploads/editor/map-red.png",
        new google.maps.Size(20, 30)
    );

    for(var i=0; i<locations.length; i++) {
        var elPunto = locations[i];
        var myLatLng = new google.maps.LatLng(elPunto[1], elPunto[2]);

        markers[i]=new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: eval(elPunto[3]),
            title: elPunto[0]
        });
        markers[i].infoWindow=new google.maps.InfoWindow({
            content: elPunto[4]
        });
        google.maps.event.addListener(markers[i], 'click', function(){      
            if(infowindowActivo)
                infowindowActivo.close();
            infowindowActivo = this.infoWindow;
            infowindowActivo.open(map, this);
        });
    }

   
    
    

}

inicializaGoogleMaps();
</script>
      <style>
        html, body,#capa-mapa {
          width: 400px;  
          height: 400px;
/*          margin: 20px;
          padding: 100px*/
        }
      </style>



    