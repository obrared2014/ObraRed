<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>rsultados</h1>
        <?php
//        $id_region=$_POST['id_region'];
        $id_region=$_POST['region'];
        $id_comuna=$_POST['comuna'];
        $id_local=$_POST['nombre_local'];
        $eleccion=$_POST['elegir'];
        
        
        echo '   nombre region = '.$id_region.' <br>';
        echo '   nombre comuna= '.$id_comuna.' <br>';
        echo '   id local= '.$id_local.' <br>';
        echo '   rubro= '.$eleccion.' <br>';
        ?>
    </body>
</html>
