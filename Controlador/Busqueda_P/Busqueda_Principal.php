<?php
function Traer_Tipo_Busqueda()
{
    require_once ('./Modelo/Buscar_P_Con/Buscar_P_C.php');
    $res = Traer_Tipo_Busqueda_C();
    Return $res;
}

function Traer_Regiones()
{
    require_once ('./Modelo/Buscar_P_Con/Buscar_P_C.php');
    $res = Traer_Regiones_C();
    return $res;
}

function Traer_Comunas($q)
{
    require_once ('../Modelo/Buscar_P_Con/Buscar_P_C.php');
    $res=  Traer_Comunas_C($q);
    return $res;
}

function Traer_Locales($r)
{
    require_once ('../Modelo/Buscar_P_Con/Buscar_P_C.php');
    $res=  Traer_Locales_C($r);
    return $res;
}

function Devuelve_Eleccion_Busqueda($k)
{
    require_once ('../Modelo/Buscar_P_Con/Buscar_P_C.php');
    $res=  Devuelve_Eleccion_Busqueda_C($k);
    Return $res ;
}

