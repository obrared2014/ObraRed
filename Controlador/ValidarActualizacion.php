<?php
include '../Modelo/Conexion.php';
if($error==1){
    if($con){
        if(!$database){
           echo '<script languaje="javascript">
                location.href = "../Index.php?sec=Codigo&id_Codigo=01";
            </script>';        
        }else{
            $id = $_POST['id'];
            $rut = $_POST["rut"];
            $nombre = $_POST["nombre"];
            $ap_paterno = $_POST["ap_paterno"];
            $ap_materno = $_POST["ap_materno"];
            $email =$_POST["email"];
            $actividad =$_POST["actividad"];
            $telefono =$_POST["telefono"];
            $direccion =$_POST["direccion"];

            $update = mysql_query("call actualizar_usuario('$id','$rut','$nombre','$ap_paterno','$ap_materno','$email','$actividad','$telefono','$direccion')");
            if(!$update){
                echo ' <script languaje="javascript">
                        location.href = "../Index.php?sec=Codigo&id_Codigo=05";
                    </script>';

            }else{
                session_start();
                $_SESSION = array();
                session_destroy();
                echo '<script languaje="javascript">
                    location.href = "../Index.php?sec=Codigo&id_Codigo=06";
                </script>';
            }    
        }
    }else{
            echo '<script language="javascript">
        location.href = "../Index.php?sec=Codigo&id_Codigo=01";</script>'; 
    }//conexion a la base de datos con errores filtrados.  
}else{
    echo '<script languaje="javascript">
        location.href = "../Index.php?sec=Codigo&id_Codigo=01";      
    </script>';   
}

mysql_free_result($result);
mysql_close();
?>
