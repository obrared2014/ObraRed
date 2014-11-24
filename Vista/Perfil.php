<!-- Perfil de usuario -->
<script type="text/javascript" src="Controlador/Javascript/jQueryRut.js"></script>
<script type="text/javascript" src="Controlador/Javascript/jquery.Rut.js"></script>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="?sec=Inicio">Inicio</a></li>
            <li class="active">Perfil Usuario</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h2><b class="glyphicon glyphicon-user"></b> Actualización de Perfil </h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <form action="./Controlador/ValidarActualizacion.php" name="perfil_usuario" method="POST">
            <div class="panel panel-default">
                <div class="panel-heading" data-toggle="tooltip">Datos de Usuario</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="input-group">
                                        <span class="input-group-addon">Rut</span>
                                        <input type="text" class="form-control" id="id" name="id" required="true" value="<?php echo $_SESSION['id_persona'] ?>" style="display: none">
                                        <input type="text" class="form-control" id="rut_" name="rut" required="true" maxlength="12" value="<?php echo $_SESSION['rut'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Nombre</span>
                                    <input type="text" class="form-control" name="nombre" required="true" onkeypress="ValidaSoloLetras()" value="<?php echo $_SESSION['nombre'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Ap. Paterno</span>
                                    <input type="text" class="form-control" name="ap_paterno"  required="true" onkeypress="ValidaSoloLetras()" value="<?php echo $_SESSION['ap_paterno'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Ap. Materno</span>
                                    <input type="text" class="form-control" name="ap_materno" required="true" onkeypress="ValidaSoloLetras()" value="<?php echo $_SESSION['ap_materno'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Dirección</span>
                                    <input type="text" class="form-control" name="direccion" required="true" value="<?php echo $_SESSION['direccion'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Teléfono</span>
                                    <input type="text" class="form-control" name="telefono" required="true" onkeypress="ValidaSoloNumeros()" value="<?php echo $_SESSION['telefono'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Actividad</span>
                                    <input type="text" class="form-control" name="actividad" required="true" onkeypress="ValidaSoloLetras()" value="<?php echo $_SESSION['actividad'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">E-Mail</span>
                                    <input type="email" class="form-control" id="email" name="email" required="true" value="<?php echo $_SESSION['email'] ?>">
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-primary btn-large" value="Actualizar datos">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
