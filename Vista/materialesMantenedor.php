<!--materialesMantenedor.php-->
<?php   
    include './Modelo/Materiales/consultasMateriales.php';
    include './Modelo/datosBD.php';    
    $idMaterial=filter_input(INPUT_GET, "idMaterial"); 
    $material=mostrarMaterialesMantenedor($idMaterial,$basedatos,$puerto,$servidor,$usuario,$contrasena);
    foreach($material as $indice => $registro){
        $descripcion=$registro['descripcion_materiales_detalles'];
        $alto=$registro['alto_materiales_detalles'];
        $largo=$registro['largo_materiales_detalles'];
        $ancho=$registro['ancho_materiales_detalles'];
        $precio=$registro['precio_materiales_detalles'];
//        $base=$registro['material_base_materiales_detalles'];
    }    
?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="?sec=Inicio">Inicio</a></li>
            <li><a href="?sec=mantenedorMateriales">Materiales</a></li>
            <li class="active">Detalle Material</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-10">
        <div class="page-header">
            <h3><b class="glyphicon glyphicon-eye-open"></b> Detalle Material <?php echo $registro['descripcion_materiales_detalles']; ?></h3>
        </div>
    </div>
    <div class="col-lg-2">
        <a href="?sec=mantenedorMateriales"><input type="button" class="btn btn-block btn-primary" value="Volver"/></a>
    </div>
    <div class="col-lg-12">
        <form class="form" action="./Modelo/Materiales/actualizarMateriales.php" name="registro_materiales" method="POST">
            <input name="idMaterial" id="idMaterial" type="hidden" value="<?php echo $idMaterial;?>"/>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Descripción Material</div>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <input type="text" class="form-control form-group" id="material_detalle" name="material_detalle" required="true" placeholder="Escriba Detalle de Material" value="<?php echo $descripcion;?>"/>                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Precio Material</div>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control form-group" name="precio" id="precio" placeholder="Precio" required="true" value="<?php echo $precio;?>"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Medidas Material</div>
                        <div class="panel-body">
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Alto</span>
                                    <input type="text" class="form-control form-group" name="alto" id="alto" placeholder="Alto" required="true" value="<?php echo $alto;?>"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Ancho</span>
                                    <input type="text" class="form-control form-group" name="ancho" id="ancho" placeholder="Ancho" required="true" value="<?php echo $ancho;?>"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Largo</span>
                                    <input type="text" class="form-control form-group" name="largo" id="largo" placeholder="Largo" required="true" value="<?php echo $largo;?>"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-lg-offset-4"><!--<button type="button" class="btn btn-block btn-primary" data-dismiss="modal" onclick="registro_materiales.submit()">Registrar <span class="glyphicon glyphicon-ok"></span></button>-->
                <?php 
                $que=filter_input(INPUT_GET, "que");
                if($que=='modificar'){
                echo '<input type="submit" class="btn btn-block btn-primary" value="Actualizar"/>'; 
                } ?>
                <input name="verOmodificar" id="verOmodificar" type="hidden" value="<?php echo $que;?>"/>
            </div>
        </form>
    </div>
</div>
<script>
    if(document.getElementById("verOmodificar").value=='ver'){
        document.getElementById("material_detalle").readOnly=true;
//        document.getElementById("materialBase").disabled=true;
        document.getElementById("alto").readOnly=true;
        document.getElementById("largo").readOnly=true;
        document.getElementById("ancho").readOnly=true;
        document.getElementById("precio").readOnly=true;
    }
    
</script>
        

