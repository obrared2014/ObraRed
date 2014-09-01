<?php
require_once("funciones.php");
if(isset($_POST['tipo_material'])){
	
	$material = devuelveMateriales($_POST['tipo_material']);
	
	$html = "<option value=''>Seleccione Material</option>";
	foreach($material as $indice => $registro){
		$html .= "<option value='".$registro['id_materiales']."'>".$registro['nombre_materiales']."</option>";
	}
	$html = $html .="<option value='otro'>Otro</option>";
	$respuesta = array("html"=>$html);
	echo json_encode($respuesta);
}

?>