<?php
include '../Modelo/Conexion.php';

if($error==1){
    if($con){
        if(!$database){
           echo '<script languaje="javascript">
                location.href = "../Index.php?sec=Codigo&id_Codigo=01";
            </script>';        
        }else{
            $usuario = $_POST["user"];
            $password = (md5($_POST["password_usuario"]));
            $result = mysql_query("SELECT * FROM tbl_login WHERE login_usuario = '$usuario' and login_password = '$password'");
            //Validamos el nombres usuario y contraseña
            if($row = mysql_fetch_array($result)){
                $id = $row['id_persona'];
                $datos = mysql_query("call datos_usuario($id)");
                if($row = mysql_fetch_array($datos)){
                    session_start();
                    $_SESSION['id_persona'] = $id;
                    $_SESSION['rut'] = $row['rut'];
                    $_SESSION['nombre'] = $row['nombre'];
                    $_SESSION['ap_paterno'] = $row ['ap_paterno'];
                    $_SESSION['ap_materno'] = $row ['ap_materno'];
                    $_SESSION['email'] = $row ['email'];
                    $_SESSION['actividad'] = $row ['actividad'];
                    $_SESSION['telefono'] = $row ['telefono'];
                    $_SESSION['direccion'] = $row ['direccion'];
                    header("Location:../Index.php?sec=Presupuesto");
                }
            }
            else{
                echo '<script languaje="javascript">
                        location.href = "../Index.php?sec=Codigo&id_Codigo=02";
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