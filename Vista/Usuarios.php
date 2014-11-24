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
            <h2><b class="glyphicon glyphicon-user"></b> Mantenedor de Usuarios</h2>
        </div>
    </div>
    <div class="col-lg-12">
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
                </select>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div name="detallePersona" id="detallePersona">
        </div>
    </div>
</div>
