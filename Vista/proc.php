<?php
require_once("../Controlador/Busqueda_P/Busqueda_Principal.php"); 
$q= filter_input(INPUT_POST, 'q');
//q=id de region
$res= Traer_Provincia($q);
?>
<select id="provincia" name="provincia"  class="form-control" onchange="myFunction2(this.value)" required="true"><!--cuando seleccionan comuna se ejecuta la funcion myFunction2() ubicada en el archivo index.php-->
<option value="" class="form-control">Seleccione Provincia</option>
<?php while($fila=mysql_fetch_array($res)){ ?>
 <option value="<?php echo $fila['provincia_id']; ?>"  ><?php echo $fila['provincia_nombre']; ?></option>
<?php } ?>
</select>