<?php
include("conexion_busqueda.php");
$con=conexion();
$r=$_POST['r'];
$res=mysql_query("select * from local where id_comuna_local=".$r."",$con);
?>

<select id="local" name="nombre_local"class="form-control"  >
    <option value="" class="form-control">Seleccione</option>
    <?php while ($fila = mysql_fetch_array($res)) { ?>
        <option value="<?php echo $fila['id_local']; ?>"><?php echo $fila['nombre']; ?></option>
    <?php } ?>
</select>
