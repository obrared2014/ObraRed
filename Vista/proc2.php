<?php
require_once("../Controlador/Busqueda_P/Busqueda_Principal.php"); 
$k= filter_input(INPUT_POST, 'r');
//r=id_provincia
$res= Traer_Comunas($k);
?>


<select id="comuna" name="comuna"  class="form-control"  required="true"><!--cuando seleccionan comuna se ejecuta la funcion myFunction2() ubicada en el archivo index.php-->
<option value="" class="form-control">Seleccione Comuna</option>
<?php while($fila=mysql_fetch_array($res)){ ?>
 <option value="<?php echo $fila['comuna_id']; ?>"  ><?php echo $fila['comuna_nombre']; ?></option>
<?php } ?>
</select>