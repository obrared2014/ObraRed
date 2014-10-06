<!--Formulario de Contacto-->
<div class="modal fade" id="formulario-contacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="myModalLabel">Contacte con nosotros</h3>
            </div>
            <div class="modal-body">
                <form class="form" action="" name="formulario_contacto" method="POST">
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" id="contacto_nombre" name="contacto_nombre" placeholder="Nombre" required="true">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" id="contacto_ap_paterno" name="contacto_ap_paterno" placeholder="Ap. Paterno" required="true">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control form-group" id="contacto_ap_paterno" name="contacto_ap_materno" placeholder="Ap. Materno" required="true">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control form-group" id="contacto_mail" name="contacto_mail" placeholder="E-Mail" required="true">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control form-group" id="contacto_asunto" name="contacto_asunto" placeholder="Asunto" required="true">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <textarea class="form-control form-group" rows="8" id="contacto_mensaje" name="contacto_mensaje" placeholder="Escribe aqui tu mensaje" required="true"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-block btn-primary" data-dismiss="modal" onclick="formulario_contacto.submit()">Enviar <span class="glyphicon glyphicon-ok"></span></button>
                <button type="button" class="btn btn-block btn-danger" data-dismiss="modal">Cerrar <span class="glyphicon glyphicon-remove"></span></button>
            </div>
        </div>
    </div>
</div>




