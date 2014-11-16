<?php
//require_once("funciones.php");
    include '../../Modelo/datosBD.php';
    require_once("../../Modelo/Materiales/consultasMateriales.php");
    if(isset($_POST['material'])){
            
            $material = traeDetallesMaterialesMantenedor($_POST['tipo_material'],$_POST['material'],$basedatos,$puerto,$servidor,$usuario,$contrasena);
            $numero=1;
            $ver='ver';
            $modificar='modificar';
            
            $html = "<table class='table table-hover table-condensed'><thead><th style='text-align:center;'>Nº</th><th style='text-align:center;'>Descripci&oacute;n</th><th style='text-align:center;'>Estado</th><th style='text-align:center;'>Ver</th><th style='text-align:center;'>Modificar</th><th style='text-align:center;'>Act/Des</th>";
            foreach($material as $indice => $registro){
                    $html .= "</thead><tr><td style='text-align: center'>".$numero."</td><td>".$registro['descripcion_materiales_detalles']."</td><td style='text-align: center'>".$registro['estado_materiales_detalles'].
                    "</td><td style='text-align:center;'><a href='?sec=detallesMaterial&que=$ver&idMaterial=".$registro['id_materiales_detalles']."''><button type='button' class='btn btn-success'><span class='glyphicon glyphicon-search'></span></button>".
                    "</td><td style='text-align:center;'><a href='?sec=detallesMaterial&que=$modificar&idMaterial=".$registro['id_materiales_detalles']."''><button type='button' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span></button>".
                    "</td><td style='text-align:center;'><a href='./Modelo/Materiales/actualizarEstadoMaterial.php?idMaterial=".$registro['id_materiales_detalles']."''><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-ban-circle'></span></button>";
                    $numero++;
            }
            $html = $html .="</table>";
            $respuesta = array("html"=>$html);
            echo json_encode($respuesta);
    }

?>