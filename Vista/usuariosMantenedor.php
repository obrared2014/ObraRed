<!--materialesMantenedor.php-->
<?php   
    include './Modelo/usuarios/consultasUsuarios.php';
    include './Modelo/datosBD.php';    
    $idPersona=filter_input(INPUT_GET, "idPersona"); 
    $persona=traeusuariosMantenedor($idPersona,$basedatos,$puerto,$servidor,$usuario,$contrasena);
    foreach($persona as $indice => $registro){
        $run=$registro['rut'];
        $nombre=$registro['nombre'];
        $apPaterno=$registro['ap_paterno'];
        $apMaterno=$registro['ap_materno'];
        $email=$registro['email'];
        $trabajo=$registro['actividad'];
        $fono=$registro['telefono'];
        $dir=$registro['direccion'];
        $perfil=$registro['perfil'];
//        $base=$registro['material_base_materiales_detalles'];
    }    
?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="?sec=Inicio">Inicio</a></li>
            <li><a href="?sec=mantenedorUsuarios">Usuarios</a></li>
            <li class="active">Detalle Usuario</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-10">
        <div class="page-header">
            <h3><b class="glyphicon glyphicon-eye-open"></b> Datos Usuario <?php echo $nombre." ".$apPaterno; ?></h3>
        </div>
    </div>
    <div class="col-lg-2">
        <a href="?sec=mantenedorUsuarios"><input type="button" class="btn btn-block btn-primary" value="Volver"/></a>
    </div>
    <div class="col-lg-12">
        <form class="form" action="./Modelo/usuarios/actualizarUsuarios.php" name="registro_usuarios" method="POST">
            <input name="idPersona" id="idPersona" type="hidden" value="<?php echo $idPersona;?>"/>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Datos Personales</div>
                        <div class="panel-body">
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Rut</span>
                                    <input type="text" class="form-control form-group" id="rut" name="rut" required="true" placeholder="Escriba Rut" value="<?php echo $run;?>"/>
                                </div>
                            </div>
                            <div class="col-lg-12">&nbsp;</div>
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Nombre</span>
                                    <input type="text" class="form-control form-group" id="nombre" name="nombre" required="true" placeholder="Escriba Nombre" value="<?php echo $nombre;?>"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Ap. Paterno</span>
                                    <input type="text" class="form-control form-group" id="apPaterno" name="apPaterno" required="true" placeholder="Escriba Apellido Paterno" value="<?php echo $apPaterno;?>"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Ap. Materno</span>
                                    <input type="text" class="form-control form-group" id="apMaterno" name="apMaterno" required="true" placeholder="Escriba Apellido Materno" value="<?php echo $apMaterno;?>"/>
                                </div>
                            </div>
                            <div class="col-lg-12">&nbsp;</div>
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">E-Mail</span>
                                    <input type="text" class="form-control form-group" id="email" name="email" required="true" placeholder="Escriba E-Mail" value="<?php echo $email;?>"/>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <span class="input-group-addon">Dirección</span>
                                    <input type="text" class="form-control form-group" id="direccion" name="direccion" required="true" placeholder="Escriba Direcci&oacute;n" value="<?php echo $dir;?>"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Datos de Cuenta</div>
                        <div class="panel-body">
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Usuario</span>
                                    <input type="text" class="form-control form-group" id="" name="" required="true" placeholder="Escriba usuario" value=""/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Actividad</span>
                                    <input type="text" class="form-control form-group" id="actividad" name="actividad" required="true" placeholder="Escriba Actividad" value="<?php echo $trabajo;?>"/>
                                </div>
                            </div>
                            <div class="col-lg-12">&nbsp;</div>
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Teléfono</span>
                                    <input type="text" class="form-control form-group" id="fono" name="fono" required="true" placeholder="Escriba Tel&eacute;fono" value="<?php echo $fono;?>"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Perfil</span>
                                    <input type="text" class="form-control form-group" id="perfil" name="perfil" required="true" readonly value="<?php echo $perfil;?>"/>
                                </div>
                            </div>
                            <div class="col-lg-4" name="cambioPerfil" id="cambioPerfil">
                                <select class="form-control" name="selPerfil" id="selPerfil" onChange="javascript:cambiaPerfil(this.value);">
                                    <option value="">Seleccione Perfil</option>
                                    <option value="ADMIN">ADMIN</option>
                                    <option value="REGISTRO">REGISTRO</option>
                                    <option value="USUARIO">USUARIO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-lg-offset-4">
                <?php 
                $que=filter_input(INPUT_GET, "que");
                if($que=='modificar'){
                echo '<input type="submit" class="btn btn-block btn-primary" value="Actualizar"/>'; 
                } ?>
                <input name="verOmodificar" id="verOmodificar" type="hidden" value="<?php echo $que;?>"/>
            </div>
        </form>
    </div>
</div>
<script>
    if(document.getElementById("verOmodificar").value=='ver'){
        document.getElementById("nombre").readOnly=true;
        document.getElementById("apPaterno").readOnly=true;
        document.getElementById("apMaterno").readOnly=true;
        document.getElementById("email").readOnly=true;
        document.getElementById("actividad").readOnly=true;
        document.getElementById("fono").readOnly=true;
        document.getElementById("direccion").readOnly=true;
        document.getElementById("rut").readOnly=true;
        document.getElementById("cambioPerfil").style.display='none';
    }
function cambiaPerfil(valor){
    document.getElementById("perfil").value=valor;
}
    
</script>
        

