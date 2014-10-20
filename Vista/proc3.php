<?php
require_once("../Controlador/Busqueda_P/Busqueda_Principal.php"); 
$k= filter_input(INPUT_POST, 'k');
//$resultado[3]='Seleccione';
$resultado=  Devuelve_Eleccion_Busqueda($k);
//if($k==1){
//    $onchange='myFunction2(this.value)';
//}
//if($k==2){
//    $onchange='';
//}
//onchange="<?php echo $onchange; 
//?>
<!--//SELECCIONAMOS TIPO DE BUSQUEDA-->
<select id="tipo_busqueda" name="tipo_busqueda"  class="form-control" required="true">
    <!--cuando seleccionan comuna se ejecuta la funcion myFunction2() -->
    <option value="" class="form-control"><?php echo $resultado[3]; ?></option>
<?php while($fila=mysql_fetch_array($resultado[0])){ ?>
 <option value="<?php echo $fila[$resultado[1]]; ?>"  ><?php echo $fila[$resultado[2]]; ?></option>
<?php } ?>
</select>
