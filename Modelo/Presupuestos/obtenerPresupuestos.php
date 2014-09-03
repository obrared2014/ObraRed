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
                
                $idUsuario=$_POST["idUsuario"];
                $tipoPresupuesto=$_POST["construccion"];
                $unidadMedida=$_POST["unidadMedida"];
                $altoP=$_POST["alto"];
                $anchoP=$_POST["ancho"];
                $largoP=$_POST["largo"];
                //$idDetalle=$_POST["detalleMaterial1"];
                $idCemento=1;
                $idArena=2;
                $idRipio=3;   
                $descripcion="Calculo Radier";
                    echo '<script languaje="javascript">
                    alert("Radier='.$tipoPresupuesto
                            .' ID='.$idUsuario
                            .' Descipcion='.$descripcion
                            .' ID Cemento='.$idCemento
                            .' ID Arena='.$idCemento
                            .' ID Ripio='.$idCemento
                            .' Alto='.$altoP
                            .' Ancho='.$anchoP
                            .' Largo='.$largoP
                            .' Unidad de Medida='.$unidadMedida
                            .'");
                </script>';   
                
                $datos = mysql_query("call generar_presupuesto_radier($idUsuario,'$descripcion',$idCemento,$idArena,$idRipio,$altoP,$anchoP,$largoP,'$unidadMedida')");
                if($row = mysql_fetch_array($datos)){
                    session_start();
                    $_SESSION['id_presupuesto'] = $row['id_presupuesto_radier'];
//                    $_SESSION['idPersona'] = $row['id_presupuesto_radier'];
//                    $_SESSION['descripcion'] = $row['id_presupuesto_radier'];
//                    $_SESSION['fecha'] = $row['id_presupuesto_radier'];
//                    $_SESSION['alto'] = $row['id_presupuesto_radier'];
//                    $_SESSION['ancho'] = $row['id_presupuesto_radier'];
//                    $_SESSION['largo'] = $row['id_presupuesto_radier'];
//                    $_SESSION['metrosCubicos'] = $row['id_presupuesto_radier'];
//                    $_SESSION['idRegion'] = $row['id_presupuesto_radier'];
//                    $_SESSION['idCiudad'] = $row['id_presupuesto_radier'];
//                    $_SESSION['idCemento'] = $row['id_presupuesto_radier'];
//                    $_SESSION['idArena'] = $row['id_presupuesto_radier'];
//                    $_SESSION['idRipio'] = $row['id_presupuesto_radier'];
//                    $_SESSION['cantidadCemento'] = $row['id_presupuesto_radier'];
//                    $_SESSION['cantidadArena'] = $row['id_presupuesto_radier'];
//                    $_SESSION['cantidadRipio'] = $row['id_presupuesto_radier'];
//                    $_SESSION['totalCemento'] = $row['id_presupuesto_radier'];
//                    $_SESSION['totalArena'] = $row['id_presupuesto_radier'];
//                    $_SESSION['totalRipio'] = $row['id_presupuesto_radier'];
//                    $_SESSION['cantidadAgua'] = $row['id_presupuesto_radier'];
//                    $_SESSION['totalPresupuesto'] = $row['id_presupuesto_radier'];
                    header("Location:../../Index.php?sec=Cotizacion");
                }
//                if($insertar>0){
//                if($id){ 
//                        echo '
//                        <script languaje="javascript">
//                            alert("Se ingresaron los datos con exito");
//                            location.href = "../../index.php?sec=Agrega_Materiales";
//                        </script>';  
//                }else{
//                      echo ' <script languaje="javascript">
//                            alert("Error al ingresar los datos");
//                            location.href = "../../index.php?sec=Agrega_Materiales";
//                        </script>';
//                }                

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

//    mysql_free_result($result);
    mysql_close();

?>
