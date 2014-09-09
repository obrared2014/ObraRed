<?php
require_once 'Modelo/Conexion.php';

$k = $_POST['k'];

if ($k ==='1') {
    $res = mysql_query("select * from tbl_materiales_tipo ",$con);
    $id='id_tipo_materiales';
    $nombre='nombre_tipo_materiales';
}
if ($k === '2') {//rubro
    $res = mysql_query("select * from tipo_local ",$con);
    $id='id_tipo_local';
    $nombre='nombre_tipo_local';
}
if($k==='3')
    { //nombre materiales
    $res = mysql_query("select * from tbl_materiales ",$con); 
    $id='id_materiales_tipo';
    $nombre='nombre_materiales';
    }
?>

<select id="comuna" name="comuna"  class="form-control" required="true"><!--cuando seleccionan comuna se ejecuta la funcion myFunction2() ubicada en el archivo index.php-->

<option value="" class="form-control">Seleccione </option>
<?php while($fila=mysql_fetch_array($res)){ ?>
 <option value="<?php echo $fila[$id]; ?>"  ><?php echo $fila[$nombre]; ?></option>
<?php } ?>

</select>
