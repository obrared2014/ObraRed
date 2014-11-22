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
                
                $nombrePersona= htmlentities($_POST["nombre"], ENT_QUOTES,'UTF-8');
                $aPp= htmlentities($_POST["apPaterno"], ENT_QUOTES,'UTF-8');
                $aPm= htmlentities($_POST["apMaterno"], ENT_QUOTES,'UTF-8');
                $correo= htmlentities($_POST["email"], ENT_QUOTES,'UTF-8');
                $act= htmlentities($_POST["actividad"], ENT_QUOTES,'UTF-8');
                $phone= htmlentities($_POST["fono"], ENT_QUOTES,'UTF-8');
                $address= htmlentities($_POST["direccion"], ENT_QUOTES,'UTF-8');
                $perfiles= htmlentities($_POST["perfil"], ENT_QUOTES,'UTF-8');
                $rutt= htmlentities($_POST["rut"], ENT_QUOTES,'UTF-8');
                $id = $_POST["idPersona"];
//                $alto = $_POST["alto"];
//                $largo = $_POST["largo"];
//                $ancho = $_POST["ancho"];
//                $precio = $_POST["precio"];
//                $id = $_POST["idMaterial"];
//                
                $modificar='modificar';
                
                $actualizar = mysql_query("call actualizar_persona($id,'$nombrePersona','$aPp','$aPm','$correo','$act','$phone','$address','$perfiles','$rutt')");
                
//                if($insertar>0){
                if($actualizar){ 
                        echo '
                        <script languaje="javascript">
                            alert("Datos actualizados satisfactoriamente");
                            location.href = "../../index.php?sec=detallesPersona&que='.$modificar.'&idPersona='.$id.'";
                        </script>';  
                }else{
                      echo ' <script languaje="javascript">
                            alert("Error al ingresar los datos");
                            location.href = "../../index.php??sec=detallesPersona&que='.$modificar.'&idPersona='.$id.'";
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
