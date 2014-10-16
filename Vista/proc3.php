<?php
require_once("../Controlador/Busqueda_P/Busqueda_Principal.php"); 
//$k = $_POST['k'];
$k= filter_input(INPUT_POST, 'k');
$resultado=  Devuelve_Eleccion_Busqueda($k);
?>
<select id="comuna" name="tipo_busqueda"  class="form-control" required="true">
    <!--cuando seleccionan comuna se ejecuta la funcion myFunction2() ubicada en el archivo index.php-->
<option value="" class="form-control">Seleccione </option>
<?php while($fila=mysql_fetch_array($resultado[0])){ ?>
 <option value="<?php echo $fila[$resultado[1]]; ?>"  ><?php echo $fila[$resultado[2]]; ?></option>
<?php } ?>
</select>
