<?php
    include("../../Modelo/conexion.php");
 
    if($error==1){
        if($con){
            if(!$database){
               echo '<script languaje="javascript">
                    alert("Error al seleccionar la Base de Datos");
                    location.href = "../../index.php?sec=Agrega_Materiales";
                </script>';        
            }else{
                
                if($_POST["tipo_otro"]==NULL){
                    $tipo=$_POST["tipo_material"];
                }else{
                    $tipo = $_POST["tipo_otro"];    
                }
                if($_POST["material_otro"]==NULL){
                    $material=$_POST["material"];
                }else{
                    $material = $_POST["material_otro"];
                }
//                echo "$tipo";
//                echo "$material";
                
                $descripcion_material = $_POST["descripcion"];
                $alto = $_POST["alto"];
                $largo = $_POST["largo"];
                $ancho = $_POST["ancho"];
                
                $precio1 = $_POST["precio1"];
                $precio2 = $_POST["precio2"];
                $precio3 = $_POST["precio3"];                
                

                $insertar = mysql_query("call insertar_material('$tipo','$material','$descripcion_material','$alto','$ancho','$largo','$precio1','$precio2','$precio3')");
                if(!$insertar){

                      echo ' <script languaje="javascript">
                            alert("Error al ingresar los datos");
                            location.href = "../../index.php?sec=Agrega_Materiales";
                        </script>';

                }else{
                        echo '
                        <script languaje="javascript">
                            alert("Se ingresaron los datos con exito");
                            location.href = "../../index.php?sec=Agrega_Materiales";
                        </script>';
                }    
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

    mysql_free_result($result);
    mysql_close();

?>
