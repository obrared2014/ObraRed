<!--Registro Usuario -->
<div class="modal fade" id="formulario-registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="myModalLabel">Registro Usuario</h3>
            </div>
            <div class="modal-body">
                <form class="form" action="./Controlador/ValidarRegistro.php" name="registro_usuario" method="POST">
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" id="rut" name="rut" placeholder="Rut" required="true" maxlength="12">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" name="nombre" placeholder="Nombre" required="true" onkeypress="ValidaSoloLetras()">
                        </div>
                        <div class="col-lg-4">
                                <input type="text" class="form-control form-group" name="ap_paterno" placeholder="Ap. Paterno" required="true" onkeypress="ValidaSoloLetras()">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" name="ap_materno" placeholder="Ap Materno" required="true" onkeypress="ValidaSoloLetras()">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control form-group" name="direccion" placeholder="Direccion" required="true">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="email" class="form-control form-group" name="email" placeholder="Email" required="true">  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" name="telefono" placeholder="Fono" required="true" onkeypress="ValidaSoloNumeros()">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" name="actividad" placeholder="Actividad" required="true" onkeypress="ValidaSoloLetras()">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" name="user" placeholder="Usuario" required="true">
                        </div>
                        <div class="col-lg-4">
                            <input type="password" class="form-control form-group" name="password_usuario" placeholder="Contraseña" required="true">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-block btn-primary" data-dismiss="modal" onclick="registro_usuario.submit()">Enviar <span class="glyphicon glyphicon-ok"></span></button>
                <button type="button" class="btn btn-block btn-danger" data-dismiss="modal">Cerrar <span class="glyphicon glyphicon-remove"></span></button>
            </div>
        </div>
    </div>
</div>