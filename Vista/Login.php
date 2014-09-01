<!--Login -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-body">
            <form action="./Controlador/ValidarUsuario.php" name="login_usuario" method="post">
                <div class="well">
                    <div class="text-center">
                        <img src="img/LOGO_2.png">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="user" placeholder="Usuario" required="true">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_usuario" placeholder="Contraseña" required="true">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-block btn-primary" data-dismiss="modal" onclick="login_usuario.submit()">Entrar <span class="glyphicon glyphicon-ok"></span></button>
                        <button type="button" class="btn btn-block btn-danger" data-dismiss="modal">Cerrar <span class="glyphicon glyphicon-remove"></span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>