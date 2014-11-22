<?php
//require_once("funciones.php");
    include '../../Modelo/datosBD.php';
    require_once("../../Modelo/Materiales/consultasMateriales.php");
    if(isset($_POST['material'])){
            
            $material = traeDetallesMaterialesMantenedor($_POST['tipo_material'],$_POST['material'],$basedatos,$puerto,$servidor,$usuario,$contrasena);
            $numero=1;
            $ver='ver';
            $modificar='modificar';
            
            $html = "<table class='table table-hover table-condensed'><thead><th style='text-align:center;' width='50'>Nº</th><th style='text-align:center;' width='300'>Descripci&oacute;n</th><th style='text-align:center;' width='200'>Material Predeterminado</th><th style='text-align:center;' width='120'>Ver</th><th style='text-align:center;' width='120'>Modificar</th><th style='text-align:center;' width='120'>Predeterminar</th>";
            foreach($material as $indice => $registro){
                    $base=$registro['material_base_materiales_detalles'];
                    if($base=='S'){
                        $base='SI';
                    }else{
                        $base='NO';
                    }
                    $html .= "</thead><tr><td style='text-align: center'>".$numero."</td><td>".$registro['descripcion_materiales_detalles']."</td><td style='text-align: center'>".$base.
                    "</td><td style='text-align:center;'><a href='?sec=detallesMaterial&que=$ver&idMaterial=".$registro['id_materiales_detalles']."''><button type='button' class='btn btn-success'><span class='glyphicon glyphicon-search'></span></button>".
                    "</td><td style='text-align:center;'><a href='?sec=detallesMaterial&que=$modificar&idMaterial=".$registro['id_materiales_detalles']."''><button type='button' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span></button>".
                    "</td><td style='text-align:center;'><a href='./Modelo/Materiales/actualizarEstadoMaterial.php?idMaterialDetalle=".$registro['id_materiales_detalles']
                            ."&idMaterial=".$registro['id_materiales']
                            ."&idTipoMaterial=".$registro['id_tipo_materiales']
                            . "''><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-retweet'></span></button></td>";
                    $numero++;
                    $base='';
            }
            $html = $html .="</table>";
            $respuesta = array("html"=>$html);
            echo json_encode($respuesta);
    }

?>