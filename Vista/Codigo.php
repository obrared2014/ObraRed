<?php
/*
============================
|| Error inicio de sesion ||
============================
 */
if($_GET['id_Codigo']== 01 ){
    echo "<div class='row'>
            <div class='panel-body'>
                <div class='alert alert-danger' role='alert'>
                    <strong><h3>:( Error interno en la Base de Datos.!</h3></strong><br/><br/>
                    Favor intente mas tarde
                </div>
            </div>
         </div>";
}
/*
============================
|| Error inicio de sesion ||
============================
 */

if($_GET['id_Codigo']== 02 ){
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
|| Registro usuario Error ||
============================
 */

if($_GET['id_Codigo']== 03 ){
    echo "<div class='row'>
            <div class='panel-body'>
                <div class='alert alert-danger' role='alert'>
                    <strong><h3>:( Error al registrarse.!</h3></strong><br/><br/>
                    Favor intente mas tarde
                </div>
            </div>
         </div>";
}

/*
============================
|| Registro usuario OK    ||
============================
 */

if($_GET['id_Codigo']== 04 ){
    echo "<div class='row'>
            <div class='panel-body'>
                <div class='alert alert-success' role='alert'>
                    <strong><h3>:) Registrado con exito.!</h3></strong><br/><br/>
                    <div class='form-group'>
                        <button type='button' class='btn btn-block btn-primary' data-toggle='modal' href='#' data-target='#login'>Iniciar Sesión <span class='glyphicon glyphicon-ok'></span></button>
                    </div>     
                </div>
            </div>
         </div>";
}

/*
================================
|| Actualizacion perfil Error ||
================================
 */

if($_GET['id_Codigo']== 05 ){
    echo "<div class='row'>
            <div class='panel-body'>
                <div class='alert alert-danger' role='alert'>
                    <strong><h3>:( Error al actualizar los datos.!</h3></strong><br/><br/>
                    Favor intente mas tarde
                </div>
            </div>
         </div>";
}

/*
=============================
|| Actualizacion perfil OK ||
=============================
 */

if($_GET['id_Codigo']== 06 ){
    echo "<div class='row'>
            <div class='panel-body'>
                <div class='alert alert-success' role='alert'>
                    <strong><h3>:) Su perfil se actualizo correctamente.!</h3></strong><br/><br/>
                    Debe iniciar sesion nuevamente para refrescar sus datos</br></br>
                    <div class='form-group'>
                        <button type='button' class='btn btn-block btn-primary' data-toggle='modal' href='#' data-target='#login'>Iniciar Sesión <span class='glyphicon glyphicon-ok'></span></button>
                    </div>     
                </div>
            </div>
         </div>";
}
/*
======================================
|| Error , sin datos en la busqueda ||
======================================
 */
if($_GET['id_Codigo']== 07 ){
echo "<div class='row'>
            <div class='panel-body'>
                <div class='alert alert-warning' role='alert'>
                    <strong><h3>:(    ups,  no se encontraron datos en su busqueda !</h3></strong><br/><br/>
                    Presione aceptar para intentarlo nuevamente</br></br>
                    <div class='form-group'>
                        <a href='?sec=Buscar'> <button type='button' class='btn btn-block btn-primary'  href='?sec=Buscar' >Aceptar </button></a>
                    </div>     
                </div>
            </div>
         </div>";
}