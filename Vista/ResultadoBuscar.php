<?php
//include("conexion_busqueda.php");
require_once ('./Modelo/Buscar_P_Con/Buscar_P_C.php');

?>
      <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
      <style>
        html, body,#map-canvas {
          width: 600px;  
          height: 520px;
/*          margin: 20px;
          padding: 100px*/
        }
      </style>
      <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
      <script>
        <?php
                  $id_region = $_POST['region'];
                  $id_comuna = $_POST['comuna'];
                  $id_local  = $_POST['nombre_local'];
                  $eleccion  = $_POST['elegir'];
                  $tipo      = $_POST['tipo_busqueda'];
                  
                $con = conexion();
                
                $res = mysql_query("select * from comuna where id_comuna=".$id_comuna."", $con);
                while ($fila = mysql_fetch_array($res))
                        
                {
                    
                    $comuna =$fila['nombre'];
                    $LatComuna=$fila['latComuna'];
                    $LongComuna=$fila['longComuna']; 
                }
//                $LatComuna=  floatval($LatComuna1);
//                $LongComuna=  floatval($LongComuna1);
 //*****************************************************************************          
//        $comuna='estacioncentral';
//        $LatComuna=-33.46260212728504;
//        $LongComuna= -70.70323389999999;
        $locales = array
       (
           array('local 1',-33.463707505445925,-70.70272964470519),
           array('local 2',-33.46406999481017,-70.70378107063902),
           array('local 3',-33.46208523508564,-70.70309978954924),
           array('local 4',-33.46569670310176,-70.70873511068953)
       );
 //*****************************************************************************       
        ?>
function initialize() {

  var <?php echo $comuna ?> = new google.maps.LatLng(<?php echo $LatComuna ?>,<?php echo $LongComuna ?> );
  var mapOptions = {
    zoom: 13,
    center: <?php echo $comuna ?>
  }
 var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

//var mapOptions = {
//  zoom: 13,
//  center: new google.maps.LatLng(<?php // echo $LatComuna ?>,<?php // echo $LongComuna ?>),
//  mapTypeId: google.maps.MapTypeId.ROADMAP
//};
//map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
  
  
<?php for ($i = 0; $i < count($locales); $i++) { ?>         
      var marcador = new google.maps.Marker({
      position:new google.maps.LatLng(<?php echo $locales[$i][1];?>, <?php echo $locales[$i][2]; ?>),
      map: map,
      title: '<?php echo $locales[$i][0];?>'
      }); 
  <?php } ?>
}
google.maps.event.addDomListener(window, 'load', initialize);
      </script>
      <div>
          <div class="row">
              
              <div class="col-lg-6">
                  <h1>resultados</h1>
                  <?php
//                  $id_region = $_POST['region'];
//                  $id_comuna = $_POST['comuna'];
//                  $id_local  = $_POST['nombre_local'];
//                  $eleccion  = $_POST['elegir'];
//                  $tipo      = $_POST['tipo_busqueda'];
//                  
//                $con = conexion();
echo '<h3>'.$LatComuna.'</h3><br>';
echo '<h3>'.$LongComuna.'</h3><br>';
                $res = mysql_query("select * from regionm where id_region=".$id_region."", $con);
                while ($fila = mysql_fetch_array($res))
                {
                    echo 'id region ='.$fila['id_region'].' region = '.$fila['nombre'].'<br>'; 
                }
                
                $res = mysql_query("select * from comuna where id_comuna=".$id_comuna."", $con);
                while ($fila = mysql_fetch_array($res))
                {
                    echo 'id ='.$fila['id_comuna'].' comuna = '.$fila['nombre'].' <br>centro =  latitud  '.$fila['latComuna'].'  longitud  '.$fila['longComuna'].' <br>'; 
                }
                  
                $res = mysql_query("select * from local where id_comuna_local=".$id_comuna."", $con);
                while ($fila = mysql_fetch_array($res))
                {
                    echo 'id local ='.$fila['id_local'].' nombre local = '.$fila['nombre'].' <br>direccion = '.$fila['direccion'].'   '.$fila['latLocal'].''.$fila['lonLocal'].' <br>'; 
                }                
                  ?>
              </div>
              
              <div class="col-lg-6">
                  <div id="map-canvas" ></div><!--style="width:600px;height:520px;"-->
              </div>
          </div>
      </div>
     
