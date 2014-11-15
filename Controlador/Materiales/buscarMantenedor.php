<?php


    include '../../Modelo/datosBD.php';
//                                        $base=$basedatos;

//                                        $servidor = "localhost";
//                                        $puerto = "3306";
//                                        $basedatos = "db_obrared";
//                                        $usuario = "root";
//                                        $contrasena = "root";
//    $tipo = devuelveTipoMaterial($basedatos,$puerto,$servidor,$usuario,$contrasena);

//require_once("funciones.php");
require_once("../../Modelo/Materiales/consultasMateriales.php");
//inclu
if(isset($_POST['tipo_material'])){
	
	$material = devuelveMaterialesMantenedor($_POST['tipo_material'],$basedatos,$puerto,$servidor,$usuario,$contrasena);
	
	$html = "<option value=''>Seleccione Material</option>";
	foreach($material as $indice => $registro){
		$html .= "<option value='".$registro['id_materiales']."'>".$registro['nombre_materiales']."</option>";
	}
//	$html = $html .="<option value='otro'>Otro</option>";
	$respuesta = array("html"=>$html);
	echo json_encode($respuesta);
}

?>