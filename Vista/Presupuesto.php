<!-- presupuesto -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1><b class="glyphicon glyphicon-list-alt"></b> Generar Presupuesto</h1>
        </div>
    </div>
    <div class="col-lg-12">
        <form class="form-horizontal" action="./Modelo/Presupuestos/obtenerPresupuestos.php" method="POST" name="form_presupuesto_medidas">
            <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $_SESSION['id_persona']?>">
            <div class="row">
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">Seleccione el tipo de construcción</div>
                        <div class="panel-body">
                            <select name="construccion" id="construccion" class="form-control">
                                <option value="">Elija su Opción</option>
                                <option value="Techo">Techo</option>
                                <option value="Radier">Radier</option>
                                <option value="Muro">Muro</option>
                                <option value="Casa">Casa</option>                                
                            </select>
                        </div>
                    </div>    
                </div>
                <div class="col-lg-9" name="div_medidas" id="div_medidas"><!-- panel solicitando las medidas de la obra-->
                    <div class="panel panel-default">
                        <div class="panel-heading">Ingrese las Medidas de su obra (Ejemplo Unidad de Medida: Metros 1.5 = 150 Centímetros)</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-lg-3">
        <!--                           <select name="metrosOcentimetros" id="metrosOcentimetros" class="form-control" onChange="unidadMedida();"  required >
                                      <option value="">Unidad de Medida</option>
                                      <option value="1">Centímetros</option>
                                      <option value="2">Metros</option>
                                </select>-->
                                    Unidad de Medida<br>
                                    <input type="radio" name="unidadMedida" id="centimetros" value="C" onClick="activaCampos();" onChange="cambiaUm(this.value);">Centimetros<br>
                                    <input type="radio" name="unidadMedida" id="metros"  value="M" onClick="activaCampos();" onChange="cambiaUm(this.value);">Metros
                                </div>                    
                                <div class="col-lg-3"> 
                                    Alto<br>
                                    <input type="text" placeholder="Alto" maxlength="4" class="form-control" name="alto" id="alto" onkeypress="soloNumeros(event);" disabled/> 
                                </div> 
                                <div class="col-lg-3"> 
                                    Ancho<br>
                                    <input type="text" placeholder="Ancho" maxlength="4" class="form-control" name="ancho" id="ancho" onkeypress="soloNumeros(event);" disabled /> 
                                </div> 
                                <div class="col-lg-3"> 
                                    Largo<br>
                                    <input type="text" placeholder="Largo" maxlength="4" class="form-control" name="largo" id="largo" onkeypress="soloNumeros(event);" disabled /> 
                                </div>
                            </div>
                        </div>
                    </div><!-- fin panel medidas-->
                </div>
<!--                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">Seleccione los productos</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <select name="tipo_material1" id="tipo_material1" class="form-control" onchange="buscarMateriales();">
                                    <option value="">Seleccione Tipo</option>
                                        //<?php
//                                            require_once("Modelo/Materiales/consultasMateriales.php");
//                                            $tipo = devuelveTipoMaterial();
//                                            foreach($tipo as $indice => $registro){
//                                                    echo "<option value=".$registro['id_tipo_materiales'].">".$registro['nombre_tipo_materiales']."</option>";
//                                            }
//                                        ?>                                
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="material1" id="material1" class="form-control" onchange="buscarMaterialesDetalles();">
                                    <option value="" >Seleccione Material</option>
                                </select>
                            </div>  
                            <div class="form-group">
                                <select name="detalleMaterial1" id="detalleMaterial1" class="form-control">
                                    <option value="" >Seleccione Detalle</option>
                                </select>
                            </div>                             
                        </div>
                    </div>
                </div>-->
                <div class="col-lg-12">
                    <!--<input type="button" class="btn btn-block btn-primary btn-large" value="Cotizar" onclick="metrosCubicosRadier();">-->
                    <!--<button type="button" class="btn btn-block btn-primary" data-dismiss="modal" onclick="form_presupuesto_medidas.submit()">Calcular <span class="glyphicon glyphicon-ok"></span></button>-->
                    <input type="submit" class="btn btn-block btn-primary btn-large" value="Calcular">
                </div>
            </div>
        </form>
    </div>
</div>
<!--<script>    
//    $("#tipo_material1").on("change", buscarMateriales);
</script>-->


