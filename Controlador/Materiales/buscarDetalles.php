<?php
//require_once("funciones.php");
function traerMaterialesDetalles($nombreTipo,$nombreMaterial){
    include '../../Modelo/datosBD.php';
    require_once("../../Modelo/Materiales/consultasMateriales.php");
    if(isset($_POST['material'])){

            $material = traeDetallesMateriales($nombreTipo,$nombreMaterial,$basedatos,$puerto,$servidor,$usuario,$contrasena);

            $html = "<option value=''>Seleccione Material Detalle</option>";
            foreach($material as $indice => $registro){
                    $html .= "<option value='".$registro['id_materiales_detalles']."'>".$registro['descripcion_materiales_detalles']."</option>";
            }
            $html = $html .="<option value='otro'>Otro</option>";
            $respuesta = array("html"=>$html);
            echo json_encode($respuesta);
    }
}
?>