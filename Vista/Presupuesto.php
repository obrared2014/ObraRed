<!-- presupuesto -->
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Generar Presupuesto</h1>
        </div>
    </div>
    <div class="col-lg-12">
        <form class="form-horizontal" action="Index.php?sec=Cotizacion" method="POST" name="form_presupuesto_medidas">
            <div class="row">        
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">Seleccione el tipo de construcción</div>
                        <div class="panel-body">
                            <select name="construccion" id="construccion" class="form-control">
                                <option value="">Elija su Opción</option>
                                <option value="1">Techo</option>
                                <option value="2">Radier</option>
                                <option value="3">Muro</option>
                                <option value="4">Casa</option>                                
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
                                    <input type="radio" name="unidadMedida" id="centimetros" value="centimetros" onClick="activaCampos();" onChange="cambiaUm(this);">Centimetros<br>
                                    <input type="radio" name="unidadMedida" id="metros"  value="metros" onClick="activaCampos();" onChange="cambiaUm(this);">Metros
                                </div>                    
                                <div class="col-lg-3"> 
                                    Alto<br>
                                    <input type="text" placeholder="Alto" maxlength="4" class="form-control" name="alto" id="alto" onkeypress="soloNumeros(event);" disabled /> 
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
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">Seleccione los productos</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <select name="tipo_material1" id="tipo_material1" class="form-control" onchange="buscarMateriales();">
                                    <option value="">Seleccione Tipo</option>
                                        <?php
                                            require_once("Modelo/Materiales/consultasMateriales.php");
                                            $tipo = devuelveTipoMaterial();
                                            foreach($tipo as $indice => $registro){
                                                    echo "<option value=".$registro['id_tipo_materiales'].">".$registro['nombre_tipo_materiales']."</option>";
                                            }
                                        ?>                                
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="material1" id="material1" class="form-control">
                                    <option value="" >Seleccione Material</option>
                                </select>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <input type="button" class="btn btn-block btn-primary btn-large" value="Cotizar" onclick="metrosCubicosRadier();">
                </div>
            </div>
        </form>
    </div>
</div>
<!--<script>    
//    $("#tipo_material1").on("change", buscarMateriales);
</script>-->


