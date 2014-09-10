<?php
include("conexion_busqueda.php");
$con=conexion();
$q=$_POST['q'];
$res=mysql_query("select * from comuna where id_region_comuna=".$q."",$con);
?>

<select id="comuna" name="comuna" onchange="myFunction2(this.value)" class="form-control" required="true"><!--cuando seleccionan comuna se ejecuta la funcion myFunction2() ubicada en el archivo index.php-->
<option value="" class="form-control">Seleccione Comuna</option>
<?php while($fila=mysql_fetch_array($res)){ ?>
 <option value="<?php echo $fila['id_comuna']; ?>"  ><?php echo $fila['nombre']; ?></option>
<?php } ?>
</select>

