<!-- Busqueda Materiales-->
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="?sec=Inicio">Inicio</a></li>
            <li class="active">Usuarios</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1><b class="glyphicon glyphicon-briefcase"></b>Mantenedor de Usuarios</h1>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading" data-toggle="tooltip">Usuarios</div>
            <div class="panel-body">
                <select name="usuarios" id="usuarios" class="form-control form-group" required="true" onchange="buscarPersonaMantenedor();">
                    <option value="">Seleccione Usuario</option>
                        <?php
                            include_once './Modelo/usuarios/consultasUsuarios.php';
                            include './Modelo/datosBD.php';
                            $usuarios = devuelveUsuarios($basedatos,$puerto,$servidor,$usuario,$contrasena);
                            foreach($usuarios as $indice => $registro){
                                echo "<option value=".$registro['id_persona'].">".$registro['nombre']." ".$registro['ap_paterno']."</option>";
                            }
                        ?>                                
<!--                        <input type="hidden" name="idTipo" id="idTipo" value="<?php //$idTipo; ?>"/>
                        <input type="hidden" name="idMat" id="idTipo" value="<?php //$idMat; ?>"/>-->
                </select>
            </div>
        </div>
    </div>
<!--    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading" data-toggle="tooltip">Tipo de Material</div>
            <div class="panel-body">
                <select name="material" id="material" class="form-control form-group" required="true" onchange="buscarDetalles();">
                    <option value="" >Seleccione Material</option>
                </select>
            </div>
        </div>
    </div>-->
    <div class="col-lg-12">
        <div name="detallePersona" id="detallePersona">
        </div>
    </div>
</div>
<script>

</script>   

