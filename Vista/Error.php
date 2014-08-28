<?php

/*
============================
|| Error inicio de sesion ||
============================
 */

if($_GET['id_error']== 01 ){
    echo "<div class='row'>
            <div class='panel-body'>
                <div class='alert alert-warning' role='alert'>
                    <strong><h3>:( Error en el nombre de usuario o contraseña.!</h3></strong><br/><br/>
                    <div class='form-group'>
                        <button type='button' class='btn btn-block btn-primary' data-toggle='modal' href='#' data-target='#login'>Iniciar Sesión <span class='glyphicon glyphicon-ok'></span></button>
                        <button type='button' class='btn btn-block btn-danger' data-toggle='modal' href='#' data-target='#formulario-registro'>Registrarse <span class='glyphicon glyphicon-remove'></span></button>
                    </div>
                </div>
            </div>
         </div>";
}

/*
============================
||
============================
 */
