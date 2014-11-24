<!--mis_presupuestos.php-->
<?php 
    include './Modelo/Presupuestos/informesPresupuestos.php'; 
    $idPersona=$_SESSION['id_persona'];
?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="?sec=Inicio">Inicio</a></li>
            <li class="active">Mis Presupuestos</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h2><b class="glyphicon glyphicon-folder-open"></b> Mis Presupuestos</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <!--Nav tabs--> 
        <ul class="nav nav-tabs" role="tablist">
            <li class="active "><a class="btn-primary" style="width: 88px; text-align: center;" href="#radier_presupuesto" role="tab" data-toggle="tab">Radier</a></li>
            <li><a class="btn-primary" style="width: 88px; text-align: center;"  href="#muro_presupuesto" role="tab" data-toggle="tab">Muro</a></li>
            <li><a class="btn-primary" style="width: 88px; text-align: center;" href="#techo_presupuesto" role="tab" data-toggle="tab">Techo</a></li>
            <li><a class="btn-primary" style="width: 88px; text-align: center;" href="#casa_presupuesto" role="tab" data-toggle="tab">Casa</a></li>
        </ul>
        <!--Tab panes-->
        <div class="tab-content">
            <div class="tab-pane active" id="radier_presupuesto"><!-- Panel Radier presupuesto -->
                <table class="table table-bordered table-condensed table-striped">
                    <tr>        
                        <td colspan="5"><b>PRESUPUESTOS PARA RADIER</b></td>
                    </tr>
                    <tr>
                        <th style="text-align: center;">Nº</th>
                        <th style="text-align: center;">Fecha</th>
                        <th style="text-align: center;">Detalle</th>
                        <th style="text-align: center;">Precio Total</th>
                        <th style="text-align: center;">Click para ver</th>
                    </tr>
                        <?php
                            $nombre = $_SESSION['nombre'] . ' ' . $_SESSION['ap_paterno'];
                            
                            traeInformePresupuestos($nombre, 'Radier', 'metrosCubicos', 'm3',$idPersona);
                        ?>
                </table>
            </div>
            <div class="tab-pane" id="muro_presupuesto"><!-- Panel Muro presupuesto -->
                <table class="table table-bordered table-condensed table-striped">
                    <tr>        
                        <td colspan="5"><b>PRESUPUESTOS PARA MURO</b></td>
                    </tr>
                    <tr>
                        <th style="text-align: center;">Nº</th>
                        <th style="text-align: center;">Fecha</th>
                        <th style="text-align: center;">Detalle</th>
                        <th style="text-align: center;">Precio Total</th>
                        <th style="text-align: center;">Click para ver</th>
                    </tr>
                    <?php
                    $nombre = $_SESSION['nombre'] . ' ' . $_SESSION['ap_paterno'];
                    traeInformePresupuestos($nombre, 'Muro', 'metrosCuadrados', 'm2',$idPersona);
                    ?>
                </table>
            </div>
            <div class="tab-pane" id="techo_presupuesto"><!-- Panel Techo presupuesto -->
                <table class="table table-bordered table-condensed table-striped">
                    <tr>        
                        <td colspan="5"><b>PRESUPUESTOS PARA TECHUMBRE</b></td>
                    </tr>
                    <tr>
                        <th style="text-align: center;">Nº</th>
                        <th style="text-align: center;">Fecha</th>
                        <th style="text-align: center;">Detalle</th>
                        <th style="text-align: center;">Precio Total</th>
                        <th style="text-align: center;">Click para ver</th>
                    </tr>
                    <?php
                        $nombre = $_SESSION['nombre'] . ' ' . $_SESSION['ap_paterno'];
                        traeInformePresupuestos($nombre, 'Techo', 'metrosCuadrados', 'm2',$idPersona);
                    ?>
                </table>
            </div>
            <div class="tab-pane" id="casa_presupuesto"><!-- Panel Casa presupuesto -->
                <table class="table table-bordered table-condensed table-striped">
                    <tr>        
                        <td colspan="5"><b>PRESUPUESTOS PARA CASA</b></td>
                    </tr>
                    <tr>
                        <th style="text-align: center;">Nº</th>
                        <th style="text-align: center;">Fecha</th>
                        <th style="text-align: center;">Detalle</th>
                        <th style="text-align: center;">Precio Total</th>
                        <th style="text-align: center;">Click para ver</th>
                    </tr>
                        <?php
//                            $idUsuario=$_SESSION['id_persona'];
//                            $nombre = $_SESSION['nombre'] . ' ' . $_SESSION['ap_paterno'];
                            traeInformePresupuestosCasa($idPersona,'Casa');
//                            traeInformePresupuestos($nombre, 'Radier', 'metrosCubicos', 'm3',$idPersona);
                        ?>
                </table>
            </div>            
        </div>
    </div>
</div>
<script> 
    function mostrarPresupuesto(id,tipo){
        window.location='Index.php?sec=presupuestosAntiguos&idPres='+id+"&tipo="+tipo+"";
    }
    function mostrarPresupuestoCasa(id,tipo){
        window.location='Index.php?sec=presupuestosAntiguos&idPres='+id+"&tipo="+tipo+"";
    }
</script>