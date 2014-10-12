<!--Registro_Materiales.php-->
<meta content="900" http-equiv="REFRESH"/>
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1><b class="glyphicon glyphicon-plus"></b> Registro de Materiales</h1>
            </div>
        </div>
    </div>
    <form class="form" action="./Modelo/Materiales/ValidarRegistroMateriales.php" name="registro_materiales" method="POST">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Tipos de Material </div>
                    <div class="panel-body">
                        <div class="col-lg-6">
                            <select name="tipo_material" id="tipo_material" class="form-control form-group" required="true" onchange="buscarMateriales();">
                                <option value="">Seleccione Tipo</option>
                                    <?php
                                        include_once './Modelo/Materiales/consultasMateriales.php';
                                        $tipo = devuelveTipoMaterial();
                                        foreach($tipo as $indice => $registro){
                                            echo "<option value=".$registro['id_tipo_materiales'].">".$registro['nombre_tipo_materiales']."</option>";
                                        }
                                    ?>                                
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <select name="material" id="material" class="form-control form-group" required="true" onchange="buscarDetalles();">
                                <option value="" >Seleccione Material</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control form-group" id="tipo_otro" name="tipo_otro" placeholder="Escriba Tipo" style="display: none" />
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control form-group" id="material_otro" name="material_otro" placeholder="Escriba Material" style="display: none"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Detalle Material </div>
                    <div class="panel-body">
<!--                        <div class="col-lg-6">
                            <select name="detalleMaterial" id="detalleMaterial" class="form-control form-group" required="true" disabled="true" onchange="selecciona_material_detalle(this.value);">
                                <option value="" >Seleccione Material Detalle</option>
                            </select>
                        </div>-->
                        <div class="col-lg-6">
                            <input type="text" class="form-control form-group" id="material_detalle" name="material_detalle" required="true" placeholder="Escriba Detalle de Material"/>                            
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" name="alto" id="alto" placeholder="Alto" required="true"/>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" name="largo" id="largo" placeholder="Largo" required="true"/>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" name="ancho" id="ancho" placeholder="Ancho" required="true"/>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" name="precio" id="precio" placeholder="Precio" required="true"/>
                        </div>
<!--                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" name="precio2" placeholder="Precio Referencial 2"/>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" name="precio3" placeholder="Precio Referencial 3">
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!--<button type="button" class="btn btn-block btn-primary" data-dismiss="modal" onclick="registro_materiales.submit()">Registrar <span class="glyphicon glyphicon-ok"></span></button>-->
                <input type="submit" class="btn btn-block btn-primary btn-large" value="Registrar"/>
            </div>
        </div>
    </form>
<script type="text/javascript">
   function selecciona_otro(){
       var valor=document.getElementById('tipo_material').value;
       if(valor==='otro'){
           document.getElementById("tipo_otro").style.display="block";
           document.getElementById("tipo_otro").required=true;
           selecciona_material(valor);
       }else{
           document.getElementById("tipo_otro").style.display="none";
           document.getElementById("tipo_material").required=true;
           document.getElementById("material").style.display="block";
//           document.getElementById("material").required="true"; 
           selecciona_material(valor);
       }
   }

   function selecciona_material(tipo_sel){
//       alert(tipo_sel);
       if(tipo_sel==='otro'){
           if(document.getElementById('tipo_material').value==="otro"){
              document.getElementById("material").disabled=true;
//              document.getElementById("material").style.display="none";
           }           
           document.getElementById("material_otro").style.display="block";
           document.getElementById("material_otro").required=true;
           document.getElementById("material").required=false;   
//           document.getElementById("tipo_material").required=false;
//           alert(tipo_sel);
       }else{
           document.getElementById("material").disabled=false;
           document.getElementById("material_otro").required=false;
           document.getElementById("material_otro").style.display="none";
           document.getElementById("material").required=true;        
           document.getElementById("tipo_material").required=true;
//           alert(tipo_sel);
       }
   }
</script>
<script>
    
//$("#tipo_material").on("change", buscarMateriales);
//$("#material").on("change", buscarDetalles);

//function buscarMateriales(){
//	
//	$tipo = $("#tipo_material").val();
//	
//	if($tipo === ""){
//			$("#material").html("<option value=''>Seleccione Material</option>");
//                        selecciona_otro();
//	}else if($tipo === "otro"){
//			$("#material").html("<option value='otro'>Otro</option>");                        
//                            selecciona_otro();
//                        
//	}else {
//		$.ajax({
//			dataType: "json",
//			data: {"tipo_material": $tipo},
//			url:   'Controlador/Materiales/buscar.php',
//			type:  'post',
//			beforeSend: function(){
//				//Lo que se hace antes de enviar el formulario
//				},
//			success: function(respuesta){
//				//lo que se si el destino devuelve algo
//				$("#material").html(respuesta.html);
//			},
//			error:	function(xhr,err){ 
//				alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status+"\n \n responseText: "+xhr.responseText);
//			}
//		});
//                selecciona_otro();
//	}
//        
//}   
//function buscarDetalles(){
//	
//	$tipo = $("#material").val();
//
//            selecciona_material($tipo);
//
//}
   
</script>