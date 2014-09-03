<?php
//require_once("funciones.php");
require_once("../../Modelo/Materiales/consultasMateriales.php");
if(isset($_POST['material1'])){
	
	$material = devuelveMaterialesDetalles($_POST['material1']);
	
	$html = "<option value=''>Seleccione Material</option>";
	foreach($material as $indice => $registro){
		$html .= "<option value='".$registro['id_materiales_detalles']."'>".$registro['descripcion_materiales_detalles']."</option>";
	}
	$html = $html .="<option value='otro'>Otro</option>";
	$respuesta = array("html"=>$html);
	echo json_encode($respuesta);
}

?>