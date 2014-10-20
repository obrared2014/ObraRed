<?php
function Traer_Tipo_Busqueda()
{
    require_once ('./Modelo/Buscar_P_Con/Buscar_P_C.php');
    $res = Traer_Tipo_Busqueda_C();
    Return $res;
}
function Mostrar_Tipo_Busqueda($var) {
    require_once ('./Modelo/Buscar_P_Con/Buscar_P_C.php');
    $res = Mostrar_Tipo_Busqueda_C($var);
    $nombre='';
    while ($fila = mysql_fetch_array($res)) {
        $nombre=$fila['nombre'];
    }
    Return $nombre;
}
//============================================================================
function Traer_Regiones()
{
    require_once ('./Modelo/Buscar_P_Con/Buscar_P_C.php');
    $res = Traer_Regiones_C();
    return $res;
}
function Mostrar_Region($var) {
    require_once ('./Modelo/Buscar_P_Con/Buscar_P_C.php');
    $res = Mostrar_Region_C($var);
    $nombre='';
    while ($fila = mysql_fetch_array($res)) {
        $nombre=$fila['nombre'];
    }
    Return $nombre;
}
//============================================================================
function Traer_Comunas($q)
{
    require_once ('../Modelo/Buscar_P_Con/Buscar_P_C.php');
    $res=  Traer_Comunas_C($q);
    return $res;
}
function Mostrar_Comuna($var) {
    require_once ('./Modelo/Buscar_P_Con/Buscar_P_C.php');
    $res = Mostrar_Comuna_C($var);
    $nombre='';
    while ($fila = mysql_fetch_array($res)) {
        $nombre=$fila['nombre'];
    }
    Return $nombre;
}
//============================================================================

function Traer_Locales($r)
{
    require_once ('../Modelo/Buscar_P_Con/Buscar_P_C.php');
    $res=  Traer_Locales_C($r);
    return $res;
}
//============================================================================
function Devuelve_Eleccion_Busqueda($r)
{
    require_once ('../Modelo/Buscar_P_Con/Buscar_P_C.php');
    $res=  Devuelve_Eleccion_Busqueda_C($r);
    Return $res ;
}
//============================================================================
function Trae_Local_x_Tipo_Material($region,$comuna,$tipo_material)
{
    require_once ('./Modelo/Buscar_P_Con/Buscar_P_C.php');  
    $res=Trae_Local_x_Tipo_Material_C($region,$comuna,$tipo_material);  
    return $res;
}
function Trae_Local_x_Tipo_Local($region,$comuna,$tipo_local)
{
    require_once ('./Modelo/Buscar_P_Con/Buscar_P_C.php');  
    $res=Trae_Local_x_Tipo_Local_C($region,$comuna,$tipo_local);  
    return $res;
}
function Trae_Nombre_Tipo_Local($a)
{
    require_once ('./Modelo/Buscar_P_Con/Buscar_P_C.php');  
    $res=  Trae_Nombre_Tipo_Local_C($a);  
    return $res;
}
function Traer_Datos_Comuna($comuna)
{
    require_once ('./Modelo/Buscar_P_Con/Buscar_P_C.php');  
    $res= Mostrar_Comuna_C($comuna);  
    return $res;    
}



function Trae_Nombre_Tipo_Material($material)
{
    require_once ('./Modelo/Buscar_P_Con/Buscar_P_C.php');
    $nombre='';
        $resultado=  Mostrar_Materiales_Tipo_C($material);
        while ($fila = mysql_fetch_array($resultado)) 
        {
            $nombre=$fila['nombre_tipo_materiales'];
        }
    Return $nombre ;
}
//============================================================================
function Traer_Mat_por_Tipo_Contruccion($r)
{
    require_once ('../Modelo/Buscar_P_Con/Buscar_P_C.php');
    $res= Traer_Mat_por_Tipo_Contruccion_C($r);
    return $res;
}
//============================================================================
