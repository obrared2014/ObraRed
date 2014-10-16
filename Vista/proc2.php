<?php
require_once("../Controlador/Busqueda_P/Busqueda_Principal.php"); 
$r= filter_input(INPUT_POST, 'r');
$res=  Traer_Locales($r);
?>

<select id="local" name="nombre_local"class="form-control"  >
    <option value="" class="form-control">Seleccione</option>
    <?php while ($fila = mysql_fetch_array($res)) { ?>
        <option value="<?php echo $fila['id_local']; ?>"><?php echo $fila['nombre']; ?></option>
    <?php } ?>
</select>
