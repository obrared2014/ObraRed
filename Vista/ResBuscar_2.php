<!--ResBuscar_2.php -->
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="?sec=Inicio">Inicio</a></li>
            <li class="active"><a href="?sec=Buscar">Buscar</a></li>
            <li class="active">Busqueda</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1><b class="glyphicon glyphicon-ok-sign"></b> Resultado de Búsqueda</h1>
        </div>
    </div>
    <div class="col-lg-12">
        <?php
            if (($id_region = filter_input(INPUT_POST, 'region')) == '' ||
                    ($id_comuna = filter_input(INPUT_POST, 'comuna')) == '' ||
                    ($eleccion = filter_input(INPUT_POST, 'elegir')) == '' ||
                    ($tipo = filter_input(INPUT_POST, 'tipo_busqueda')) == '') {
                echo '<script languaje="javascript">location.href = "./Index.php?sec=Codigo&id_Codigo=07"; </script>';
            } else {//else de ninguna eleccion hecha
                include_once './Controlador/Busqueda_P/Busqueda_Principal.php';
                $id_region = filter_input(INPUT_POST, 'region');
                $id_comuna = filter_input(INPUT_POST, 'comuna');
                $eleccion = filter_input(INPUT_POST, 'elegir');
                $tipo = filter_input(INPUT_POST, 'tipo_busqueda');
                if (!Comprobar_Datos_en_Tabla($id_comuna)) {
                    echo '<script languaje="javascript">location.href = "./Index.php?sec=Codigo&id_Codigo=07"; </script>';
                } else {
        ?>
        <div class="col-lg-7">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Fono</th>
                        <th>Materiales</th>
                        <th>Despacho</th>
                        <th>Atención</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($eleccion == '1') {//eligio materiales
                        $D_Comuna = Traer_Datos_Comuna($id_comuna);
                        while ($fila = mysql_fetch_array($D_Comuna)) {
                            $LatC = $fila['latComuna'];
                            $lonC = $fila['longComuna'];
                        }
                        $tipo_material = Trae_Nombre_Tipo_Material($tipo);
                        $result = Trae_Local_x_Tipo_Material($id_region, $id_comuna, $tipo);
                        echo '<h4>' . Mostrar_Tipo_Busqueda($eleccion) . ' &nbsp  <i>' . $tipo_material . ' </i>,&nbspComuna &nbsp  <i>' . Mostrar_Comuna($id_comuna) . '</i>,<br>Region  &nbsp <i>' . Mostrar_Region($id_region) . '</i></h4><br>';
                        $i = 0;
                        $icono = 'img/marker1.png';
                        while ($fila = mysql_fetch_array($result)) {
                            $coordenadas_locales[$i] = array($fila['nombre'], $fila['latLocal'], $fila['lonLocal'], $icono, $i);
                            echo '<tr><td>' . $fila['nombre'] . '</td><td>' . $fila['direccion'] . '</td><td>  ' . $fila['fono'] . '</td><td><button type="button" style="height: 28px" class="btn btn-info" data-toggle="modal" data-target="#myModal">Ver </button></td><td>Si</td><td>Lunes-Viernes</td></tr>';
                            $i++;
                        }
                    }
                    if ($eleccion == '2') {//eligio locales                   
                        $D_Comuna = Traer_Datos_Comuna($id_comuna);
                        while ($fila = mysql_fetch_array($D_Comuna)) {
                            $LatC = $fila['latComuna'];
                            $lonC = $fila['longComuna'];
                        }
                        $nombre_tipo = Trae_Nombre_Tipo_Local($tipo);
                        $result = Trae_Local_x_Tipo_Local($id_region, $id_comuna, $tipo);
                        echo '<h4>Mostrando Tipo de Local ' . $nombre_tipo . '</h4><br>';
                        $i = 0;
                        $icono = 'img/marker1.png';
                        while ($fila = mysql_fetch_array($result)) {
                            $coordenadas_locales[$i] = array($fila['nombre'], $fila['latLocal'], $fila['lonLocal'], $icono, $i);
                            echo '<tr><td>' . $fila['nombre'] . '</td><td>' . $fila['direccion'] . '</td><td>  ' . $fila['fono'] . '</td><td> eeee</td><td>Si</td><td>Lunes-Viernes</td></tr>';
                            $i++;
                        }
                    }
                    ?>   
                </tbody>
            </table>
        </div>
        <div class="col-lg-5">
            <div id="capa-mapa" ></div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Materiales</h4>
            </div>
            <div class="modal-body">
                <h3>Aqui se Mostrara Material Stock etc</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Termino modal info mateiales-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript">
    var pos = null;
    var map = null;
    function inicializar_mapa() {
        var mapOptions = {
            center: new google.maps.LatLng(<?php echo $LatC ?>, <?php echo $lonC ?>),
            zoom: 12,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("capa-mapa"),
                mapOptions);
    <?php
        for ($index = 0; $index < count($coordenadas_locales); $index++) {
            echo 'var pos = new google.maps.LatLng(' . $coordenadas_locales[$index][1] . ',' . $coordenadas_locales[$index][2] . ');';
            echo 'var marker = new google.maps.Marker({
        position: pos,
        map: map,
        title:"' . $coordenadas_locales[$index][0] . '",
        animation: google.maps.Animation.DROP
        });';
        }
    ?>
    var contentString = 'hola';
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
    });
    }
    google.maps.event.addDomListener(window, 'load', inicializar_mapa);
</script>
<style>
    #capa-mapa {
        width: 400px;  
        height: 400px;
        /*          margin: 20px;
                  padding: 100px*/
    }
</style>
<?php
    } //cierre else comprobar datos en tabla
} // cierre else principal
?>