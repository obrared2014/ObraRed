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
<div>
    <form class="form" action="./Modelo/Materiales/actualizarMateriales.php" name="registro_materiales" method="POST">
        <input name="idMaterial" id="idMaterial" type="hidden" value="<?php echo $idMaterial;?>"/>
        <div class="col-lg-10">&nbsp;</div>  
        <div class="col-lg-2">
            <a href="?sec=mantenedorMateriales"><input type="button" class="btn btn-block btn-primary" value="Volver"/></a>
        </div>
        <div class="col-lg-12">&nbsp;</div>       
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Detalle Material </div>
                    <div class="panel-body">
                        <div class="col-lg-6">
                            <input type="text" class="form-control form-group" id="material_detalle" name="material_detalle" required="true" placeholder="Escriba Detalle de Material" value="<?php echo $descripcion;?>"/>                            
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" name="alto" id="alto" placeholder="Alto" required="true" value="<?php echo $alto;?>"/>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" name="largo" id="largo" placeholder="Largo" required="true" value="<?php echo $largo;?>"/>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" name="ancho" id="ancho" placeholder="Ancho" required="true" value="<?php echo $ancho;?>"/>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" name="precio" id="precio" placeholder="Precio" required="true" value="<?php echo $precio;?>"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4"><!--<button type="button" class="btn btn-block btn-primary" data-dismiss="modal" onclick="registro_materiales.submit()">Registrar <span class="glyphicon glyphicon-ok"></span></button>-->
                <?php 
                $que=filter_input(INPUT_GET, "que");
                if($que=='modificar'){
                echo '<input type="submit" class="btn btn-block btn-primary" value="Actualizar"/>'; 
                } ?>
                <input name="verOmodificar" id="verOmodificar" type="hidden" value="<?php echo $que;?>"/>
            </div>       
        </div>
    </form>
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
        

