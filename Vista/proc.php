<?php
require_once("../Controlador/Busqueda_P/Busqueda_Principal.php"); 
$q= filter_input(INPUT_POST, 'q');
$res=  Traer_Comunas($q);
?>
<select id="comuna" name="comuna" onchange="myFunction2(this.value)" class="form-control" required="true"><!--cuando seleccionan comuna se ejecuta la funcion myFunction2() ubicada en el archivo index.php-->
<option value="" class="form-control">Seleccione Comuna</option>
<?php while($fila=mysql_fetch_array($res)){ ?>
 <option value="<?php echo $fila['id_comuna']; ?>"  ><?php echo $fila['nombre']; ?></option>
<?php } ?>
</select>