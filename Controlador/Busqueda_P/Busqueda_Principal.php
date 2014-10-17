<?php


//function conexion(){
// $con = mysql_connect("localhost","root","root");
// if (!$con){
//  die('Could not connect: ' . mysql_error());
// }
// mysql_select_db("db_obrared", $con);
// return($con);
//}

function Traer_Tipo_Busqueda()
{
    require_once ('./Modelo/Buscar_P_Con/Buscar_P_C.php');
    $res2 = Traer_Tipo_Busqueda_C();
    Return $res2;
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
    $respuesta=  Devuelve_Eleccion_Busqueda_C($k);
    Return $respuesta ;
}

