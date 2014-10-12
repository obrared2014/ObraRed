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
                
                if(isset($_POST["idUsuario"])){
                    $idUsuario = 0;
                }else{
                    $idUsuario=$_POST["idUsuario"];
                }
//                $idUsuario=$_POST["idUsuario"];
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
                    $_SESSION['idPersona'] = $row['id_persona'];
                    $_SESSION['descripcion'] = $row['descripcion_presupuesto'];
                    $_SESSION['fecha'] = $row['fecha_presupuesto'];
                    $_SESSION['alto'] = $row['alto'];
                    $_SESSION['ancho'] = $row['ancho'];
                    $_SESSION['largo'] = $row['largo'];
                    $_SESSION['metrosCubicos'] = $row['metrosCubicos'];
                    $_SESSION['idRegion'] = $row['id_region'];
                    $_SESSION['idCiudad'] = $row['id_ciudad'];
                    $_SESSION['idCemento'] = $row['id_cemento'];
                    $_SESSION['idArena'] = $row['id_arena'];
                    $_SESSION['idRipio'] = $row['id_ripio'];
                    $_SESSION['precioCemento'] = $row['precio_cemento'];
                    $_SESSION['precioArena'] = $row['precio_arena'];
                    $_SESSION['precioRipio'] = $row['precio_ripio'];                    
                    $_SESSION['cantidadCemento'] = $row['cantidad_cemento'];
                    $_SESSION['cantidadArena'] = $row['cantidad_arena'];
                    $_SESSION['cantidadRipio'] = $row['cantidad_ripio'];
                    $_SESSION['totalCemento'] = $row['total_cemento'];
                    $_SESSION['totalArena'] = $row['total_arena'];
                    $_SESSION['totalRipio'] = $row['total_ripio'];
                    $_SESSION['cantidadAgua'] = $row['cantidad_agua'];
                    $_SESSION['totalPresupuesto'] = $row['total_presupuesto'];
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
