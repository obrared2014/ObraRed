<?php
    include("../Conexion.php");
    if($error==1){
        if($con){
            if(!$database){
               echo '<script languaje="javascript">
                    alert("Error al seleccionar la Base de Datos");
                    location.href = "../../index.php?sec=Agrega_Materiales";
                </script>';        
            }else{
                
                $materialDescripcion= htmlentities($_POST["material_detalle"], ENT_QUOTES,'UTF-8');
                $alto = $_POST["alto"];
                $largo = $_POST["largo"];
                $ancho = $_POST["ancho"];
                $precio = $_POST["precio"];
                $id = $_POST["idMaterial"];
                
                $modificar='modificar';
                
                $actualizar = mysql_query("call actualizar_material($id,'$materialDescripcion',$alto,$largo,$ancho,$precio)");
                
//                if($insertar>0){
                if($actualizar){ 
                        echo '
                        <script languaje="javascript">
                            alert("Datos actualizados satisfactoriamente");
                            location.href = "../../index.php?sec=detallesMaterial&que='.$modificar.'&idMaterial='.$id.'";
                        </script>';  
                }else{
                      echo ' <script languaje="javascript">
                            alert("Error al ingresar los datos");
                            location.href = "../../index.php??sec=detallesMaterial&que='.$modificar.'&idMaterial='.$id.'";
                        </script>';
                }                

//                $insertar = mysql_query("call insertar_material('$tipo','$material','$descripcion_material','$alto','$ancho','$largo','$precio1','$precio2','$precio3')");
//                if(!$insertar){
//
//                      echo ' <script languaje="javascript">
//                            alert("Error al ingresar los datos");
//                            location.href = "../../index.php?sec=Agrega_Materiales";
//                        </script>';
//
//                }else{
//                        echo '
//                        <script languaje="javascript">
//                            alert("Se ingresaron los datos con exito");
//                            location.href = "../../index.php?sec=Agrega_Materiales";
//                        </script>';
//                }    
            }
        }else{
                echo '<script language="javascript">alert("Error al tratar de conectar con MySQL");</script>'; 
        }//conexion a la base de datos con errores filtrados.  
    }else{
        echo '<script languaje="javascript">
            alert("Error al intentar conectar a la base de datos!");
            location.href = "../../index.php?sec=Agrega_Materiales";        
        </script>';   
    }

//    mysql_free_result($id);
//    mysql_close();

?>
