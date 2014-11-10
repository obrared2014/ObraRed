<!--mis_presupuestos.php-->
<?php include './Modelo/Presupuestos/informesPresupuestos.php'; ?>
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
            <h1><b class="glyphicon glyphicon-folder-open"></b> Mis Presupuestos</h1>
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
        </ul>
        <!--Tab panes-->
        <div class="tab-content">
            <div class="tab-pane active" id="radier_presupuesto"><!-- Panel Radier presupuesto -->
                <table class="table table-bordered table-condensed table-striped">
                    <tr>        
                        <td colspan="4"><b>PRESUPUESTOS PARA RADIER</b></td>
                    </tr>
                    <tr>
                        <th>Nº</th>
                        <th>Fecha</th>
                        <th>Detalle</th>
                        <th>Precio Total</th>
                    </tr>
                        <?php
                            $nombre = $_SESSION['nombre'] . ' ' . $_SESSION['ap_paterno'];
                            traeInformePresupuestos($nombre, 'Radier', 'metrosCubicos', 'm3');
                        ?>
                </table>
            </div>
            <div class="tab-pane" id="muro_presupuesto"><!-- Panel Muro presupuesto -->
                <table class="table table-bordered table-condensed table-striped">
                    <tr>        
                        <td colspan="4"><b>PRESUPUESTOS PARA MURO</b></td>
                    </tr>
                    <tr>
                        <th>Nº</th>
                        <th>Fecha</th>
                        <th>Detalle</th>
                        <th>Precio Total</th>
                    </tr>
                    <?php
                    $nombre = $_SESSION['nombre'] . ' ' . $_SESSION['ap_paterno'];
                    traeInformePresupuestos($nombre, 'Muro', 'metrosCuadrados', 'm2');
                    ?>
                </table>
            </div>
            <div class="tab-pane" id="techo_presupuesto"><!-- Panel Techo presupuesto -->
                <table class="table table-bordered table-condensed table-striped">
                    <tr>        
                        <td colspan="4"><b>PRESUPUESTOS PARA RADIER</b></td>
                    </tr>
                    <tr>
                        <th>Nº</th>
                        <th>Fecha</th>
                        <th>Detalle</th>
                        <th>Precio Total</th>
                    </tr>
                    <?php
                        $nombre = $_SESSION['nombre'] . ' ' . $_SESSION['ap_paterno'];
                        traeInformePresupuestos($nombre, 'Techo', 'metrosCuadrados', 'm2');
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
