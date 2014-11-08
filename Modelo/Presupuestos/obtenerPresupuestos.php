<?php
    include("../Conexion.php");
    include("./presupuestosTipo.php");
 
    if($error==1){
        if($con){
            if(!$database){
               echo '<script languaje="javascript">
                    alert("Error al seleccionar la Base de Datos");
                    location.href = "../../index.php?sec=Agrega_Materiales";
                </script>';      
            }else{
                $tipoConstruccion=$_POST["nombreConstruccion"];

                if($tipoConstruccion=='Radier'){
                    obtienePresupuestoRadier();
                }else if($tipoConstruccion=='Techo'){
                    obtienePresupuestoTecho();
                }else if($tipoConstruccion=='Muro'){
                    obtienePresupuestoMuro();
                }else if($tipoConstruccion=='Casa'){
                    obtienePresupuestoCasa();
                }else{
               echo '<script languaje="javascript">
                    location.href = "../../index.php?sec=Presupuesto";
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

//    mysql_free_result($result);
    mysql_close();

?>
