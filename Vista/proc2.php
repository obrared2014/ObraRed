<?php
require_once 'Modelo/Conexion.php';

$r=$_POST['r'];

$res=mysql_query("select * from local where id_comuna_local=".$r."",$con);

?>

<select id="local" name="nombre_local"class="form-control" required="true" ">

    <option value="" class="form-control">Seleccione</option>
    <?php while ($fila = mysql_fetch_array($res)) { ?>
        <option value="<?php echo $fila['id_local']; ?>"><?php echo $fila['nombre']; ?></option>
    <?php } ?>

</select>
