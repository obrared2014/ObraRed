<?php
//require_once("funciones.php");
    include '../../Modelo/datosBD.php';
    require_once("../../Modelo/usuarios/consultasUsuarios.php");
    if(isset($_POST['usuarios'])){
            
            $persona = traeUsuariosMantenedor($_POST['usuarios'],$basedatos,$puerto,$servidor,$usuario,$contrasena);
            $ver='ver';
            $modificar='modificar';
            
            $html = "<table class='table table-hover table-condensed'><thead><th style='text-align:center;' width='200'>Usuario</th><th style='text-align:center;' width='120'>Ver</th><th style='text-align:center;' width='120'>Modificar</th>";
            foreach($persona as $indice => $registro){
//                    $base=$registro['material_base_materiales_detalles'];
//                    if($base=='S'){
//                        $base='SI';
//                    }else{
//                        $base='NO';
//                    }
                    $html .= "</thead><tr><td>".$registro['nombre']
                            ." "
                            .$registro['ap_paterno']
                            ."</td><td style='text-align:center;'><a href='?sec=detallesPersona&que=$ver&idPersona=".$registro['id_persona']."''><button type='button' class='btn btn-success'><span class='glyphicon glyphicon-search'></span></button>".
                    "</td><td style='text-align:center;'><a href='?sec=detallesPersona&que=$modificar&idPersona=".$registro['id_persona']."''><button type='button' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span></button>".
                    "</td>";
//                            . "<td style='text-align:center;'><a href='./Modelo/usuarios/actualizarEstadoPersona.php?idMaterialDetalle=".$registro['id_persona']
//                            . "''><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-retweet'></span></button>";
//                    $numero++;
//                    $base='';
            }
            $html = $html .="</table>";
            $respuesta = array("html"=>$html);
            echo json_encode($respuesta);
    }

?>