<?php
include '../Modelo/Conexion.php';
if($error==1){
    if($con){
        if(!$database){
           echo '<script languaje="javascript">
                location.href = "../Index.php?sec=Codigo&id_Codigo=01";
            </script>';        
        }else{
            $rut = $_POST["rut"];    
            $usuario = $_POST["user"];
            $password = (md5($_POST["password_usuario"]));
            $nombre = $_POST["nombre"];
            $ap_paterno = $_POST["ap_paterno"];
            $ap_materno = $_POST["ap_materno"];
            $email =$_POST["email"];
            $actividad =$_POST["actividad"];
            $telefono =$_POST["telefono"];
            $direccion =$_POST["direccion"];

            $insertar = mysql_query("call insertar('$rut','$nombre','$ap_paterno','$ap_materno','$email','$actividad','$telefono','$direccion','$usuario','$password')");
            if(!$insertar){
                  echo ' <script languaje="javascript">
                        location.href = "../Index.php?sec=Codigo&id_Codigo=03";
                    </script>';

            }else{
                    echo '
                    <script languaje="javascript">
                        location.href = "../Index.php?sec=Codigo&id_Codigo=04";
                    </script>';

            }    
        }
    }else{
            echo '<script language="javascript">
                location.href = "../Index.php?sec=Codigo&id_Codigo=01";
            </script>'; 
    }//conexion a la base de datos con errores filtrados.  
}else{
    echo '<script languaje="javascript">
        location.href = "../Index.php?sec=Codigo&id_Codigo=01";
    </script>';   
}

mysql_free_result($result);
mysql_close();
?>
