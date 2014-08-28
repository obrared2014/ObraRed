<?php 
    //Crear sesión
    session_start();
    //Vaciar sesión
    $_SESSION = array();
    //Destruir Sesión
    session_destroy();
    //Redireccionar a Index.php
    header("location: ../Index.php?sec=Inicio");